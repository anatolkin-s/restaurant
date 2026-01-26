<?php
return [
    'ctrl' => [
        'title' => 'Category',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:anatolkinrestaurant/Resources/Public/Icons/menu.svg',
        'persistence' => [
            'className' => \Anatolkin\Anatolkinrestaurant\Domain\Model\Category::class
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'hidden, title, description, items'],
    ],
    'columns' => [
        'hidden' => [
            'label' => 'Hide from Menu',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [[ 'label' => '', 'value' => '' ]]
            ]
        ],
        'title' => ['label' => 'Title', 'config' => ['type' => 'input', 'required' => true]],
        'description' => ['label' => 'Description', 'config' => ['type' => 'text']],
        'items' => [
            'label' => 'Dishes',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_anatolkinrestaurant_domain_model_item',
                'foreign_field' => 'category',
                'appearance' => ['collapseAll' => 1, 'levelLinksPosition' => 'top']
            ]
        ],
    ],
];
