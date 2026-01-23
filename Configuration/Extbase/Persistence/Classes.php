<?php
declare(strict_types=1);

return [
    \Anatolkin\AnatolkinRestaurant\Domain\Model\Category::class => [
        'tableName' => 'tx_anatolkin_restaurant_category',
    ],
    \Anatolkin\AnatolkinRestaurant\Domain\Model\Item::class => [
        'tableName' => 'tx_anatolkin_restaurant_item',
    ],
    \Anatolkin\AnatolkinRestaurant\Domain\Model\Location::class => [
        'tableName' => 'tx_anatolkin_restaurant_location',
    ],
];
