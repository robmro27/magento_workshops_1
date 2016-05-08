<?php

class Day_Two_IndexController 
    extends Mage_Core_Controller_Front_Action {
    
    public function indexAction() 
    {
        echo 'Hello world new module !!!';
    }
    
    public function modelAction() 
    {
        echo get_class(Mage::getModel('day_two/wathever'));
    }
    
    public function layoutAction()
    {
        $xml = $this->loadLayout()->getLayout()->getUpdate()->asString();
        
        $this->getResponse()
                ->setHeader('ContentType','text/xml')
                ->setBody($xml);
        
        Mage::log($xml, \Zend_Log::DEBUG, 'layout.log', true);
        
        $model = Mage::getModel('day_two/wathever');
        Mage::log($model->debug(), \Zend_Log::DEBUG, 'model.log', true);
    }
    
    public function defaultAction()
    {
        $this->loadLayout()->renderLayout();
    }
}
