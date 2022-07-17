<?php
namespace Milltek\Marketing\Controller\Index;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Magento\Customer\Model\Session;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;
	
    public function __construct(Context $context, PageFactory $pageFactory, Session $customerSession)
    {
        $this->pageFactory = $pageFactory;
		$this->customerSession = $customerSession;	
        return parent::__construct($context);
    }

    public function execute()
    {        
        $page_object = $this->pageFactory->create();;
			
        return $page_object;
    }    
}