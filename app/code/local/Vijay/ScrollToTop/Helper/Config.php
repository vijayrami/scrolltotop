<?php

class Vijay_ScrollToTop_Helper_Config extends Mage_Core_Helper_Data
{
    const GENERAL_IS_ENABLED = 'vijay_scrolltotop/general/is_enabled';

    const FRONTEND_COLOR = 'vijay_scrolltotop/frontend/color';
    const FRONTEND_POSITION = 'vijay_scrolltotop/frontend/position';

    const DISPLAY_ON_ALL = 'vijay_scrolltotop/display_on/all';
    const DISPLAY_ON_HOME = 'vijay_scrolltotop/display_on/home';
    const DISPLAY_ON_CMS = 'vijay_scrolltotop/display_on/cms';
    const DISPLAY_ON_CATEGORY = 'vijay_scrolltotop/display_on/category';
    const DISPLAY_ON_PRODUCT = 'vijay_scrolltotop/display_on/product';
    const DISPLAY_ON_CHECKOUT = 'vijay_scrolltotop/display_on/checkout';
    const DISPLAY_ON_CART = 'vijay_scrolltotop/display_on/cart';
    const DISPLAY_ON_ACCOUNT = 'vijay_scrolltotop/display_on/account';
    const DISPLAY_ON_OTHER = 'vijay_scrolltotop/display_on/other';

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return bool
     */
    public function isEnabled($store = null)
    {
        $isConfigEnabled = Mage::getStoreConfigFlag(self::GENERAL_IS_ENABLED, $store);
        $isModuleEnabled = $this->isModuleEnabled();
        $isModuleOutputEnabled = $this->isModuleOutputEnabled();
        return $isConfigEnabled && $isModuleEnabled && $isModuleOutputEnabled;
    }

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return bool
     */
    public function getColor($store = null)
    {
        return Mage::getStoreConfig(self::FRONTEND_COLOR, $store);
    }

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return bool
     */
    public function getPosition($store = null)
    {
        return Mage::getStoreConfig(self::FRONTEND_POSITION, $store);
    }

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return string
     */
    public function canDisplayOnAll($store = null)
    {
        return Mage::getStoreConfigFlag(self::DISPLAY_ON_ALL, $store);
    }

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return bool
     */
    public function canDisplayOnHome($store = null)
    {
        return Mage::getStoreConfigFlag(self::DISPLAY_ON_HOME, $store);
    }

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return bool
     */
    public function canDisplayOnCms($store = null)
    {
        return Mage::getStoreConfigFlag(self::DISPLAY_ON_CMS, $store);
    }

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return bool
     */
    public function canDisplayOnCategory($store = null)
    {
        return Mage::getStoreConfigFlag(self::DISPLAY_ON_CATEGORY, $store);
    }

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return bool
     */
    public function canDisplayOnProduct($store = null)
    {
        return Mage::getStoreConfigFlag(self::DISPLAY_ON_PRODUCT, $store);
    }

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return bool
     */
    public function canDisplayOnCheckout($store = null)
    {
        return Mage::getStoreConfigFlag(self::DISPLAY_ON_CHECKOUT, $store);
    }

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return bool
     */
    public function canDisplayOnCart($store = null)
    {
        return Mage::getStoreConfigFlag(self::DISPLAY_ON_CART, $store);
    }

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return bool
     */
    public function canDisplayOnAccount($store = null)
    {
        return Mage::getStoreConfigFlag(self::DISPLAY_ON_ACCOUNT, $store);
    }

    /**
     * @param null|int|Mage_Core_Model_Store $store
     *
     * @return bool
     */
    public function canDisplayOnOther($store = null)
    {
        return Mage::getStoreConfigFlag(self::DISPLAY_ON_OTHER, $store);
    }
}