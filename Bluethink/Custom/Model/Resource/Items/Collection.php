<?php
/**
 * Copyright © 2015 Bluethink. All rights reserved.
 */

namespace Bluethink\Custom\Model\Resource\Items;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Bluethink\Custom\Model\Items', 'Bluethink\Custom\Model\Resource\Items');
    }
}
