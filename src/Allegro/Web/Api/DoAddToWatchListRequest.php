<?php

/**
 * Class Allegro_Web_Api_DoAddToWatchListRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoAddToWatchListRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $itemIds
     */
    protected $itemIds = null;

    /**
     * @param string $sessionId
     * @param Allegro_Web_Api_ArrayOfLong $itemIds
     */
    public function __construct($sessionId, $itemIds)
    {
        $this->sessionId = $sessionId;
        $this->itemIds = $itemIds;
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
     * @return Allegro_Web_Api_DoAddToWatchListRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getItemIds()
    {
        return $this->itemIds;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $itemIds
     * @return Allegro_Web_Api_DoAddToWatchListRequest
     */
    public function setItemIds($itemIds)
    {
        $this->itemIds = $itemIds;
        return $this;
    }
}
