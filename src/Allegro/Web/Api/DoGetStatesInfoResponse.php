<?php

/**
 * Class Allegro_Web_Api_DoGetStatesInfoResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetStatesInfoResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfStateinfostruct $statesInfoArray
     */
    protected $statesInfoArray = null;

    /**
     * @param Allegro_Web_Api_ArrayOfStateinfostruct $statesInfoArray
     */
    public function __construct($statesInfoArray)
    {
        $this->statesInfoArray = $statesInfoArray;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfStateinfostruct
     */
    public function getStatesInfoArray()
    {
        return $this->statesInfoArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfStateinfostruct $statesInfoArray
     * @return Allegro_Web_Api_DoGetStatesInfoResponse
     */
    public function setStatesInfoArray($statesInfoArray)
    {
        $this->statesInfoArray = $statesInfoArray;
        return $this;
    }
}
