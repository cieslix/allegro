<?php

/**
 * Class Allegro_Web_Api_DoGetUserItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetUserItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfUseritemlist $userItemList
     */
    protected $userItemList = null;

    /**
     * @var int $userItemCount
     */
    protected $userItemCount = null;

    /**
     * @param Allegro_Web_Api_ArrayOfUseritemlist $userItemList
     * @param int                                 $userItemCount
     */
    public function __construct($userItemList, $userItemCount)
    {
        $this->userItemList  = $userItemList;
        $this->userItemCount = $userItemCount;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfUseritemlist
     */
    public function getUserItemList()
    {
        return $this->userItemList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfUseritemlist $userItemList
     * @return Allegro_Web_Api_DoGetUserItemsResponse
     */
    public function setUserItemList($userItemList)
    {
        $this->userItemList = $userItemList;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserItemCount()
    {
        return $this->userItemCount;
    }

    /**
     * @param int $userItemCount
     * @return Allegro_Web_Api_DoGetUserItemsResponse
     */
    public function setUserItemCount($userItemCount)
    {
        $this->userItemCount = $userItemCount;
        return $this;
    }
}
