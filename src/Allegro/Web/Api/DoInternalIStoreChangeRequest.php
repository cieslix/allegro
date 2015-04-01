<?php

/**
 * Class Allegro_Web_Api_DoInternalIStoreChangeRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoInternalIStoreChangeRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $istoreId
     */
    protected $istoreId = null;

    /**
     * @var string $actionType
     */
    protected $actionType = null;

    /**
     * @var int $actionDate
     */
    protected $actionDate = null;

    /**
     * @var int $validDate
     */
    protected $validDate = null;

    /**
     * @param string $webapiKey
     * @param int $userId
     * @param int $istoreId
     * @param string $actionType
     * @param int $actionDate
     * @param int $validDate
     */
    public function __construct($webapiKey, $userId, $istoreId, $actionType, $actionDate, $validDate)
    {
        $this->webapiKey = $webapiKey;
        $this->userId = $userId;
        $this->istoreId = $istoreId;
        $this->actionType = $actionType;
        $this->actionDate = $actionDate;
        $this->validDate = $validDate;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
        return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return Allegro_Web_Api_DoInternalIStoreChangeRequest
     */
    public function setWebapiKey($webapiKey)
    {
        $this->webapiKey = $webapiKey;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return Allegro_Web_Api_DoInternalIStoreChangeRequest
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return int
     */
    public function getIstoreId()
    {
        return $this->istoreId;
    }

    /**
     * @param int $istoreId
     * @return Allegro_Web_Api_DoInternalIStoreChangeRequest
     */
    public function setIstoreId($istoreId)
    {
        $this->istoreId = $istoreId;
        return $this;
    }

    /**
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * @param string $actionType
     * @return Allegro_Web_Api_DoInternalIStoreChangeRequest
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * @return int
     */
    public function getActionDate()
    {
        return $this->actionDate;
    }

    /**
     * @param int $actionDate
     * @return Allegro_Web_Api_DoInternalIStoreChangeRequest
     */
    public function setActionDate($actionDate)
    {
        $this->actionDate = $actionDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getValidDate()
    {
        return $this->validDate;
    }

    /**
     * @param int $validDate
     * @return Allegro_Web_Api_DoInternalIStoreChangeRequest
     */
    public function setValidDate($validDate)
    {
        $this->validDate = $validDate;
        return $this;
    }
}
