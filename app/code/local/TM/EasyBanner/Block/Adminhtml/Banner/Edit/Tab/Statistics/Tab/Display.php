<?php

class TM_EasyBanner_Block_Adminhtml_Banner_Edit_Tab_Statistics_Tab_Display
    extends TM_EasyBanner_Block_Adminhtml_Banner_Edit_Tab_Statistics_Graph
{
    public function __construct()
    {
        $this->setHtmlId('display');
        parent::__construct();
    }

    protected function _prepareData()
    {
        $this->setDataHelperName('easybanner/adminhtml_data');
        $this->getDataHelper()->setParam('banner_id', $this->getRequest()->getParam('id'));
//        $this->getDataHelper()->setParam('store', 1);
//        $this->getDataHelper()->setParam('website', 1);
//        $this->getDataHelper()->setParam('group', 1);
        $this->getDataHelper()->setParam(
            'period',
            $this->getRequest()->getParam('period')?$this->getRequest()->getParam('period'):'7d'
            );

        $this->setDataRows('displays');
        $this->_axisMaps = array(
            'x' => 'range',
            'y' => 'displays');

        parent::_prepareData();
    }
}
