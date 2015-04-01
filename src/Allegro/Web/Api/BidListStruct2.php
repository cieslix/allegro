<?php

/**
 * Class Allegro_Web_Api_BidListStruct2
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_BidListStruct2 extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfString $bidsArray
     */
    protected $bidsArray = null;

    /**
     * @param Allegro_Web_Api_ArrayOfString $bidsArray
     */
    public function __construct($bidsArray)
    {
        $this->bidsArray = $bidsArray;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getBidsArray()
    {
        return $this->bidsArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $bidsArray
     * @return Allegro_Web_Api_BidListStruct2
     */
    public function setBidsArray($bidsArray)
    {
        $this->bidsArray = $bidsArray;
        return $this;
    }
}
