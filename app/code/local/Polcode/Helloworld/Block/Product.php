<?php

class Polcode_Helloworld_Block_Product 
    extends Mage_Core_Block_Template
{
    
    protected $products;
    
    protected function _prepareLayout() {
        $this->products = Mage::getModel('helloworld/product')->getCollection();
        
//        foreach ($this->products as $product)
//        {
//            var_dump($product->debug());
//        }
//        die;
        
    }

    
    public function getProducts() {
        return $this->products;
    }


    
}
