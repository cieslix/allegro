<?php

/**
 * Class Allegro_Web_Api_ArrayOfPostbuyformitemdealsstruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfPostbuyformitemdealsstruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_PostBuyFormItemDealsStruct[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_PostBuyFormItemDealsStruct[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_PostBuyFormItemDealsStruct[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_PostBuyFormItemDealsStruct[] $item
     * @return Allegro_Web_Api_ArrayOfPostbuyformitemdealsstruct
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
