<?php

class MageFM_ShippingCost_Model_AdminhtmlSalesOrderCreate extends Mage_Adminhtml_Model_Sales_Order_Create
{

    public function setShippingMethod($method)
    {
        parent::setShippingMethod($method);
        $this->collectShippingRates();
        return $this;
    }

}
