<?php

class TM_NavigationPro_Upgrade_1_4_4 extends TM_Core_Model_Module_Upgrade
{

    public function getOperations()
    {
        return array(
            'configuration' => $this->_getConfiguration(),
        );
    }

    private function _getConfiguration()
    {
        return array(
            'navigationpro/top/enabled' => 1,
        );
    }
}
