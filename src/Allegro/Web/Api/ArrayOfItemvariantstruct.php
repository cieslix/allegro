<?php

/**
 * Class Allegro_Web_Api_ArrayOfItemvariantstruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfItemvariantstruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ItemVariantStruct[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_ItemVariantStruct[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_ItemVariantStruct[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_ItemVariantStruct[] $item
     * @return Allegro_Web_Api_ArrayOfItemvariantstruct
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
