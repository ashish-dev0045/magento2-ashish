<?php

namespace Training\LayoutExample\Block\Layout;

use Magento\Framework\View\Element\Template;

class Index extends Template {
    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        $pageMainTitle = $this->getLayout()->getBlock('page.main.title');
        if ($pageMainTitle) {
            $pageMainTitle->setPageTitle('Software developer');
        }

        return $this;
    }


    public function getSubtitle(): string
    {
        return "Learn Software development";
    }

    public function getNodeHTML(): string
    {
        return $this->getLayout()->createBlock(Note::class)->toHtml();
    }
    
}