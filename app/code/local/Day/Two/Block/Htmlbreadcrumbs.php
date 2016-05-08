<?php


class Day_Two_Block_Htmlbreadcrumbs 
    extends Mage_Page_Block_Html_Breadcrumbs {
    
    
    public function _construct() {
        $this->addCrumb('google', 
                array(
                    'label' => 'Google!',
                    'title' => 'Go to the google',
                    'link'  => 'http://www.google.com',
                ));
                parent::_construct();
    }
    
}
