<?php

/**
 * Class Allegro_Web_Api_DoCancelBidItemRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoCancelBidItemRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $cancelItemId
     */
    protected $cancelItemId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfInt $cancelBidsArray
     */
    protected $cancelBidsArray = null;

    /**
     * @var string $cancelBidsReason
     */
    protected $cancelBidsReason = null;

    /**
     * @var int $cancelAddToBlackList
     */
    protected $cancelAddToBlackList = null;

    /**
     * @param string $sessionHandle
     * @param int $cancelItemId
     * @param Allegro_Web_Api_ArrayOfInt $cancelBidsArray
     * @param string $cancelBidsReason
     * @param int $cancelAddToBlackList
     */
    public function __construct($sessionHandle, $cancelItemId, $cancelBidsArray, $cancelBidsReason, $cancelAddToBlackList)
    {
        $this->sessionHandle = $sessionHandle;
        $this->cancelItemId = $cancelItemId;
        $this->cancelBidsArray = $cancelBidsArray;
        $this->cancelBidsReason = $cancelBidsReason;
        $this->cancelAddToBlackList = $cancelAddToBlackList;
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
     * @return Allegro_Web_Api_DoCancelBidItemRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getCancelItemId()
    {
        return $this->cancelItemId;
    }

    /**
     * @param int $cancelItemId
     * @return Allegro_Web_Api_DoCancelBidItemRequest
     */
    public function setCancelItemId($cancelItemId)
    {
        $this->cancelItemId = $cancelItemId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfInt
     */
    public function getCancelBidsArray()
    {
        return $this->cancelBidsArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfInt $cancelBidsArray
     * @return Allegro_Web_Api_DoCancelBidItemRequest
     */
    public function setCancelBidsArray($cancelBidsArray)
    {
        $this->cancelBidsArray = $cancelBidsArray;
        return $this;
    }

    /**
     * @return string
     */
    public function getCancelBidsReason()
    {
        return $this->cancelBidsReason;
    }

    /**
     * @param string $cancelBidsReason
     * @return Allegro_Web_Api_DoCancelBidItemRequest
     */
    public function setCancelBidsReason($cancelBidsReason)
    {
        $this->cancelBidsReason = $cancelBidsReason;
        return $this;
    }

    /**
     * @return int
     */
    public function getCancelAddToBlackList()
    {
        return $this->cancelAddToBlackList;
    }

    /**
     * @param int $cancelAddToBlackList
     * @return Allegro_Web_Api_DoCancelBidItemRequest
     */
    public function setCancelAddToBlackList($cancelAddToBlackList)
    {
        $this->cancelAddToBlackList = $cancelAddToBlackList;
        return $this;
    }
}
