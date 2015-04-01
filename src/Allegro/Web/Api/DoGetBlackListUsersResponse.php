<?php

/**
 * Class Allegro_Web_Api_DoGetBlackListUsersResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetBlackListUsersResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfBlackliststruct $blackListUsers
     */
    protected $blackListUsers = null;

    /**
     * @param Allegro_Web_Api_ArrayOfBlackliststruct $blackListUsers
     */
    public function __construct($blackListUsers)
    {
        $this->blackListUsers = $blackListUsers;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfBlackliststruct
     */
    public function getBlackListUsers()
    {
        return $this->blackListUsers;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfBlackliststruct $blackListUsers
     * @return Allegro_Web_Api_DoGetBlackListUsersResponse
     */
    public function setBlackListUsers($blackListUsers)
    {
        $this->blackListUsers = $blackListUsers;
        return $this;
    }
}
