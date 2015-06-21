<?php

/**
 * Class Allegro_Web_Api_DoGetAdminUserLicenceDateRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetAdminUserLicenceDateRequest extends Allegro_Web_Api_Abstract
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
     * @param string $adminSessionHandle
     * @param string $userLicLogin
     */
    public function __construct($adminSessionHandle, $userLicLogin)
    {
        $this->adminSessionHandle = $adminSessionHandle;
        $this->userLicLogin       = $userLicLogin;
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
     * @return Allegro_Web_Api_DoGetAdminUserLicenceDateRequest
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
     * @return Allegro_Web_Api_DoGetAdminUserLicenceDateRequest
     */
    public function setUserLicLogin($userLicLogin)
    {
        $this->userLicLogin = $userLicLogin;
        return $this;
    }
}
