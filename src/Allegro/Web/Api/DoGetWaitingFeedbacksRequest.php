<?php

/**
 * Class Allegro_Web_Api_DoGetWaitingFeedbacksRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetWaitingFeedbacksRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var int $packageSize
     */
    protected $packageSize = null;

    /**
     * @param string $sessionHandle
     * @param int $offset
     * @param int $packageSize
     */
    public function __construct($sessionHandle, $offset, $packageSize)
    {
        $this->sessionHandle = $sessionHandle;
        $this->offset = $offset;
        $this->packageSize = $packageSize;
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
     * @return Allegro_Web_Api_DoGetWaitingFeedbacksRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return Allegro_Web_Api_DoGetWaitingFeedbacksRequest
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageSize()
    {
        return $this->packageSize;
    }

    /**
     * @param int $packageSize
     * @return Allegro_Web_Api_DoGetWaitingFeedbacksRequest
     */
    public function setPackageSize($packageSize)
    {
        $this->packageSize = $packageSize;
        return $this;
    }
}
