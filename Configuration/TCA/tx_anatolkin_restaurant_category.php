<?php
return [
    'ctrl' => [
        'title' => 'Menu Category',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'iconfile' => 'EXT:core/Resources/Public/Icons/T3Icons/mimetypes/mimetypes-x-content-divider.svg'
    ],
    'types' => [
        '1' => ['showitem' => 'title, description, items, external_id'],
    ],
    'columns' => [
        'title' => [
            'label' => 'Category Title',
            'config' => ['type' => 'input', 'required' => true]
        ],
        'description' => [
            'label' => 'Description',
            'config' => ['type' => 'text']
        ],
        'items' => [
            'label' => 'Menu Items',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_anatolkin_restaurant_item',
                'foreign_field' => 'category',
                'maxitems' => 99,
                'appearance' => [
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'useSortable' => 1
                ]
            ]
        ],
        'external_id' => [
            'label' => 'External ID',
            'config' => ['type' => 'input']
        ],
    ],
];
