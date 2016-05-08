<?php

class Polcode_Helloworld_IndexController 
    extends Mage_Core_Controller_Front_Action {
    
    public function indexAction() 
    {
        $product = Mage::getModel('helloworld/product');
        $product->setSku('test');
        $product->save();
        
    }
    
    public function blockAction()
    {
        //die('IndexController::blockAction');
        $this->loadLayout();
        $this->renderLayout();
    }
    
}
