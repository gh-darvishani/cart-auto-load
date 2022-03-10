<?php

namespace Darvishani\CartAutoLoad\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class AutoLoadVM implements ArgumentInterface
{
    const XML_AUTO_LOAD_MINI_CART="checkout/sidebar/minicart_autoload";

    private  $_scopeConfig;

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    )
    {
        $this->_scopeConfig = $scopeConfig;
    }

    function isEnable(){
        return $this->_scopeConfig->getValue(self::XML_AUTO_LOAD_MINI_CART,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

}
