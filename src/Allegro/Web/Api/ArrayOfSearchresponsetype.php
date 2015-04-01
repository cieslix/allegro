<?php

/**
 * Class Allegro_Web_Api_ArrayOfSearchresponsetype
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfSearchresponsetype extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_SearchResponseType[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_SearchResponseType[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_SearchResponseType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_SearchResponseType[] $item
     * @return Allegro_Web_Api_ArrayOfSearchresponsetype
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
