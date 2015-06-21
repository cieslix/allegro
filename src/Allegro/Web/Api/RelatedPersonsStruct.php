<?php

/**
 * Class Allegro_Web_Api_RelatedPersonsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_RelatedPersonsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $spouseFirstName
     */
    protected $spouseFirstName = null;

    /**
     * @var string $spouseLastName
     */
    protected $spouseLastName = null;

    /**
     * @param string $spouseFirstName
     * @param string $spouseLastName
     */
    public function __construct($spouseFirstName, $spouseLastName)
    {
        $this->spouseFirstName = $spouseFirstName;
        $this->spouseLastName  = $spouseLastName;
    }

    /**
     * @return string
     */
    public function getSpouseFirstName()
    {
        return $this->spouseFirstName;
    }

    /**
     * @param string $spouseFirstName
     * @return Allegro_Web_Api_RelatedPersonsStruct
     */
    public function setSpouseFirstName($spouseFirstName)
    {
        $this->spouseFirstName = $spouseFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSpouseLastName()
    {
        return $this->spouseLastName;
    }

    /**
     * @param string $spouseLastName
     * @return Allegro_Web_Api_RelatedPersonsStruct
     */
    public function setSpouseLastName($spouseLastName)
    {
        $this->spouseLastName = $spouseLastName;
        return $this;
    }
}
