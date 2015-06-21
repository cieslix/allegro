<?php

/**
 * Class Allegro_Web_Api_DoGetMyWatchItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyWatchItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $watchItemsCounter
     */
    protected $watchItemsCounter = null;

    /**
     * @var Allegro_Web_Api_ArrayOfWatchitemstruct $watchItemsList
     */
    protected $watchItemsList = null;

    /**
     * @param int                                    $watchItemsCounter
     * @param Allegro_Web_Api_ArrayOfWatchitemstruct $watchItemsList
     */
    public function __construct($watchItemsCounter, $watchItemsList)
    {
        $this->watchItemsCounter = $watchItemsCounter;
        $this->watchItemsList    = $watchItemsList;
    }

    /**
     * @return int
     */
    public function getWatchItemsCounter()
    {
        return $this->watchItemsCounter;
    }

    /**
     * @param int $watchItemsCounter
     * @return Allegro_Web_Api_DoGetMyWatchItemsResponse
     */
    public function setWatchItemsCounter($watchItemsCounter)
    {
        $this->watchItemsCounter = $watchItemsCounter;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfWatchitemstruct
     */
    public function getWatchItemsList()
    {
        return $this->watchItemsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfWatchitemstruct $watchItemsList
     * @return Allegro_Web_Api_DoGetMyWatchItemsResponse
     */
    public function setWatchItemsList($watchItemsList)
    {
        $this->watchItemsList = $watchItemsList;
        return $this;
    }
}
