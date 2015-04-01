<?php

/**
 * Class Allegro_Web_Api_ArrayOfSellratingaveragepermonthstruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfSellratingaveragepermonthstruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_SellRatingAveragePerMonthStruct[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_SellRatingAveragePerMonthStruct[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_SellRatingAveragePerMonthStruct[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_SellRatingAveragePerMonthStruct[] $item
     * @return Allegro_Web_Api_ArrayOfSellratingaveragepermonthstruct
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
