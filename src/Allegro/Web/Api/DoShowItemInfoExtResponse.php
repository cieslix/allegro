<?php

/**
 * Class Allegro_Web_Api_DoShowItemInfoExtResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoShowItemInfoExtResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ItemInfoExt $itemListInfoExt
     */
    protected $itemListInfoExt = null;

    /**
     * @var Allegro_Web_Api_ArrayOfItemcatlist $itemCatPath
     */
    protected $itemCatPath = null;

    /**
     * @var Allegro_Web_Api_ArrayOfItemimagelist $itemImgList
     */
    protected $itemImgList = null;

    /**
     * @var Allegro_Web_Api_ArrayOfAttribstruct $itemAttribList
     */
    protected $itemAttribList = null;

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
     * @var Allegro_Web_Api_ArrayOfItemvariantstruct $itemVariants
     */
    protected $itemVariants = null;

    /**
     * @param Allegro_Web_Api_ItemInfoExt $itemListInfoExt
     * @param Allegro_Web_Api_ArrayOfItemcatlist $itemCatPath
     * @param Allegro_Web_Api_ArrayOfItemimagelist $itemImgList
     * @param Allegro_Web_Api_ArrayOfAttribstruct $itemAttribList
     * @param Allegro_Web_Api_ArrayOfPostagestruct $itemPostageOptions
     * @param Allegro_Web_Api_ItemPaymentOptions $itemPaymentOptions
     * @param Allegro_Web_Api_CompanyInfoStruct $itemCompanyInfo
     * @param Allegro_Web_Api_ProductStruct $itemProductInfo
     * @param Allegro_Web_Api_ArrayOfItemvariantstruct $itemVariants
     */
    public function __construct($itemListInfoExt, $itemCatPath, $itemImgList, $itemAttribList, $itemPostageOptions, $itemPaymentOptions, $itemCompanyInfo, $itemProductInfo, $itemVariants)
    {
        $this->itemListInfoExt = $itemListInfoExt;
        $this->itemCatPath = $itemCatPath;
        $this->itemImgList = $itemImgList;
        $this->itemAttribList = $itemAttribList;
        $this->itemPostageOptions = $itemPostageOptions;
        $this->itemPaymentOptions = $itemPaymentOptions;
        $this->itemCompanyInfo = $itemCompanyInfo;
        $this->itemProductInfo = $itemProductInfo;
        $this->itemVariants = $itemVariants;
    }

    /**
     * @return Allegro_Web_Api_ItemInfoExt
     */
    public function getItemListInfoExt()
    {
        return $this->itemListInfoExt;
    }

    /**
     * @param Allegro_Web_Api_ItemInfoExt $itemListInfoExt
     * @return Allegro_Web_Api_DoShowItemInfoExtResponse
     */
    public function setItemListInfoExt($itemListInfoExt)
    {
        $this->itemListInfoExt = $itemListInfoExt;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItemcatlist
     */
    public function getItemCatPath()
    {
        return $this->itemCatPath;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItemcatlist $itemCatPath
     * @return Allegro_Web_Api_DoShowItemInfoExtResponse
     */
    public function setItemCatPath($itemCatPath)
    {
        $this->itemCatPath = $itemCatPath;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItemimagelist
     */
    public function getItemImgList()
    {
        return $this->itemImgList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItemimagelist $itemImgList
     * @return Allegro_Web_Api_DoShowItemInfoExtResponse
     */
    public function setItemImgList($itemImgList)
    {
        $this->itemImgList = $itemImgList;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfAttribstruct
     */
    public function getItemAttribList()
    {
        return $this->itemAttribList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfAttribstruct $itemAttribList
     * @return Allegro_Web_Api_DoShowItemInfoExtResponse
     */
    public function setItemAttribList($itemAttribList)
    {
        $this->itemAttribList = $itemAttribList;
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
     * @return Allegro_Web_Api_DoShowItemInfoExtResponse
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
     * @return Allegro_Web_Api_DoShowItemInfoExtResponse
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
     * @return Allegro_Web_Api_DoShowItemInfoExtResponse
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
     * @return Allegro_Web_Api_DoShowItemInfoExtResponse
     */
    public function setItemProductInfo($itemProductInfo)
    {
        $this->itemProductInfo = $itemProductInfo;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItemvariantstruct
     */
    public function getItemVariants()
    {
        return $this->itemVariants;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItemvariantstruct $itemVariants
     * @return Allegro_Web_Api_DoShowItemInfoExtResponse
     */
    public function setItemVariants($itemVariants)
    {
        $this->itemVariants = $itemVariants;
        return $this;
    }
}
