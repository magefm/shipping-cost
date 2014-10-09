<?php

$this->startSetup();
$this->run("

ALTER TABLE `{$this->getTable('sales/order')}` ADD
    shipping_cost DECIMAL(12,4) NULL;

ALTER TABLE `{$this->getTable('sales/quote_address')}` ADD
    shipping_cost DECIMAL(12,4) NULL;

");
$this->endSetup();