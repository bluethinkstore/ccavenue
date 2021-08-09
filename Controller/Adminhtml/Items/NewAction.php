<?php
/**
 * Copyright © 2015 Bluethink. All rights reserved.
 */

namespace Bluethink\Custom\Controller\Adminhtml\Items;

class NewAction extends \Bluethink\Custom\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
