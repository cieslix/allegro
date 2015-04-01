<?php

/**
 * Class Allegro_Web_Api_ArrayOfInfocatlist
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfInfocatlist extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_InfoCatList[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_InfoCatList[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_InfoCatList[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_InfoCatList[] $item
     * @return Allegro_Web_Api_ArrayOfInfocatlist
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
