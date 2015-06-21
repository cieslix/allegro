<?php

/**
 * Class Allegro_Web_Api_DoAddToBlackListRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoAddToBlackListRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var Allegro_Web_Api_ArrayOfUserblackliststruct $usersBlackListArray
     */
    protected $usersBlackListArray = null;

    /**
     * @param string                                     $sessionHandle
     * @param Allegro_Web_Api_ArrayOfUserblackliststruct $usersBlackListArray
     */
    public function __construct($sessionHandle, $usersBlackListArray)
    {
        $this->sessionHandle       = $sessionHandle;
        $this->usersBlackListArray = $usersBlackListArray;
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
     * @return Allegro_Web_Api_DoAddToBlackListRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfUserblackliststruct
     */
    public function getUsersBlackListArray()
    {
        return $this->usersBlackListArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfUserblackliststruct $usersBlackListArray
     * @return Allegro_Web_Api_DoAddToBlackListRequest
     */
    public function setUsersBlackListArray($usersBlackListArray)
    {
        $this->usersBlackListArray = $usersBlackListArray;
        return $this;
    }
}
