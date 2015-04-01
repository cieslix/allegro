<?php

/**
 * Class Allegro_Web_Api_DoGetMySellItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMySellItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $sellItemsCounter
     */
    protected $sellItemsCounter = null;

    /**
     * @var Allegro_Web_Api_ArrayOfSellitemstruct $sellItemsList
     */
    protected $sellItemsList = null;

    /**
     * @param int $sellItemsCounter
     * @param Allegro_Web_Api_ArrayOfSellitemstruct $sellItemsList
     */
    public function __construct($sellItemsCounter, $sellItemsList)
    {
        $this->sellItemsCounter = $sellItemsCounter;
        $this->sellItemsList = $sellItemsList;
    }

    /**
     * @return int
     */
    public function getSellItemsCounter()
    {
        return $this->sellItemsCounter;
    }

    /**
     * @param int $sellItemsCounter
     * @return Allegro_Web_Api_DoGetMySellItemsResponse
     */
    public function setSellItemsCounter($sellItemsCounter)
    {
        $this->sellItemsCounter = $sellItemsCounter;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSellitemstruct
     */
    public function getSellItemsList()
    {
        return $this->sellItemsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSellitemstruct $sellItemsList
     * @return Allegro_Web_Api_DoGetMySellItemsResponse
     */
    public function setSellItemsList($sellItemsList)
    {
        $this->sellItemsList = $sellItemsList;
        return $this;
    }
}
