<?php

/**
 * Class Allegro_Web_Api_ItemDescriptionStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemDescriptionStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $descriptionResult
     */
    protected $descriptionResult = null;

    /**
     * @param string $descriptionResult
     */
    public function __construct($descriptionResult)
    {
        $this->descriptionResult = $descriptionResult;
    }

    /**
     * @return string
     */
    public function getDescriptionResult()
    {
        return $this->descriptionResult;
    }

    /**
     * @param string $descriptionResult
     * @return Allegro_Web_Api_ItemDescriptionStruct
     */
    public function setDescriptionResult($descriptionResult)
    {
        $this->descriptionResult = $descriptionResult;
        return $this;
    }
}
