<?php

class Polcode_Helloworld_Model_Observer {
    
    public function checkProduct( $observer )
    {
        
        // check if module is enabled
        if (!Mage::helper('helloworld/helper')->isEnabled()) {
            return $this;
        }
        
        // get sku from system settings
        $sku = Mage::getStoreConfig('polcode_section/product/sku');
        
        // check
        foreach ($observer->getEvent()->getOrder()->getAllItems() as $item)
        {
            if ( strtolower($sku) == strtolower($item->getProduct()['sku']) ) {
                
                $product = Mage::getModel('helloworld/product');
                $product->setSku($item->getProduct()['sku']);
                $product->save();
                
                break;
                
            }
        }
     
        return $this;
    }
    
}
