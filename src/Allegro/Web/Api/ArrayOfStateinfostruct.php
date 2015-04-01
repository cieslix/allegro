<?php

/**
 * Class Allegro_Web_Api_ArrayOfStateinfostruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfStateinfostruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_StateInfoStruct[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_StateInfoStruct[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_StateInfoStruct[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_StateInfoStruct[] $item
     * @return Allegro_Web_Api_ArrayOfStateinfostruct
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
