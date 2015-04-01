<?php

/**
 * Class Allegro_Web_Api_DoBidItemResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoBidItemResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $bidPrice
     */
    protected $bidPrice = null;

    /**
     * @param string $bidPrice
     */
    public function __construct($bidPrice)
    {
        $this->bidPrice = $bidPrice;
    }

    /**
     * @return string
     */
    public function getBidPrice()
    {
        return $this->bidPrice;
    }

    /**
     * @param string $bidPrice
     * @return Allegro_Web_Api_DoBidItemResponse
     */
    public function setBidPrice($bidPrice)
    {
        $this->bidPrice = $bidPrice;
        return $this;
    }
}
