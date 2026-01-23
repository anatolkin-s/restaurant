<?php
declare(strict_types=1);

namespace Anatolkin\AnatolkinRestaurant\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Anatolkin\AnatolkinRestaurant\Domain\Repository\CategoryRepository;

class MenuController extends ActionController
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $categories = $this->categoryRepository->findAll();
        $this->view->assign('categories', $categories);
        return $this->htmlResponse();
    }
}
