<?php
return [
    'ctrl' => [
        'title' => 'Allergen',
        'label' => 'title',
        'iconfile' => 'EXT:anatolkinrestaurant/Resources/Public/Icons/menu.svg',
        'persistence' => [
            'className' => \Anatolkin\Anatolkinrestaurant\Domain\Model\Allergen::class
        ],
    ],
    'columns' => [
        'title' => ['label' => 'Name', 'config' => ['type' => 'input', 'required' => true]],
        'code' => ['label' => 'Code', 'config' => ['type' => 'input']],
        'icon' => [
            'label' => 'Icon',
            'config' => ['type' => 'file', 'maxitems' => 1, 'allowed' => 'common-image-types']
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'title, code, icon'],
    ],
];
