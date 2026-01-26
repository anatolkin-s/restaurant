CREATE TABLE tx_anatolkinrestaurant_domain_model_category (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    title varchar(255) DEFAULT '' NOT NULL,
    description text,
    items int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
    hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource mediumblob,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

CREATE TABLE tx_anatolkinrestaurant_domain_model_item (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    category int(11) unsigned DEFAULT '0' NOT NULL,
    title varchar(255) DEFAULT '' NOT NULL,
    description text,
    price decimal(10,2) DEFAULT '0.00' NOT NULL,
    calories int(11) DEFAULT '0' NOT NULL,
    protein decimal(10,1) DEFAULT '0.0' NOT NULL,
    fat decimal(10,1) DEFAULT '0.0' NOT NULL,
    carbohydrate decimal(10,1) DEFAULT '0.0' NOT NULL,
    image int(11) unsigned DEFAULT '0',
    allergens int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
    hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource mediumblob,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

CREATE TABLE tx_anatolkinrestaurant_domain_model_allergen (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,
    title varchar(255) DEFAULT '' NOT NULL,
    code varchar(10) DEFAULT '' NOT NULL,
    icon int(11) unsigned DEFAULT '0',

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
    hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource mediumblob,

    PRIMARY KEY (uid),
    KEY parent (pid)
);

CREATE TABLE tx_anatolkinrestaurant_item_allergen_mm (
    uid_local int(11) unsigned DEFAULT '0' NOT NULL,
    uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) unsigned DEFAULT '0' NOT NULL,
    sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,
    PRIMARY KEY (uid_local, uid_foreign),
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);
