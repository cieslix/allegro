<?php

/**
 * Class Allegro_Web_Api_ArrayOfBlackliststruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfBlackliststruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_BlackListStruct[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_BlackListStruct[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_BlackListStruct[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_BlackListStruct[] $item
     * @return Allegro_Web_Api_ArrayOfBlackliststruct
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
