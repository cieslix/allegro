<?php

/**
 * Class Allegro_Web_Api_DoGetSpecialItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSpecialItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfSpecialauctionstruct $sSpecialList
     */
    protected $sSpecialList = null;

    /**
     * @param Allegro_Web_Api_ArrayOfSpecialauctionstruct $sSpecialList
     */
    public function __construct($sSpecialList)
    {
        $this->sSpecialList = $sSpecialList;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSpecialauctionstruct
     */
    public function getSSpecialList()
    {
        return $this->sSpecialList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSpecialauctionstruct $sSpecialList
     * @return Allegro_Web_Api_DoGetSpecialItemsResponse
     */
    public function setSSpecialList($sSpecialList)
    {
        $this->sSpecialList = $sSpecialList;
        return $this;
    }
}
