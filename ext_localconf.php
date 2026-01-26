<?php
defined('TYPO3') || die();

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Anatolkin\Anatolkinrestaurant\Controller\MenuController;
use Anatolkin\Anatolkinrestaurant\Controller\ItemController;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

(static function() {
    ExtensionUtility::configurePlugin('Anatolkinrestaurant', 'Pi1', [MenuController::class => 'list'], [MenuController::class => 'list']);
    ExtensionUtility::configurePlugin('Anatolkinrestaurant', 'Pi2', [ItemController::class => 'show'], [ItemController::class => 'show']);
    ExtensionUtility::configurePlugin('Anatolkinrestaurant', 'Categories', [MenuController::class => 'categories'], [MenuController::class => 'categories']);
    ExtensionUtility::configurePlugin('Anatolkinrestaurant', 'Integrations', [MenuController::class => 'integrations'], [MenuController::class => 'integrations']);
    ExtensionUtility::configurePlugin('Anatolkinrestaurant', 'Checkout', [ItemController::class => 'checkout'], [ItemController::class => 'checkout']);

    ExtensionManagementUtility::addPageTSConfig('@import "EXT:anatolkinrestaurant/Configuration/TsConfig/Page/NewContentElementWizard.tsconfig"');

    // ИСПРАВЛЕННЫЙ ПУТЬ:
    ExtensionManagementUtility::addTypoScriptSetup('@import "EXT:anatolkinrestaurant/Configuration/TypoScript/setup.typoscript"');
})();
