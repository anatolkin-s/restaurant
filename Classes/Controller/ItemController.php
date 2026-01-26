<?php
declare(strict_types=1);

namespace Anatolkin\Anatolkinrestaurant\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Anatolkin\Anatolkinrestaurant\Domain\Repository\CategoryRepository;
use Anatolkin\Anatolkinrestaurant\Domain\Model\Item;

class ItemController extends ActionController
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @param Item|null $item
     * @return ResponseInterface
     */
    public function showAction(?Item $item = null): ResponseInterface
    {
        if (!$item) {
            return $this->redirect('list', 'Menu');
        }

        // Передаем данные в шаблон
        $this->view->assign('item', $item);
        $this->view->assign('categories', $this->categoryRepository->findAll());
        $this->view->assign('settings', $this->settings);

        return $this->htmlResponse();
    }
/**
     * @return ResponseInterface
     */
    public function checkoutAction(): ResponseInterface
    {
        $this->view->assign('settings', $this->settings);
        return $this->htmlResponse();
    }

}
