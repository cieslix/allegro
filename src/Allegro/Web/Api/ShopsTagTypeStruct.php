<?php

/**
 * Class Allegro_Web_Api_ShopsTagTypeStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ShopsTagTypeStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param int    $id
     * @param string $code
     * @param string $name
     */
    public function __construct($id, $code, $name)
    {
        $this->id   = $id;
        $this->code = $code;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Allegro_Web_Api_ShopsTagTypeStruct
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Allegro_Web_Api_ShopsTagTypeStruct
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Allegro_Web_Api_ShopsTagTypeStruct
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
