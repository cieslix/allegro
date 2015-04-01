<?php

/**
 * Class Allegro_Web_Api_ItemPostBuyDataStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemPostBuyDataStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfUserpostbuydatastruct $usersPostBuyData
     */
    protected $usersPostBuyData = null;

    /**
     * @param int $itemId
     * @param Allegro_Web_Api_ArrayOfUserpostbuydatastruct $usersPostBuyData
     */
    public function __construct($itemId, $usersPostBuyData)
    {
        $this->itemId = $itemId;
        $this->usersPostBuyData = $usersPostBuyData;
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
     * @return Allegro_Web_Api_ItemPostBuyDataStruct
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfUserpostbuydatastruct
     */
    public function getUsersPostBuyData()
    {
        return $this->usersPostBuyData;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfUserpostbuydatastruct $usersPostBuyData
     * @return Allegro_Web_Api_ItemPostBuyDataStruct
     */
    public function setUsersPostBuyData($usersPostBuyData)
    {
        $this->usersPostBuyData = $usersPostBuyData;
        return $this;
    }
}
