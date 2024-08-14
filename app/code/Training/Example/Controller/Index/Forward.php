<?php

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\ResultInterface;

class Forward implements ActionInterface
{
    /**
     * @var forwardFactory
     */
    protected $forwardFactory;

    /**
     * Constructor
     *
     * @param forwardFactory $forwardFactory
     */
    public function __construct(ForwardFactory $forwardFactory)
    {
        $this->forwardFactory = $forwardFactory;
    }

    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface
     */
    public function execute()
    {
        return $this->forwardFactory->create()->forward('page');
    }
}