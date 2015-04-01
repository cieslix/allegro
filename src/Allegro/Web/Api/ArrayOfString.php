<?php

/**
 * Class Allegro_Web_Api_ArrayOfString
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfString extends Allegro_Web_Api_Abstract
{
    /**
     * @var string[] $item
     */
    protected $item = null;

    /**
     * @param string[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return string[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param string[] $item
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
