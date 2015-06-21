<?php

/**
 * Class Allegro_Web_Api_DoGetUserItemsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetUserItemsRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @param int    $userId
     * @param string $webapiKey
     * @param int    $countryId
     * @param int    $offset
     * @param int    $limit
     */
    public function __construct($userId, $webapiKey, $countryId, $offset, $limit)
    {
        $this->userId    = $userId;
        $this->webapiKey = $webapiKey;
        $this->countryId = $countryId;
        $this->offset    = $offset;
        $this->limit     = $limit;
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
     * @return Allegro_Web_Api_DoGetUserItemsRequest
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
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
     * @return Allegro_Web_Api_DoGetUserItemsRequest
     */
    public function setWebapiKey($webapiKey)
    {
        $this->webapiKey = $webapiKey;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return Allegro_Web_Api_DoGetUserItemsRequest
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return Allegro_Web_Api_DoGetUserItemsRequest
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return Allegro_Web_Api_DoGetUserItemsRequest
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }
}
