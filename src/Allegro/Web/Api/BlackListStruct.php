<?php

/**
 * Class Allegro_Web_Api_BlackListStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_BlackListStruct extends Allegro_Web_Api_Abstract
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
     * @var int $userCountry
     */
    protected $userCountry = null;

    /**
     * @param int    $userId
     * @param string $userLogin
     * @param int    $userRating
     * @param int    $userCountry
     */
    public function __construct($userId, $userLogin, $userRating, $userCountry)
    {
        $this->userId      = $userId;
        $this->userLogin   = $userLogin;
        $this->userRating  = $userRating;
        $this->userCountry = $userCountry;
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
     * @return Allegro_Web_Api_BlackListStruct
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
     * @return Allegro_Web_Api_BlackListStruct
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
     * @return Allegro_Web_Api_BlackListStruct
     */
    public function setUserRating($userRating)
    {
        $this->userRating = $userRating;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserCountry()
    {
        return $this->userCountry;
    }

    /**
     * @param int $userCountry
     * @return Allegro_Web_Api_BlackListStruct
     */
    public function setUserCountry($userCountry)
    {
        $this->userCountry = $userCountry;
        return $this;
    }
}
