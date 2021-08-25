<?php
/**
 * package Custom_Tab
 */
namespace Custom\Tab\Helper;
 
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const CONFIG_ENABLE_TAB = 'custom_config/general/enable';

    const CONFIG_DISPLAY_TAB = 'custom_config/general/display_text';
 
    /**
     * Return if enable custom tab text 
     * @return bool
     */
    public function getConfigTabEnabled() {
        return $this->scopeConfig->getValue(
            self::CONFIG_ENABLE_TAB,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Return if display text  
     * @return bool
     */
    public function getConfigTextDisplay() {
        return $this->scopeConfig->getValue(
            self::CONFIG_DISPLAY_TAB,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}