<?php
namespace Anatolkin\Anatolkinrestaurant\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Anatolkin\Anatolkinrestaurant\Domain\Repository\CategoryRepository;

class MenuController extends ActionController
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository) {
        $this->categoryRepository = $categoryRepository;
    }

    public function listAction(): ResponseInterface {
        $this->view->assign('categories', $this->categoryRepository->findAll());
        $this->view->assign('settings', $this->settings);
        return $this->htmlResponse();
    }

    public function categoriesAction(): ResponseInterface {
        $this->view->assign('categories', $this->categoryRepository->findAll());
        $this->view->assign('settings', $this->settings);
        return $this->htmlResponse();
    }

    public function integrationsAction(): ResponseInterface {
        $this->view->assign('settings', $this->settings);
        return $this->htmlResponse();
    }
}
