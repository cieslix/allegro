<?php

/**
 * Class Allegro_Web_Api_DoGetMySoldItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMySoldItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $soldItemsCounter
     */
    protected $soldItemsCounter = null;

    /**
     * @var Allegro_Web_Api_ArrayOfSolditemstruct $soldItemsList
     */
    protected $soldItemsList = null;

    /**
     * @param int                                   $soldItemsCounter
     * @param Allegro_Web_Api_ArrayOfSolditemstruct $soldItemsList
     */
    public function __construct($soldItemsCounter, $soldItemsList)
    {
        $this->soldItemsCounter = $soldItemsCounter;
        $this->soldItemsList    = $soldItemsList;
    }

    /**
     * @return int
     */
    public function getSoldItemsCounter()
    {
        return $this->soldItemsCounter;
    }

    /**
     * @param int $soldItemsCounter
     * @return Allegro_Web_Api_DoGetMySoldItemsResponse
     */
    public function setSoldItemsCounter($soldItemsCounter)
    {
        $this->soldItemsCounter = $soldItemsCounter;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSolditemstruct
     */
    public function getSoldItemsList()
    {
        return $this->soldItemsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSolditemstruct $soldItemsList
     * @return Allegro_Web_Api_DoGetMySoldItemsResponse
     */
    public function setSoldItemsList($soldItemsList)
    {
        $this->soldItemsList = $soldItemsList;
        return $this;
    }
}
