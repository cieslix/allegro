<?php

/**
 * Class Allegro_Web_Api_PostBuyItemInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PostBuyItemInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $itemPostBuyFormInfo
     */
    protected $itemPostBuyFormInfo = null;

    /**
     * @param int $itemId
     * @param int $itemPostBuyFormInfo
     */
    public function __construct($itemId, $itemPostBuyFormInfo)
    {
        $this->itemId = $itemId;
        $this->itemPostBuyFormInfo = $itemPostBuyFormInfo;
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
     * @return Allegro_Web_Api_PostBuyItemInfoStruct
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemPostBuyFormInfo()
    {
        return $this->itemPostBuyFormInfo;
    }

    /**
     * @param int $itemPostBuyFormInfo
     * @return Allegro_Web_Api_PostBuyItemInfoStruct
     */
    public function setItemPostBuyFormInfo($itemPostBuyFormInfo)
    {
        $this->itemPostBuyFormInfo = $itemPostBuyFormInfo;
        return $this;
    }
}
