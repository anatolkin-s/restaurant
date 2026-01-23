<?php
defined('TYPO3') or die();

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Anatolkin\AnatolkinRestaurant\Controller\MenuController;

ExtensionUtility::configurePlugin(
    'AnatolkinRestaurant',
    'MenuList',
    [MenuController::class => 'list'],
    [MenuController::class => '']
);
