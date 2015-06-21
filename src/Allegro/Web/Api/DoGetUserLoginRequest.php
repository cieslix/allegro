<?php

/**
 * Class Allegro_Web_Api_DoGetUserLoginRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetUserLoginRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param int    $countryId
     * @param int    $userId
     * @param string $webapiKey
     */
    public function __construct($countryId, $userId, $webapiKey)
    {
        $this->countryId = $countryId;
        $this->userId    = $userId;
        $this->webapiKey = $webapiKey;
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
     * @return Allegro_Web_Api_DoGetUserLoginRequest
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
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
     * @return Allegro_Web_Api_DoGetUserLoginRequest
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
     * @return Allegro_Web_Api_DoGetUserLoginRequest
     */
    public function setWebapiKey($webapiKey)
    {
        $this->webapiKey = $webapiKey;
        return $this;
    }
}
