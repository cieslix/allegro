<?php

/**
 * Class Allegro_Web_Api_ItemInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ItemInfo $itemInfo
     */
    protected $itemInfo = null;

    /**
     * @var Allegro_Web_Api_ArrayOfItemcatlist $itemCats
     */
    protected $itemCats = null;

    /**
     * @var Allegro_Web_Api_ArrayOfItemimagelist $itemImages
     */
    protected $itemImages = null;

    /**
     * @var Allegro_Web_Api_ArrayOfAttribstruct $itemAttribs
     */
    protected $itemAttribs = null;

    /**
     * @var Allegro_Web_Api_ArrayOfPostagestruct $itemPostageOptions
     */
    protected $itemPostageOptions = null;

    /**
     * @var Allegro_Web_Api_ItemPaymentOptions $itemPaymentOptions
     */
    protected $itemPaymentOptions = null;

    /**
     * @var Allegro_Web_Api_CompanyInfoStruct $itemCompanyInfo
     */
    protected $itemCompanyInfo = null;

    /**
     * @var Allegro_Web_Api_ProductStruct $itemProductInfo
     */
    protected $itemProductInfo = null;

    /**
     * @param Allegro_Web_Api_ItemInfo $itemInfo
     * @param Allegro_Web_Api_ArrayOfItemcatlist $itemCats
     * @param Allegro_Web_Api_ArrayOfItemimagelist $itemImages
     * @param Allegro_Web_Api_ArrayOfAttribstruct $itemAttribs
     * @param Allegro_Web_Api_ArrayOfPostagestruct $itemPostageOptions
     * @param Allegro_Web_Api_ItemPaymentOptions $itemPaymentOptions
     * @param Allegro_Web_Api_CompanyInfoStruct $itemCompanyInfo
     * @param Allegro_Web_Api_ProductStruct $itemProductInfo
     */
    public function __construct($itemInfo, $itemCats, $itemImages, $itemAttribs, $itemPostageOptions, $itemPaymentOptions, $itemCompanyInfo, $itemProductInfo)
    {
        $this->itemInfo = $itemInfo;
        $this->itemCats = $itemCats;
        $this->itemImages = $itemImages;
        $this->itemAttribs = $itemAttribs;
        $this->itemPostageOptions = $itemPostageOptions;
        $this->itemPaymentOptions = $itemPaymentOptions;
        $this->itemCompanyInfo = $itemCompanyInfo;
        $this->itemProductInfo = $itemProductInfo;
    }

    /**
     * @return Allegro_Web_Api_ItemInfo
     */
    public function getItemInfo()
    {
        return $this->itemInfo;
    }

    /**
     * @param Allegro_Web_Api_ItemInfo $itemInfo
     * @return Allegro_Web_Api_ItemInfoStruct
     */
    public function setItemInfo($itemInfo)
    {
        $this->itemInfo = $itemInfo;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItemcatlist
     */
    public function getItemCats()
    {
        return $this->itemCats;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItemcatlist $itemCats
     * @return Allegro_Web_Api_ItemInfoStruct
     */
    public function setItemCats($itemCats)
    {
        $this->itemCats = $itemCats;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItemimagelist
     */
    public function getItemImages()
    {
        return $this->itemImages;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItemimagelist $itemImages
     * @return Allegro_Web_Api_ItemInfoStruct
     */
    public function setItemImages($itemImages)
    {
        $this->itemImages = $itemImages;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfAttribstruct
     */
    public function getItemAttribs()
    {
        return $this->itemAttribs;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfAttribstruct $itemAttribs
     * @return Allegro_Web_Api_ItemInfoStruct
     */
    public function setItemAttribs($itemAttribs)
    {
        $this->itemAttribs = $itemAttribs;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPostagestruct
     */
    public function getItemPostageOptions()
    {
        return $this->itemPostageOptions;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPostagestruct $itemPostageOptions
     * @return Allegro_Web_Api_ItemInfoStruct
     */
    public function setItemPostageOptions($itemPostageOptions)
    {
        $this->itemPostageOptions = $itemPostageOptions;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ItemPaymentOptions
     */
    public function getItemPaymentOptions()
    {
        return $this->itemPaymentOptions;
    }

    /**
     * @param Allegro_Web_Api_ItemPaymentOptions $itemPaymentOptions
     * @return Allegro_Web_Api_ItemInfoStruct
     */
    public function setItemPaymentOptions($itemPaymentOptions)
    {
        $this->itemPaymentOptions = $itemPaymentOptions;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_CompanyInfoStruct
     */
    public function getItemCompanyInfo()
    {
        return $this->itemCompanyInfo;
    }

    /**
     * @param Allegro_Web_Api_CompanyInfoStruct $itemCompanyInfo
     * @return Allegro_Web_Api_ItemInfoStruct
     */
    public function setItemCompanyInfo($itemCompanyInfo)
    {
        $this->itemCompanyInfo = $itemCompanyInfo;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ProductStruct
     */
    public function getItemProductInfo()
    {
        return $this->itemProductInfo;
    }

    /**
     * @param Allegro_Web_Api_ProductStruct $itemProductInfo
     * @return Allegro_Web_Api_ItemInfoStruct
     */
    public function setItemProductInfo($itemProductInfo)
    {
        $this->itemProductInfo = $itemProductInfo;
        return $this;
    }
}
