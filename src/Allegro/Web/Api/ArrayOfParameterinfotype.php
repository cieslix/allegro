<?php

/**
 * Class Allegro_Web_Api_ArrayOfParameterinfotype
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfParameterinfotype extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ParameterInfoType[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_ParameterInfoType[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_ParameterInfoType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_ParameterInfoType[] $item
     * @return Allegro_Web_Api_ArrayOfParameterinfotype
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
