<?php


class Day_Two_RenderController 
    extends Mage_Core_Controller_Front_Action {
    
    public function blockAction()
    {
        $this->getResponse()->setBody('Hello world');
    }
    
    public function overrideAction() 
    {
        $blockHtml = $this->getLayout()
                ->createBlock('day_two/sample')
                ->toHtml();
        
        $this->getResponse()->setBody($blockHtml);
    }
    
    public function templateAction()
    {
        $blockHtml = $this->getLayout()
                ->createBlock('core/template')
                ->setTemplate('day_two/random.phtml')
                ->toHtml();
        
        $this->getResponse()->setBody($blockHtml);
    }
    
    public function registryAction()
    {
        Mage::register('some_var', 'some_value');
        
        $blockHtml = $this->getLayout()
                ->createBlock('day_two/registry')
                ->setTemplate('day_two/registry.phtml')
                ->toHtml();
        
        $this->getResponse()->setBody($blockHtml);
    }
    
    public function listBlockAction()
    {
        $block = $this->getLayout()
                ->createBlock('core/text_list');
        
        $blockA = $this->getLayout()
                ->createBlock('core/text')
                ->setText('<h1>Block A</h1>');
        
        $blockB = $this->getLayout()
                ->createBlock('core/text')
                ->setText('<h1>Block B</h1>');
        
        $block->insert($blockA)->insert($blockB);
        
        //$this->getResponse()->setBody($block->toHtml());
        
        $this->loadLayout();
        $this->getLayout()
             ->getBlock('content')
             ->insert($block);
        $this->renderLayout();
                
    }
    
}
