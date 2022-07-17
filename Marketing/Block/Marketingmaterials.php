<?php
namespace Milltek\Marketing\Block;
use Magento\Framework\View\Element\Template;

class Marketingmaterials extends \Magento\Framework\View\Element\Template
{    
   	 protected $_customerFactory;
	protected $customerSession;

	
    public function __construct(
	Template\Context $context,
	\Magento\Customer\Model\CustomerFactory $customerFactory,
	\Magento\Customer\Model\Session $customerSession,
	array $data = array()
	)
    {
			parent::__construct($context, $data);
			$this->_customerFactory = $customerFactory;
	
           $this->customerSession = $customerSession;
		   $check = $this->customerSession->isLoggedIn();
			$this->setData('logincheck',$check);
    }
	
	public function isCustomerLoggedIn()
	{
		return $this->customerSession->isLoggedIn();
	}
	
	public function getBaseUrl()
	{		
	$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
	$storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
	$baseUrl = $storeManager->getStore()->getBaseUrl();
	return $baseUrl;
	
	}
	





}
