<?php

/**
 * Class Allegro_Web_Api_DoGetMyBidItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyBidItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $bidItemsCounter
     */
    protected $bidItemsCounter = null;

    /**
     * @var Allegro_Web_Api_ArrayOfBiditemstruct $bidItemsList
     */
    protected $bidItemsList = null;

    /**
     * @param int $bidItemsCounter
     * @param Allegro_Web_Api_ArrayOfBiditemstruct $bidItemsList
     */
    public function __construct($bidItemsCounter, $bidItemsList)
    {
        $this->bidItemsCounter = $bidItemsCounter;
        $this->bidItemsList = $bidItemsList;
    }

    /**
     * @return int
     */
    public function getBidItemsCounter()
    {
        return $this->bidItemsCounter;
    }

    /**
     * @param int $bidItemsCounter
     * @return Allegro_Web_Api_DoGetMyBidItemsResponse
     */
    public function setBidItemsCounter($bidItemsCounter)
    {
        $this->bidItemsCounter = $bidItemsCounter;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfBiditemstruct
     */
    public function getBidItemsList()
    {
        return $this->bidItemsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfBiditemstruct $bidItemsList
     * @return Allegro_Web_Api_DoGetMyBidItemsResponse
     */
    public function setBidItemsList($bidItemsList)
    {
        $this->bidItemsList = $bidItemsList;
        return $this;
    }
}
