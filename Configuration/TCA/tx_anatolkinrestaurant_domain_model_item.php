<?php
return [
    'ctrl' => [
        'title' => 'Dish Item',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'enablecolumns' => ['disabled' => 'hidden'],
        'iconfile' => 'EXT:anatolkinrestaurant/Resources/Public/Icons/menu.svg',
        'persistence' => [
            'className' => \Anatolkin\Anatolkinrestaurant\Domain\Model\Item::class
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'title, badge, price, category, description, image, --div--;Nutrition, calories, protein, fat, carbohydrate, --div--;Allergens, allergens'],
    ],
    'columns' => [
        'title' => ['label' => 'Title', 'config' => ['type' => 'input', 'required' => true]],
        'badge' => [
            'label' => 'Highlight Badge',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'None', 'value' => ''],
                    ['label' => 'New', 'value' => 'new'],
                    ['label' => 'Chef Choice', 'value' => 'chef'],
                    ['label' => 'Spicy 🌶️', 'value' => 'spicy'],
                    ['label' => 'Vegan 🌿', 'value' => 'vegan'],
                ],
            ],
        ],
        'price' => ['label' => 'Price', 'config' => ['type' => 'input', 'eval' => 'double2']],
        'description' => ['label' => 'Description', 'config' => ['type' => 'text', 'enableRichtext' => true]],
        'category' => [
            'label' => 'Category', 
            'config' => [
                'type' => 'select', 
                'renderType' => 'selectSingle', 
                'foreign_table' => 'tx_anatolkinrestaurant_domain_model_category'
            ]
        ],
        'image' => [
            'label' => 'Photos',
            'config' => [
                'type' => 'file',
                'maxitems' => 10,
                'allowed' => 'common-image-types'
            ]
        ],
        'calories' => ['label' => 'Calories', 'config' => ['type' => 'number']],
        'protein' => ['label' => 'Protein (g)', 'config' => ['type' => 'input']],
        'fat' => ['label' => 'Fat (g)', 'config' => ['type' => 'input']],
        'carbohydrate' => ['label' => 'Carbs (g)', 'config' => ['type' => 'input']],
        'allergens' => [
            'label' => 'Allergens',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_anatolkinrestaurant_domain_model_allergen',
                'MM' => 'tx_anatolkinrestaurant_item_allergen_mm'
            ]
        ],
    ],
];
