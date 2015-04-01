<?php

/**
 * Class Allegro_Web_Api_ArrayOfSolditemstruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfSolditemstruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_SoldItemStruct[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_SoldItemStruct[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_SoldItemStruct[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_SoldItemStruct[] $item
     * @return Allegro_Web_Api_ArrayOfSolditemstruct
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
