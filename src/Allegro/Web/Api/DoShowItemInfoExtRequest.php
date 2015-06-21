<?php

/**
 * Class Allegro_Web_Api_DoShowItemInfoExtRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoShowItemInfoExtRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $getDesc
     */
    protected $getDesc = null;

    /**
     * @var int $getImageUrl
     */
    protected $getImageUrl = null;

    /**
     * @var int $getAttribs
     */
    protected $getAttribs = null;

    /**
     * @var int $getPostageOptions
     */
    protected $getPostageOptions = null;

    /**
     * @var int $getCompanyInfo
     */
    protected $getCompanyInfo = null;

    /**
     * @var int $getProductInfo
     */
    protected $getProductInfo = null;

    /**
     * @param string $sessionHandle
     * @param int    $itemId
     * @param int    $getDesc
     * @param int    $getImageUrl
     * @param int    $getAttribs
     * @param int    $getPostageOptions
     * @param int    $getCompanyInfo
     * @param int    $getProductInfo
     */
    public function __construct($sessionHandle, $itemId, $getDesc, $getImageUrl, $getAttribs, $getPostageOptions, $getCompanyInfo, $getProductInfo)
    {
        $this->sessionHandle     = $sessionHandle;
        $this->itemId            = $itemId;
        $this->getDesc           = $getDesc;
        $this->getImageUrl       = $getImageUrl;
        $this->getAttribs        = $getAttribs;
        $this->getPostageOptions = $getPostageOptions;
        $this->getCompanyInfo    = $getCompanyInfo;
        $this->getProductInfo    = $getProductInfo;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return Allegro_Web_Api_DoShowItemInfoExtRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return Allegro_Web_Api_DoShowItemInfoExtRequest
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getGetDesc()
    {
        return $this->getDesc;
    }

    /**
     * @param int $getDesc
     * @return Allegro_Web_Api_DoShowItemInfoExtRequest
     */
    public function setGetDesc($getDesc)
    {
        $this->getDesc = $getDesc;
        return $this;
    }

    /**
     * @return int
     */
    public function getGetImageUrl()
    {
        return $this->getImageUrl;
    }

    /**
     * @param int $getImageUrl
     * @return Allegro_Web_Api_DoShowItemInfoExtRequest
     */
    public function setGetImageUrl($getImageUrl)
    {
        $this->getImageUrl = $getImageUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getGetAttribs()
    {
        return $this->getAttribs;
    }

    /**
     * @param int $getAttribs
     * @return Allegro_Web_Api_DoShowItemInfoExtRequest
     */
    public function setGetAttribs($getAttribs)
    {
        $this->getAttribs = $getAttribs;
        return $this;
    }

    /**
     * @return int
     */
    public function getGetPostageOptions()
    {
        return $this->getPostageOptions;
    }

    /**
     * @param int $getPostageOptions
     * @return Allegro_Web_Api_DoShowItemInfoExtRequest
     */
    public function setGetPostageOptions($getPostageOptions)
    {
        $this->getPostageOptions = $getPostageOptions;
        return $this;
    }

    /**
     * @return int
     */
    public function getGetCompanyInfo()
    {
        return $this->getCompanyInfo;
    }

    /**
     * @param int $getCompanyInfo
     * @return Allegro_Web_Api_DoShowItemInfoExtRequest
     */
    public function setGetCompanyInfo($getCompanyInfo)
    {
        $this->getCompanyInfo = $getCompanyInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getGetProductInfo()
    {
        return $this->getProductInfo;
    }

    /**
     * @param int $getProductInfo
     * @return Allegro_Web_Api_DoShowItemInfoExtRequest
     */
    public function setGetProductInfo($getProductInfo)
    {
        $this->getProductInfo = $getProductInfo;
        return $this;
    }
}
