<?php

/**
 * Class Allegro_Web_Api_DoChangeQuantityItemRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoChangeQuantityItemRequest extends Allegro_Web_Api_Abstract
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
     * @var int $newItemQuantity
     */
    protected $newItemQuantity = null;

    /**
     * @param string $sessionHandle
     * @param int $itemId
     * @param int $newItemQuantity
     */
    public function __construct($sessionHandle, $itemId, $newItemQuantity)
    {
        $this->sessionHandle = $sessionHandle;
        $this->itemId = $itemId;
        $this->newItemQuantity = $newItemQuantity;
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
     * @return Allegro_Web_Api_DoChangeQuantityItemRequest
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
     * @return Allegro_Web_Api_DoChangeQuantityItemRequest
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getNewItemQuantity()
    {
        return $this->newItemQuantity;
    }

    /**
     * @param int $newItemQuantity
     * @return Allegro_Web_Api_DoChangeQuantityItemRequest
     */
    public function setNewItemQuantity($newItemQuantity)
    {
        $this->newItemQuantity = $newItemQuantity;
        return $this;
    }
}
