<?php

/**
 * Class Allegro_Web_Api_ArrayOfPostbuyiteminfostruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfPostbuyiteminfostruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_PostBuyItemInfoStruct[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_PostBuyItemInfoStruct[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_PostBuyItemInfoStruct[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_PostBuyItemInfoStruct[] $item
     * @return Allegro_Web_Api_ArrayOfPostbuyiteminfostruct
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
