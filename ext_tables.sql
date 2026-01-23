CREATE TABLE tx_anatolkin_restaurant_location (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    address text,
    phone varchar(255) DEFAULT '' NOT NULL,
    email varchar(255) DEFAULT '' NOT NULL,
    opening_hours text,
    external_id varchar(255) DEFAULT '' NOT NULL,
    configurations text,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

CREATE TABLE tx_anatolkin_restaurant_category (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) unsigned DEFAULT '0' NOT NULL,

    title varchar(255) DEFAULT '' NOT NULL,
    description text,
    items int(11) unsigned DEFAULT '0' NOT NULL,
    external_id varchar(255) DEFAULT '' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

CREATE TABLE tx_anatolkin_restaurant_item (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,

    category int(11) unsigned DEFAULT '0' NOT NULL,
    title varchar(255) DEFAULT '' NOT NULL,
    description text,
    price decimal(10,2) DEFAULT '0.00' NOT NULL,
    image int(11) unsigned DEFAULT '0',
    allergens varchar(255) DEFAULT '' NOT NULL,
    sku varchar(255) DEFAULT '' NOT NULL,
    external_id varchar(255) DEFAULT '' NOT NULL,
    is_available tinyint(4) unsigned DEFAULT '1' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid)
);
