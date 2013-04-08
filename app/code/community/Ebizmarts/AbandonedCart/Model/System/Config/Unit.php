<?php
/**
 * Created by Ebizmarts
 * User: gonzalo@ebizmarts.com
 * Date: 4/8/13
 * Time: 11:46 AM
 */
class Ebizmarts_AbandonedCart_Model_System_Config_Unit
{
    public function toOptionArray()
    {
        $options = array(
            array('value'=> 0, 'label' => Mage::helper('ebizmarts_abandonedcart')->__('Days')),
            array('value'=> 1, 'label' => Mage::helper('ebizmarts_abandonedcart')->__('Hours'))
        );
        return $options;
    }

}