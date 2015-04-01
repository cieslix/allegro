<?php

/**
 * Class Allegro_Web_Api_DoGetMyFutureItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyFutureItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $futureItemsCounter
     */
    protected $futureItemsCounter = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFutureitemstruct $futureItemsList
     */
    protected $futureItemsList = null;

    /**
     * @param int $futureItemsCounter
     * @param Allegro_Web_Api_ArrayOfFutureitemstruct $futureItemsList
     */
    public function __construct($futureItemsCounter, $futureItemsList)
    {
        $this->futureItemsCounter = $futureItemsCounter;
        $this->futureItemsList = $futureItemsList;
    }

    /**
     * @return int
     */
    public function getFutureItemsCounter()
    {
        return $this->futureItemsCounter;
    }

    /**
     * @param int $futureItemsCounter
     * @return Allegro_Web_Api_DoGetMyFutureItemsResponse
     */
    public function setFutureItemsCounter($futureItemsCounter)
    {
        $this->futureItemsCounter = $futureItemsCounter;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFutureitemstruct
     */
    public function getFutureItemsList()
    {
        return $this->futureItemsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFutureitemstruct $futureItemsList
     * @return Allegro_Web_Api_DoGetMyFutureItemsResponse
     */
    public function setFutureItemsList($futureItemsList)
    {
        $this->futureItemsList = $futureItemsList;
        return $this;
    }
}
