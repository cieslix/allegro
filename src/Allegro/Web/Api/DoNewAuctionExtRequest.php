<?php

/**
 * Class Allegro_Web_Api_DoNewAuctionExtRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoNewAuctionExtRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFieldsvalue $fields
     */
    protected $fields = null;

    /**
     * @var int $itemTemplateId
     */
    protected $itemTemplateId = null;

    /**
     * @var int $localId
     */
    protected $localId = null;

    /**
     * @var Allegro_Web_Api_ItemTemplateCreateStruct $itemTemplateCreate
     */
    protected $itemTemplateCreate = null;

    /**
     * @var Allegro_Web_Api_ArrayOfVariantstruct $variants
     */
    protected $variants = null;

    /**
     * @var Allegro_Web_Api_ArrayOfTagnamestruct $tags
     */
    protected $tags = null;

    /**
     * @param string $sessionHandle
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $fields
     * @param int $itemTemplateId
     * @param int $localId
     * @param Allegro_Web_Api_ItemTemplateCreateStruct $itemTemplateCreate
     * @param Allegro_Web_Api_ArrayOfVariantstruct $variants
     * @param Allegro_Web_Api_ArrayOfTagnamestruct $tags
     */
    public function __construct($sessionHandle, $fields, $itemTemplateId, $localId, $itemTemplateCreate, $variants, $tags)
    {
        $this->sessionHandle = $sessionHandle;
        $this->fields = $fields;
        $this->itemTemplateId = $itemTemplateId;
        $this->localId = $localId;
        $this->itemTemplateCreate = $itemTemplateCreate;
        $this->variants = $variants;
        $this->tags = $tags;
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
     * @return Allegro_Web_Api_DoNewAuctionExtRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFieldsvalue
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $fields
     * @return Allegro_Web_Api_DoNewAuctionExtRequest
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemTemplateId()
    {
        return $this->itemTemplateId;
    }

    /**
     * @param int $itemTemplateId
     * @return Allegro_Web_Api_DoNewAuctionExtRequest
     */
    public function setItemTemplateId($itemTemplateId)
    {
        $this->itemTemplateId = $itemTemplateId;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalId()
    {
        return $this->localId;
    }

    /**
     * @param int $localId
     * @return Allegro_Web_Api_DoNewAuctionExtRequest
     */
    public function setLocalId($localId)
    {
        $this->localId = $localId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ItemTemplateCreateStruct
     */
    public function getItemTemplateCreate()
    {
        return $this->itemTemplateCreate;
    }

    /**
     * @param Allegro_Web_Api_ItemTemplateCreateStruct $itemTemplateCreate
     * @return Allegro_Web_Api_DoNewAuctionExtRequest
     */
    public function setItemTemplateCreate($itemTemplateCreate)
    {
        $this->itemTemplateCreate = $itemTemplateCreate;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfVariantstruct
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfVariantstruct $variants
     * @return Allegro_Web_Api_DoNewAuctionExtRequest
     */
    public function setVariants($variants)
    {
        $this->variants = $variants;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfTagnamestruct
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfTagnamestruct $tags
     * @return Allegro_Web_Api_DoNewAuctionExtRequest
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }
}
