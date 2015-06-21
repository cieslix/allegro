<?php

/**
 * Class Allegro_Web_Api_DoVerifyItemRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoVerifyItemRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $localId
     */
    protected $localId = null;

    /**
     * @param string $sessionHandle
     * @param int    $localId
     */
    public function __construct($sessionHandle, $localId)
    {
        $this->sessionHandle = $sessionHandle;
        $this->localId       = $localId;
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
     * @return Allegro_Web_Api_DoVerifyItemRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalId()
    {
        return $this->localId;
    }

    /**
     * @param int $localId
     * @return Allegro_Web_Api_DoVerifyItemRequest
     */
    public function setLocalId($localId)
    {
        $this->localId = $localId;
        return $this;
    }
}
