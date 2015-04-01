<?php

/**
 * Class Allegro_Web_Api_ArrayOfLong
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfLong extends Allegro_Web_Api_Abstract
{
    /**
     * @var int[] $item
     */
    protected $item = null;

    /**
     * @param int[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return int[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param int[] $item
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
