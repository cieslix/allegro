<?php

/**
 * Class Allegro_Web_Api_ArrayOfPostbuyformsellersstruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfPostbuyformsellersstruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_PostBuyFormSellersStruct[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_PostBuyFormSellersStruct[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_PostBuyFormSellersStruct[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_PostBuyFormSellersStruct[] $item
     * @return Allegro_Web_Api_ArrayOfPostbuyformsellersstruct
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
