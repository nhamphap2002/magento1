<?php
class IWD_StoreLocatori_Block_Adminhtml_List_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

    public function __construct()
    {
        parent::__construct();
        $this->setId('stores_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('storelocatori')->__('Store Information'));
    }
}
