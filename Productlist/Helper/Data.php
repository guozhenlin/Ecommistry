<?php
/**
 *  Ecommistry
 *
 *  @category    Ecommistry
 *  @package     Ecommistry_ProductList
 *  @author      Tom Lin <linzw07@gmail.com>
 *  @copyright   Copyright (c) 2016 Ecommistry. 
 */
namespace  Ecommistry\Productlist\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const XML_PATH_CUSTOMER_NOTE = 'customer/handle_display/display_limit';

    /**
     * Check if the extension is enabled
     *
     * @return boolean
     */
    public function getProductLimit() {
        return $this->scopeConfig->getValue(
            self::XML_PATH_CUSTOMER_NOTE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
