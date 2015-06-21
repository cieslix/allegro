<?php

/**
 * Class Allegro_Web_Api_ItemsNotAddedStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemsNotAddedStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var string $itemErrorCode
     */
    protected $itemErrorCode = null;

    /**
     * @var string $itemErrorDescription
     */
    protected $itemErrorDescription = null;

    /**
     * @param int    $itemId
     * @param string $itemErrorCode
     * @param string $itemErrorDescription
     */
    public function __construct($itemId, $itemErrorCode, $itemErrorDescription)
    {
        $this->itemId               = $itemId;
        $this->itemErrorCode        = $itemErrorCode;
        $this->itemErrorDescription = $itemErrorDescription;
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
     * @return Allegro_Web_Api_ItemsNotAddedStruct
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemErrorCode()
    {
        return $this->itemErrorCode;
    }

    /**
     * @param string $itemErrorCode
     * @return Allegro_Web_Api_ItemsNotAddedStruct
     */
    public function setItemErrorCode($itemErrorCode)
    {
        $this->itemErrorCode = $itemErrorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemErrorDescription()
    {
        return $this->itemErrorDescription;
    }

    /**
     * @param string $itemErrorDescription
     * @return Allegro_Web_Api_ItemsNotAddedStruct
     */
    public function setItemErrorDescription($itemErrorDescription)
    {
        $this->itemErrorDescription = $itemErrorDescription;
        return $this;
    }
}
