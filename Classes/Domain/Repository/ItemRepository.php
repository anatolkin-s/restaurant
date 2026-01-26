<?php
declare(strict_types=1);
namespace Anatolkin\Anatolkinrestaurant\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

class ItemRepository extends Repository
{
    public function __construct(Typo3QuerySettings $querySettings)
    {
        parent::__construct();
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }
}
