<?php

/**
 * Class Allegro_Web_Api_StateInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_StateInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $stateId
     */
    protected $stateId = null;

    /**
     * @var string $stateName
     */
    protected $stateName = null;

    /**
     * @param int    $stateId
     * @param string $stateName
     */
    public function __construct($stateId, $stateName)
    {
        $this->stateId   = $stateId;
        $this->stateName = $stateName;
    }

    /**
     * @return int
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * @param int $stateId
     * @return Allegro_Web_Api_StateInfoStruct
     */
    public function setStateId($stateId)
    {
        $this->stateId = $stateId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateName()
    {
        return $this->stateName;
    }

    /**
     * @param string $stateName
     * @return Allegro_Web_Api_StateInfoStruct
     */
    public function setStateName($stateName)
    {
        $this->stateName = $stateName;
        return $this;
    }
}
