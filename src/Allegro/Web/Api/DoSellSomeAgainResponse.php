<?php

/**
 * Class Allegro_Web_Api_DoSellSomeAgainResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSellSomeAgainResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfStructsellagain $itemsSellAgain
     */
    protected $itemsSellAgain = null;

    /**
     * @var Allegro_Web_Api_ArrayOfStructsellfailed $itemsSellFailed
     */
    protected $itemsSellFailed = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $itemsSellNotFound
     */
    protected $itemsSellNotFound = null;

    /**
     * @param Allegro_Web_Api_ArrayOfStructsellagain $itemsSellAgain
     * @param Allegro_Web_Api_ArrayOfStructsellfailed $itemsSellFailed
     * @param Allegro_Web_Api_ArrayOfLong $itemsSellNotFound
     */
    public function __construct($itemsSellAgain, $itemsSellFailed, $itemsSellNotFound)
    {
        $this->itemsSellAgain = $itemsSellAgain;
        $this->itemsSellFailed = $itemsSellFailed;
        $this->itemsSellNotFound = $itemsSellNotFound;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfStructsellagain
     */
    public function getItemsSellAgain()
    {
        return $this->itemsSellAgain;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfStructsellagain $itemsSellAgain
     * @return Allegro_Web_Api_DoSellSomeAgainResponse
     */
    public function setItemsSellAgain($itemsSellAgain)
    {
        $this->itemsSellAgain = $itemsSellAgain;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfStructsellfailed
     */
    public function getItemsSellFailed()
    {
        return $this->itemsSellFailed;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfStructsellfailed $itemsSellFailed
     * @return Allegro_Web_Api_DoSellSomeAgainResponse
     */
    public function setItemsSellFailed($itemsSellFailed)
    {
        $this->itemsSellFailed = $itemsSellFailed;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getItemsSellNotFound()
    {
        return $this->itemsSellNotFound;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $itemsSellNotFound
     * @return Allegro_Web_Api_DoSellSomeAgainResponse
     */
    public function setItemsSellNotFound($itemsSellNotFound)
    {
        $this->itemsSellNotFound = $itemsSellNotFound;
        return $this;
    }
}
