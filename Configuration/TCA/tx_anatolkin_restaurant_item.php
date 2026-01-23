<?php
return [
    'ctrl' => [
        'title' => 'Menu Item',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/content/content-bullets.svg'
    ],
    'types' => [
        '1' => ['showitem' => 'title, price, category, is_available, description, image, allergens, sku, external_id'],
    ],
    'columns' => [
        'title' => [
            'label' => 'Item Name',
            'config' => ['type' => 'input', 'required' => true]
        ],
        'price' => [
            'label' => 'Price',
            'config' => ['type' => 'number', 'format' => 'decimal', 'size' => 10]
        ],
        'category' => [
            'label' => 'Category',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_anatolkin_restaurant_category',
                'size' => 1,
                'minitems' => 1
            ]
        ],
        'is_available' => [
            'label' => 'Is Available',
            'config' => ['type' => 'check', 'default' => 1]
        ],
        'description' => [
            'label' => 'Description',
            'config' => ['type' => 'text']
        ],
        'image' => [
            'label' => 'Image',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-image-types'
            ]
        ],
        'allergens' => [
            'label' => 'Allergens',
            'config' => ['type' => 'input']
        ],
        'sku' => [
            'label' => 'SKU / Article',
            'config' => ['type' => 'input']
        ],
        'external_id' => [
            'label' => 'External System ID',
            'config' => ['type' => 'input']
        ],
    ],
];
