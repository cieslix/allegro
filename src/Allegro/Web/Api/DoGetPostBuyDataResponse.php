<?php

/**
 * Class Allegro_Web_Api_DoGetPostBuyDataResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetPostBuyDataResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfItempostbuydatastruct $itemsPostBuyData
     */
    protected $itemsPostBuyData = null;

    /**
     * @param Allegro_Web_Api_ArrayOfItempostbuydatastruct $itemsPostBuyData
     */
    public function __construct($itemsPostBuyData)
    {
        $this->itemsPostBuyData = $itemsPostBuyData;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItempostbuydatastruct
     */
    public function getItemsPostBuyData()
    {
        return $this->itemsPostBuyData;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItempostbuydatastruct $itemsPostBuyData
     * @return Allegro_Web_Api_DoGetPostBuyDataResponse
     */
    public function setItemsPostBuyData($itemsPostBuyData)
    {
        $this->itemsPostBuyData = $itemsPostBuyData;
        return $this;
    }
}
