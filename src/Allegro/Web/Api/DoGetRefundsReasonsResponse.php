<?php

/**
 * Class Allegro_Web_Api_DoGetRefundsReasonsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetRefundsReasonsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $reasonsCount
     */
    protected $reasonsCount = null;

    /**
     * @var Allegro_Web_Api_ArrayOfReasoninfotype $reasonsList
     */
    protected $reasonsList = null;

    /**
     * @param int                                   $reasonsCount
     * @param Allegro_Web_Api_ArrayOfReasoninfotype $reasonsList
     */
    public function __construct($reasonsCount, $reasonsList)
    {
        $this->reasonsCount = $reasonsCount;
        $this->reasonsList  = $reasonsList;
    }

    /**
     * @return int
     */
    public function getReasonsCount()
    {
        return $this->reasonsCount;
    }

    /**
     * @param int $reasonsCount
     * @return Allegro_Web_Api_DoGetRefundsReasonsResponse
     */
    public function setReasonsCount($reasonsCount)
    {
        $this->reasonsCount = $reasonsCount;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfReasoninfotype
     */
    public function getReasonsList()
    {
        return $this->reasonsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfReasoninfotype $reasonsList
     * @return Allegro_Web_Api_DoGetRefundsReasonsResponse
     */
    public function setReasonsList($reasonsList)
    {
        $this->reasonsList = $reasonsList;
        return $this;
    }
}
