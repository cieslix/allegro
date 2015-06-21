<?php

/**
 * Class Allegro_Web_Api_DoCheckNewAuctionExtRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoCheckNewAuctionExtRequest extends Allegro_Web_Api_Abstract
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
     * @var Allegro_Web_Api_ArrayOfVariantstruct $variants
     */
    protected $variants = null;

    /**
     * @param string                               $sessionHandle
     * @param Allegro_Web_Api_ArrayOfFieldsvalue   $fields
     * @param Allegro_Web_Api_ArrayOfVariantstruct $variants
     */
    public function __construct($sessionHandle, $fields, $variants)
    {
        $this->sessionHandle = $sessionHandle;
        $this->fields        = $fields;
        $this->variants      = $variants;
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
     * @return Allegro_Web_Api_DoCheckNewAuctionExtRequest
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
     * @return Allegro_Web_Api_DoCheckNewAuctionExtRequest
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
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
     * @return Allegro_Web_Api_DoCheckNewAuctionExtRequest
     */
    public function setVariants($variants)
    {
        $this->variants = $variants;
        return $this;
    }
}
