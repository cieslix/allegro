<?php

/**
 * Class Allegro_Web_Api_DoSearchRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSearchRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var Allegro_Web_Api_SearchOptType $searchQuery
     */
    protected $searchQuery = null;

    /**
     * @param string $sessionHandle
     * @param Allegro_Web_Api_SearchOptType $searchQuery
     */
    public function __construct($sessionHandle, $searchQuery)
    {
        $this->sessionHandle = $sessionHandle;
        $this->searchQuery = $searchQuery;
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
     * @return Allegro_Web_Api_DoSearchRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_SearchOptType
     */
    public function getSearchQuery()
    {
        return $this->searchQuery;
    }

    /**
     * @param Allegro_Web_Api_SearchOptType $searchQuery
     * @return Allegro_Web_Api_DoSearchRequest
     */
    public function setSearchQuery($searchQuery)
    {
        $this->searchQuery = $searchQuery;
        return $this;
    }
}
