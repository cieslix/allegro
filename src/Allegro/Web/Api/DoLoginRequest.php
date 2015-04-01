<?php

/**
 * Class Allegro_Web_Api_DoLoginRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoLoginRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $userLogin
     */
    protected $userLogin = null;

    /**
     * @var string $userPassword
     */
    protected $userPassword = null;

    /**
     * @var int $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $localVersion
     */
    protected $localVersion = null;

    /**
     * @param string $userLogin
     * @param string $userPassword
     * @param int $countryCode
     * @param string $webapiKey
     * @param int $localVersion
     */
    public function __construct($userLogin, $userPassword, $countryCode, $webapiKey, $localVersion)
    {
        $this->userLogin = $userLogin;
        $this->userPassword = $userPassword;
        $this->countryCode = $countryCode;
        $this->webapiKey = $webapiKey;
        $this->localVersion = $localVersion;
    }

    /**
     * @return string
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

    /**
     * @param string $userLogin
     * @return Allegro_Web_Api_DoLoginRequest
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * @param string $userPassword
     * @return Allegro_Web_Api_DoLoginRequest
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
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
     * @return Allegro_Web_Api_DoLoginRequest
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
     * @return Allegro_Web_Api_DoLoginRequest
     */
    public function setWebapiKey($webapiKey)
    {
        $this->webapiKey = $webapiKey;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalVersion()
    {
        return $this->localVersion;
    }

    /**
     * @param int $localVersion
     * @return Allegro_Web_Api_DoLoginRequest
     */
    public function setLocalVersion($localVersion)
    {
        $this->localVersion = $localVersion;
        return $this;
    }
}
