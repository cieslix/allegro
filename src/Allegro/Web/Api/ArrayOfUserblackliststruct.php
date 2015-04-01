<?php

/**
 * Class Allegro_Web_Api_ArrayOfUserblackliststruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfUserblackliststruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_UserBlackListStruct[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_UserBlackListStruct[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_UserBlackListStruct[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_UserBlackListStruct[] $item
     * @return Allegro_Web_Api_ArrayOfUserblackliststruct
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
