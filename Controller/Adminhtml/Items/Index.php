<?php
/**
 * Copyright © 2015 Bluethink. All rights reserved.
 */

namespace Bluethink\Custom\Controller\Adminhtml\Items;

class Index extends \Bluethink\Custom\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Bluethink_Custom::custom');
        $resultPage->getConfig()->getTitle()->prepend(__('Bluethink Items'));
        $resultPage->addBreadcrumb(__('Bluethink'), __('Bluethink'));
        $resultPage->addBreadcrumb(__('Items'), __('Items'));
        return $resultPage;
    }
}
