<?php

/**
 * Class Allegro_Web_Api_DoGetTransactionsIDsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetTransactionsIDsRequest extends Allegro_Web_Api_Abstract
{
    const USER_ROLE_SELLER = 'seller';
    const USER_ROLE_BUYER  = 'buyer';

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $itemsIdArray
     */
    protected $itemsIdArray = null;

    /**
     * @var string $userRole
     */
    protected $userRole = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $shipmentIdArray
     */
    protected $shipmentIdArray = null;

    /**
     * @param string                      $sessionHandle
     * @param Allegro_Web_Api_ArrayOfLong $itemsIdArray
     * @param string                      $userRole
     * @param Allegro_Web_Api_ArrayOfLong $shipmentIdArray
     */
    public function __construct($sessionHandle, $itemsIdArray, $userRole, $shipmentIdArray)
    {
        $this->sessionHandle   = $sessionHandle;
        $this->itemsIdArray    = $itemsIdArray;
        $this->userRole        = $userRole;
        $this->shipmentIdArray = $shipmentIdArray;
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
     * @return Allegro_Web_Api_DoGetTransactionsIDsRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getItemsIdArray()
    {
        return $this->itemsIdArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $itemsIdArray
     * @return Allegro_Web_Api_DoGetTransactionsIDsRequest
     */
    public function setItemsIdArray($itemsIdArray)
    {
        $this->itemsIdArray = $itemsIdArray;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * @param string $userRole
     * @return Allegro_Web_Api_DoGetTransactionsIDsRequest
     */
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getShipmentIdArray()
    {
        return $this->shipmentIdArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $shipmentIdArray
     * @return Allegro_Web_Api_DoGetTransactionsIDsRequest
     */
    public function setShipmentIdArray($shipmentIdArray)
    {
        $this->shipmentIdArray = $shipmentIdArray;
        return $this;
    }
}
