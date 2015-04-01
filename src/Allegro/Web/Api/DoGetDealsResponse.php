<?php

/**
 * Class Allegro_Web_Api_DoGetDealsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetDealsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfDealsstruct $dealsList
     */
    protected $dealsList = null;

    /**
     * @param Allegro_Web_Api_ArrayOfDealsstruct $dealsList
     */
    public function __construct($dealsList)
    {
        $this->dealsList = $dealsList;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfDealsstruct
     */
    public function getDealsList()
    {
        return $this->dealsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfDealsstruct $dealsList
     * @return Allegro_Web_Api_DoGetDealsResponse
     */
    public function setDealsList($dealsList)
    {
        $this->dealsList = $dealsList;
        return $this;
    }
}
