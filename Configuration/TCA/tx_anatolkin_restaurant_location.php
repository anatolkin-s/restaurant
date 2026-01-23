<?php
return [
    'ctrl' => [
        'title' => 'Restaurant Location',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'searchFields' => 'title,address,email',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/content/content-special-menu.svg'
    ],
    'types' => [
        '1' => ['showitem' => 'title, address, phone, email, opening_hours, external_id, configurations'],
    ],
    'columns' => [
        'title' => [
            'label' => 'Location Name',
            'config' => ['type' => 'input', 'required' => true]
        ],
        'address' => [
            'label' => 'Address',
            'config' => ['type' => 'text', 'cols' => 40, 'rows' => 3]
        ],
        'phone' => [
            'label' => 'Phone',
            'config' => ['type' => 'input']
        ],
        'email' => [
            'label' => 'Email',
            'config' => ['type' => 'input', 'renderType' => 'inputLink']
        ],
        'opening_hours' => [
            'label' => 'Opening Hours (JSON)',
            'config' => ['type' => 'text', 'cols' => 40, 'rows' => 5]
        ],
        'external_id' => [
            'label' => 'External System ID (POS)',
            'config' => ['type' => 'input']
        ],
        'configurations' => [
            'label' => 'Extra Configurations',
            'config' => ['type' => 'text']
        ],
    ],
];
