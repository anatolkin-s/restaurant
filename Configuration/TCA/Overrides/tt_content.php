<?php
defined('TYPO3') || die();

(static function (string $extensionKey = 'anatolkinrestaurant') {
    $plugins = [
        'Pi1'          => ['title' => 'Menu List',    'flex' => 'Menu.xml'],
        'Pi2'          => ['title' => 'Item Details', 'flex' => 'Item.xml'],
        'Categories'   => ['title' => 'Category Nav', 'flex' => 'Categories.xml'],
        'Integrations' => ['title' => 'Integrations', 'flex' => 'Integrations.xml'],
        'Checkout'     => ['title' => 'Checkout',     'flex' => 'Checkout.xml']
    ];

    foreach ($plugins as $name => $config) {
        $pluginSignature = strtolower($extensionKey) . '_' . strtolower($name);
        
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Anatolkinrestaurant',
            $name,
            'Restaurant: ' . $config['title'],
            'restaurant-icon' // Добавляем иконку сразу в регистрацию
        );

        // Убираем только select_key. 
        // pages (Storage) и recursive (Глубина) возвращаются автоматически.
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'select_key';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
            $pluginSignature,
            'FILE:EXT:anatolkinrestaurant/Configuration/FlexForms/' . $config['flex']
        );
    }
})('anatolkinrestaurant');
