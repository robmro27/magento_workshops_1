<?php

$installer = Mage::getResourceModel('catalog/setup', 'catalog_setup');
$installer->startSetup();
 
$installer->addAttribute(
    'catalog_product',
    'my_code',
    array(
        'type'          => 'varchar',
        'label'         => 'My Product Code',
        'required'      => false,
        'sort_order'    => 5 // Place just below SKU (4)
        )
);
 
$installer->endSetup();