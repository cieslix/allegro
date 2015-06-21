<?php

/**
 * Class Allegro_Web_Api_DoVerifyItemResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoVerifyItemResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $itemListed
     */
    protected $itemListed = null;

    /**
     * @var int $itemStartingTime
     */
    protected $itemStartingTime = null;

    /**
     * @param int $itemId
     * @param int $itemListed
     * @param int $itemStartingTime
     */
    public function __construct($itemId, $itemListed, $itemStartingTime)
    {
        $this->itemId           = $itemId;
        $this->itemListed       = $itemListed;
        $this->itemStartingTime = $itemStartingTime;
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
     * @return Allegro_Web_Api_DoVerifyItemResponse
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemListed()
    {
        return $this->itemListed;
    }

    /**
     * @param int $itemListed
     * @return Allegro_Web_Api_DoVerifyItemResponse
     */
    public function setItemListed($itemListed)
    {
        $this->itemListed = $itemListed;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemStartingTime()
    {
        return $this->itemStartingTime;
    }

    /**
     * @param int $itemStartingTime
     * @return Allegro_Web_Api_DoVerifyItemResponse
     */
    public function setItemStartingTime($itemStartingTime)
    {
        $this->itemStartingTime = $itemStartingTime;
        return $this;
    }
}
