<?php
defined('TYPO3') or die();

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Anatolkin\AnatolkinRestaurant\Controller\MenuController;

ExtensionUtility::configurePlugin(
    'AnatolkinRestaurant',
    'MenuList',
    [MenuController::class => 'list'],
    [MenuController::class => ''] // Non-cacheable actions
);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTypoScript(
    'anatolkin_restaurant',
    'setup',
    "@import 'EXT:anatolkin_restaurant/Configuration/TypoScript/setup.typoscript'"
);
