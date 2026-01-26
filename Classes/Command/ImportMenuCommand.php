<?php
namespace Anatolkin\Anatolkinrestaurant\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class ImportMenuCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $csvFile = '/var/www/typo3/tester-site/menu.csv';
        $storagePid = 5; 

        if (!file_exists($csvFile)) {
            $output->writeln('<error>CSV file not found at ' . $csvFile . '</error>');
            return Command::FAILURE;
        }

        $connectionPool = GeneralUtility::makeInstance(ConnectionPool::class);
        $handle = fopen($csvFile, "r");
        fgetcsv($handle, 1000, ";"); // Пропуск заголовка

        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
            if (count($data) < 4) continue;

            $categoryName = trim($data[0]);
            $title = trim($data[1]);

            // 1. Обработка категории
            $catId = $connectionPool->getConnectionForTable('tx_anatolkinrestaurant_domain_model_category')
                ->fetchOne('SELECT uid FROM tx_anatolkinrestaurant_domain_model_category WHERE title = ? AND pid = ? AND deleted = 0', [$categoryName, $storagePid]);

            if (!$catId) {
                $connectionPool->getQueryBuilderForTable('tx_anatolkinrestaurant_domain_model_category')
                    ->insert('tx_anatolkinrestaurant_domain_model_category')
                    ->values(['pid' => $storagePid, 'title' => $categoryName, 'crdate' => time(), 'tstamp' => time()])
                    ->executeStatement();
                $catId = $connectionPool->getConnectionForTable('tx_anatolkinrestaurant_domain_model_category')->lastInsertId();
                $output->writeln('<info>Created category: ' . $categoryName . '</info>');
            }

            // 2. Обработка блюда (Item)
            $itemId = $connectionPool->getConnectionForTable('tx_anatolkinrestaurant_domain_model_item')
                ->fetchOne('SELECT uid FROM tx_anatolkinrestaurant_domain_model_item WHERE title = ? AND pid = ? AND deleted = 0', [$title, $storagePid]);

            $fields = [
                'pid' => $storagePid,
                'category' => (int)$catId,
                'title' => $title,
                'description' => $data[2],
                'price' => (float)$data[3],
                'calories' => (int)($data[4] ?? 0),
                'protein' => (float)($data[5] ?? 0),
                'fat' => (float)($data[6] ?? 0),
                'carbohydrate' => (float)($data[7] ?? 0),
                'badge' => $data[8] ?? '',
                'tstamp' => time(),
            ];

            if ($itemId) {
                $itemQB = $connectionPool->getQueryBuilderForTable('tx_anatolkinrestaurant_domain_model_item');
                $itemQB->update('tx_anatolkinrestaurant_domain_model_item')->where($itemQB->expr()->eq('uid', (int)$itemId));
                foreach ($fields as $k => $v) { $itemQB->set($k, $v); }
                $itemQB->executeStatement();
                $output->writeln('Updated item: ' . $title);
            } else {
                $fields['crdate'] = time();
                $connectionPool->getQueryBuilderForTable('tx_anatolkinrestaurant_domain_model_item')
                    ->insert('tx_anatolkinrestaurant_domain_model_item')
                    ->values($fields)
                    ->executeStatement();
                $output->writeln('Inserted item: ' . $title);
            }
        }
        fclose($handle);
        $output->writeln('<info>Import finished successfully!</info>');
        return Command::SUCCESS;
    }
}
