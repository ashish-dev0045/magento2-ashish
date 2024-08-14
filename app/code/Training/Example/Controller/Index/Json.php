<?php

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;

class Json implements ActionInterface
{
    /**
     * @var jsonFactory
     */
    protected $jsonFactory;

    /**
     * Constructor
     *
     * @param jsonFactory $jsonFactory
     */
    public function __construct(JsonFactory $jsonFactory)
    {
        $this->jsonFactory = $jsonFactory;
    }

    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface
     */
    public function execute()
    {
        return $this->jsonFactory->create()
        ->setHeader('Content-type', 'application/json')
        ->setData([
            'name' => 'Ashish Gupta',
            'job' => 'Software Developer'
        ]);
    }
}