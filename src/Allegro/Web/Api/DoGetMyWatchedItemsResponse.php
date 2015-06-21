<?php

/**
 * Class Allegro_Web_Api_DoGetMyWatchedItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyWatchedItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $watchedItemsCounter
     */
    protected $watchedItemsCounter = null;

    /**
     * @var Allegro_Web_Api_ArrayOfWatcheditemstruct $watchedItemsList
     */
    protected $watchedItemsList = null;

    /**
     * @param int                                      $watchedItemsCounter
     * @param Allegro_Web_Api_ArrayOfWatcheditemstruct $watchedItemsList
     */
    public function __construct($watchedItemsCounter, $watchedItemsList)
    {
        $this->watchedItemsCounter = $watchedItemsCounter;
        $this->watchedItemsList    = $watchedItemsList;
    }

    /**
     * @return int
     */
    public function getWatchedItemsCounter()
    {
        return $this->watchedItemsCounter;
    }

    /**
     * @param int $watchedItemsCounter
     * @return Allegro_Web_Api_DoGetMyWatchedItemsResponse
     */
    public function setWatchedItemsCounter($watchedItemsCounter)
    {
        $this->watchedItemsCounter = $watchedItemsCounter;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfWatcheditemstruct
     */
    public function getWatchedItemsList()
    {
        return $this->watchedItemsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfWatcheditemstruct $watchedItemsList
     * @return Allegro_Web_Api_DoGetMyWatchedItemsResponse
     */
    public function setWatchedItemsList($watchedItemsList)
    {
        $this->watchedItemsList = $watchedItemsList;
        return $this;
    }
}
