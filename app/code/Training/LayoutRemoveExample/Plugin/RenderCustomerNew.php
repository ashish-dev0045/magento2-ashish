<?php
    namespace Training\LayoutRemoveExample\Plugin;

    use Magento\Framework\App\RequestInterface;
    use Magento\Framework\Data\Structure;

    class RenderCustomerNew
    {
        protected $request;
        public function __construct(RequestInterface $request)
        {
            $this->request = $request;
        }

        public function afterGetAttribute(Structure $subject, $result, $elementId, $attribute)
        {
            if ($this->request->getFullActionName() === 'customer_account_login') {
                if ($elementId === 'customer.new' && $attribute === 'display') {
                    return true;
                }
            }

            return $result;
        }
    }