<?php
/**
 * Copyright © 2015 Bluethink. All rights reserved.
 */

namespace Bluethink\Custom\Model\Resource;

class Items extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('bluethink_custom_items', 'id');
    }
}
