<?php

namespace  Codilar\Grid\Controller\Index;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    /**
     * Index action
     *
     * @return $this
     */
    public function execute()
    {
        $page = $this->resultPageFactory->create();
        return $page;
    }



}