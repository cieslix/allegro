<?php

/**
 * Class Allegro_Web_Api_UserInfoType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_UserInfoType extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var string $userLogin
     */
    protected $userLogin = null;

    /**
     * @var int $userRating
     */
    protected $userRating = null;

    /**
     * @var int $userIcons
     */
    protected $userIcons = null;

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @param int    $userId
     * @param string $userLogin
     * @param int    $userRating
     * @param int    $userIcons
     * @param int    $countryId
     */
    public function __construct($userId, $userLogin, $userRating, $userIcons, $countryId)
    {
        $this->userId     = $userId;
        $this->userLogin  = $userLogin;
        $this->userRating = $userRating;
        $this->userIcons  = $userIcons;
        $this->countryId  = $countryId;
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
     * @return Allegro_Web_Api_UserInfoType
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
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
     * @return Allegro_Web_Api_UserInfoType
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserRating()
    {
        return $this->userRating;
    }

    /**
     * @param int $userRating
     * @return Allegro_Web_Api_UserInfoType
     */
    public function setUserRating($userRating)
    {
        $this->userRating = $userRating;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserIcons()
    {
        return $this->userIcons;
    }

    /**
     * @param int $userIcons
     * @return Allegro_Web_Api_UserInfoType
     */
    public function setUserIcons($userIcons)
    {
        $this->userIcons = $userIcons;
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
     * @return Allegro_Web_Api_UserInfoType
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
        return $this;
    }
}
