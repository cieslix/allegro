<?php

/**
 * Class Allegro_Web_Api_ArrayOfTagnamestruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfTagnamestruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_TagNameStruct[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_TagNameStruct[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_TagNameStruct[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_TagNameStruct[] $item
     * @return Allegro_Web_Api_ArrayOfTagnamestruct
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
