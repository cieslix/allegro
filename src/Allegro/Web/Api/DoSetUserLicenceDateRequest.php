<?php

/**
 * Class Allegro_Web_Api_DoSetUserLicenceDateRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSetUserLicenceDateRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $adminSessionHandle
     */
    protected $adminSessionHandle = null;

    /**
     * @var string $userLicLogin
     */
    protected $userLicLogin = null;

    /**
     * @var int $userLicCountry
     */
    protected $userLicCountry = null;

    /**
     * @var float $userLicDate
     */
    protected $userLicDate = null;

    /**
     * @param string $adminSessionHandle
     * @param string $userLicLogin
     * @param int $userLicCountry
     * @param float $userLicDate
     */
    public function __construct($adminSessionHandle, $userLicLogin, $userLicCountry, $userLicDate)
    {
        $this->adminSessionHandle = $adminSessionHandle;
        $this->userLicLogin = $userLicLogin;
        $this->userLicCountry = $userLicCountry;
        $this->userLicDate = $userLicDate;
    }

    /**
     * @return string
     */
    public function getAdminSessionHandle()
    {
        return $this->adminSessionHandle;
    }

    /**
     * @param string $adminSessionHandle
     * @return Allegro_Web_Api_DoSetUserLicenceDateRequest
     */
    public function setAdminSessionHandle($adminSessionHandle)
    {
        $this->adminSessionHandle = $adminSessionHandle;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserLicLogin()
    {
        return $this->userLicLogin;
    }

    /**
     * @param string $userLicLogin
     * @return Allegro_Web_Api_DoSetUserLicenceDateRequest
     */
    public function setUserLicLogin($userLicLogin)
    {
        $this->userLicLogin = $userLicLogin;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserLicCountry()
    {
        return $this->userLicCountry;
    }

    /**
     * @param int $userLicCountry
     * @return Allegro_Web_Api_DoSetUserLicenceDateRequest
     */
    public function setUserLicCountry($userLicCountry)
    {
        $this->userLicCountry = $userLicCountry;
        return $this;
    }

    /**
     * @return float
     */
    public function getUserLicDate()
    {
        return $this->userLicDate;
    }

    /**
     * @param float $userLicDate
     * @return Allegro_Web_Api_DoSetUserLicenceDateRequest
     */
    public function setUserLicDate($userLicDate)
    {
        $this->userLicDate = $userLicDate;
        return $this;
    }
}
