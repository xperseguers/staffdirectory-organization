CREATE TABLE tx_staffdirectory_domain_model_organization
(
    tx_staffdirectoryorganization_address       varchar(100) DEFAULT '' NOT NULL,
    tx_staffdirectoryorganization_postal_code   varchar(10)  DEFAULT '' NOT NULL,
    tx_staffdirectoryorganization_locality      varchar(50)  DEFAULT '' NOT NULL,
    tx_staffdirectoryorganization_email         varchar(80)  DEFAULT '' NOT NULL,
    tx_staffdirectoryorganization_telephone     varchar(20)  DEFAULT '' NOT NULL,
    tx_staffdirectoryorganization_website       varchar(100) DEFAULT '' NOT NULL,
    tx_staffdirectoryorganization_opening_hours text,
    tx_staffdirectoryorganization_images        int(50)      DEFAULT '0' NOT NULL,
);
