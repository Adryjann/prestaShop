<?php

$sql[] = 'CREATE TABLE IF NOT EXISTS `psa_exported_csv_order_file` (
        `id_psa_exported_csv_order_file` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(255),
        `date` datetime,
        PRIMARY KEY (`id_psa_exported_csv_order_file`)
        ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;';

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}