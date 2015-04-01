<?php

/**
 * Class Allegro_Web_Api_DoLoginWithAccessTokenRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoLoginWithAccessTokenRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $accessToken
     */
    protected $accessToken = null;

    /**
     * @var int $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param string $accessToken
     * @param int $countryCode
     * @param string $webapiKey
     */
    public function __construct($accessToken, $countryCode, $webapiKey)
    {
        $this->accessToken = $accessToken;
        $this->countryCode = $countryCode;
        $this->webapiKey = $webapiKey;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return Allegro_Web_Api_DoLoginWithAccessTokenRequest
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param int $countryCode
     * @return Allegro_Web_Api_DoLoginWithAccessTokenRequest
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
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
     * @return Allegro_Web_Api_DoLoginWithAccessTokenRequest
     */
    public function setWebapiKey($webapiKey)
    {
        $this->webapiKey = $webapiKey;
        return $this;
    }
}
