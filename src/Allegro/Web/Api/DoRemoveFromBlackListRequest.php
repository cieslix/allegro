<?php

/**
 * Class Allegro_Web_Api_DoRemoveFromBlackListRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoRemoveFromBlackListRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $usersIdArray
     */
    protected $usersIdArray = null;

    /**
     * @param string $sessionHandle
     * @param Allegro_Web_Api_ArrayOfLong $usersIdArray
     */
    public function __construct($sessionHandle, $usersIdArray)
    {
        $this->sessionHandle = $sessionHandle;
        $this->usersIdArray = $usersIdArray;
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
     * @return Allegro_Web_Api_DoRemoveFromBlackListRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getUsersIdArray()
    {
        return $this->usersIdArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $usersIdArray
     * @return Allegro_Web_Api_DoRemoveFromBlackListRequest
     */
    public function setUsersIdArray($usersIdArray)
    {
        $this->usersIdArray = $usersIdArray;
        return $this;
    }
}
