<?php

/**
 * Class Allegro_Web_Api_AttribStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_AttribStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $attribName
     */
    protected $attribName = null;

    /**
     * @var Allegro_Web_Api_ArrayOfString $attribValues
     */
    protected $attribValues = null;

    /**
     * @param string $attribName
     * @param Allegro_Web_Api_ArrayOfString $attribValues
     */
    public function __construct($attribName, $attribValues)
    {
        $this->attribName = $attribName;
        $this->attribValues = $attribValues;
    }

    /**
     * @return string
     */
    public function getAttribName()
    {
        return $this->attribName;
    }

    /**
     * @param string $attribName
     * @return Allegro_Web_Api_AttribStruct
     */
    public function setAttribName($attribName)
    {
        $this->attribName = $attribName;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getAttribValues()
    {
        return $this->attribValues;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $attribValues
     * @return Allegro_Web_Api_AttribStruct
     */
    public function setAttribValues($attribValues)
    {
        $this->attribValues = $attribValues;
        return $this;
    }
}
