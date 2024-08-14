<?php

namespace Training\LayoutExample\Controller\Layout;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\ResultInterface;

class Index implements ActionInterface
{
    /**
     * @var PageFactory
     */
    protected $pageFactory;

    /**
     * Constructor
     *
     * @param PageFactory $pageFactory
     */
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface
     */
    public function execute()
    {
        // $result = $this->pageFactory->create();
        // $result->getConfig()->getTitle()->set('Custom title overwritten');
        // // $result->getLayout()->getBlock('page.main.title')->setPageTitle('Software Developer');
        // return $result;
        return $this->pageFactory->create();
    }
}