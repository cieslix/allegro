<?php

/**
 * Class Allegro_Web_Api_StructSellAgain
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_StructSellAgain extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $sellItemId
     */
    protected $sellItemId = null;

    /**
     * @var string $sellItemInfo
     */
    protected $sellItemInfo = null;

    /**
     * @var int $sellItemLocalId
     */
    protected $sellItemLocalId = null;

    /**
     * @param int    $sellItemId
     * @param string $sellItemInfo
     * @param int    $sellItemLocalId
     */
    public function __construct($sellItemId, $sellItemInfo, $sellItemLocalId)
    {
        $this->sellItemId      = $sellItemId;
        $this->sellItemInfo    = $sellItemInfo;
        $this->sellItemLocalId = $sellItemLocalId;
    }

    /**
     * @return int
     */
    public function getSellItemId()
    {
        return $this->sellItemId;
    }

    /**
     * @param int $sellItemId
     * @return Allegro_Web_Api_StructSellAgain
     */
    public function setSellItemId($sellItemId)
    {
        $this->sellItemId = $sellItemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellItemInfo()
    {
        return $this->sellItemInfo;
    }

    /**
     * @param string $sellItemInfo
     * @return Allegro_Web_Api_StructSellAgain
     */
    public function setSellItemInfo($sellItemInfo)
    {
        $this->sellItemInfo = $sellItemInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellItemLocalId()
    {
        return $this->sellItemLocalId;
    }

    /**
     * @param int $sellItemLocalId
     * @return Allegro_Web_Api_StructSellAgain
     */
    public function setSellItemLocalId($sellItemLocalId)
    {
        $this->sellItemLocalId = $sellItemLocalId;
        return $this;
    }
}
