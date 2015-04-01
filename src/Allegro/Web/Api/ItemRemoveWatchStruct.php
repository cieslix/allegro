<?php

/**
 * Class Allegro_Web_Api_ItemRemoveWatchStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemRemoveWatchStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $result
     */
    protected $result = null;

    /**
     * @param int $itemId
     * @param int $result
     */
    public function __construct($itemId, $result)
    {
        $this->itemId = $itemId;
        $this->result = $result;
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
     * @return Allegro_Web_Api_ItemRemoveWatchStruct
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param int $result
     * @return Allegro_Web_Api_ItemRemoveWatchStruct
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
