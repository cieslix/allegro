<?php

/**
 * Class Allegro_Web_Api_ArrayOfNewpostbuyformsellerstruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfNewpostbuyformsellerstruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_NewPostBuyFormSellerStruct[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_NewPostBuyFormSellerStruct[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_NewPostBuyFormSellerStruct[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_NewPostBuyFormSellerStruct[] $item
     * @return Allegro_Web_Api_ArrayOfNewpostbuyformsellerstruct
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
