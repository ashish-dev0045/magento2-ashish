<?php

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Controller\ResultInterface;

class Redirect implements ActionInterface
{
    /**
     * @var redirectFactory
     */
    protected $redirectFactory;

    /**
     * Constructor
     *
     * @param redirectFactory $redirectFactory
     */
    public function __construct(RedirectFactory $redirectFactory)
    {
        $this->redirectFactory = $redirectFactory;
    }

    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface
     */
    public function execute()
    {
        return $this->redirectFactory->create()->setUrl('/example/index/page');
    }
}