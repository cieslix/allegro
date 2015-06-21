<?php

/**
 * Class Allegro_Web_Api_DoFinishItemsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoFinishItemsRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFinishitemsstruct $finishItemsList
     */
    protected $finishItemsList = null;

    /**
     * @param string                                   $sessionHandle
     * @param Allegro_Web_Api_ArrayOfFinishitemsstruct $finishItemsList
     */
    public function __construct($sessionHandle, $finishItemsList)
    {
        $this->sessionHandle   = $sessionHandle;
        $this->finishItemsList = $finishItemsList;
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
     * @return Allegro_Web_Api_DoFinishItemsRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFinishitemsstruct
     */
    public function getFinishItemsList()
    {
        return $this->finishItemsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFinishitemsstruct $finishItemsList
     * @return Allegro_Web_Api_DoFinishItemsRequest
     */
    public function setFinishItemsList($finishItemsList)
    {
        $this->finishItemsList = $finishItemsList;
        return $this;
    }
}
