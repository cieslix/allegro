<?php

/**
 * Class Allegro_Web_Api_DoGetMessageToBuyerRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMessageToBuyerRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @param string $sessionId
     * @param int    $itemId
     */
    public function __construct($sessionId, $itemId)
    {
        $this->sessionId = $sessionId;
        $this->itemId    = $itemId;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return Allegro_Web_Api_DoGetMessageToBuyerRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return Allegro_Web_Api_DoGetMessageToBuyerRequest
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }
}
