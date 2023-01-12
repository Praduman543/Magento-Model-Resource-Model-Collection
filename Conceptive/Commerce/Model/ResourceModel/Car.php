<?php

namespace Conceptive\Commerce\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Car extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('my_cars', 'car_id');
    }
}