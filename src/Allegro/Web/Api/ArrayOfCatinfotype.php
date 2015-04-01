<?php

/**
 * Class Allegro_Web_Api_ArrayOfCatinfotype
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfCatinfotype extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_CatInfoType[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_CatInfoType[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_CatInfoType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_CatInfoType[] $item
     * @return Allegro_Web_Api_ArrayOfCatinfotype
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
