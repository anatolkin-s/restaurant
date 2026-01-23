CREATE TABLE tx_anatolkin_restaurant_location (
    title varchar(255) DEFAULT '' NOT NULL,
    address text,
    phone varchar(255) DEFAULT '' NOT NULL,
    email varchar(255) DEFAULT '' NOT NULL,
    opening_hours text,
    external_id varchar(255) DEFAULT '' NOT NULL,
    configurations text
);

CREATE TABLE tx_anatolkin_restaurant_category (
    title varchar(255) DEFAULT '' NOT NULL,
    description text,
    items int(11) unsigned DEFAULT '0' NOT NULL,
    external_id varchar(255) DEFAULT '' NOT NULL
);

CREATE TABLE tx_anatolkin_restaurant_item (
    category int(11) unsigned DEFAULT '0' NOT NULL,
    title varchar(255) DEFAULT '' NOT NULL,
    description text,
    price decimal(10,2) DEFAULT '0.00' NOT NULL,
    image int(11) unsigned DEFAULT '0',
    allergens varchar(255) DEFAULT '' NOT NULL,
    sku varchar(255) DEFAULT '' NOT NULL,
    external_id varchar(255) DEFAULT '' NOT NULL,
    is_available tinyint(4) unsigned DEFAULT '1' NOT NULL
);
