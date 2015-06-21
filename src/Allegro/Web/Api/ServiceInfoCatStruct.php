<?php

/**
 * Class Allegro_Web_Api_ServiceInfoCatStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ServiceInfoCatStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $anCatId
     */
    protected $anCatId = null;

    /**
     * @var string $anCatName
     */
    protected $anCatName = null;

    /**
     * @param int    $anCatId
     * @param string $anCatName
     */
    public function __construct($anCatId, $anCatName)
    {
        $this->anCatId   = $anCatId;
        $this->anCatName = $anCatName;
    }

    /**
     * @return int
     */
    public function getAnCatId()
    {
        return $this->anCatId;
    }

    /**
     * @param int $anCatId
     * @return Allegro_Web_Api_ServiceInfoCatStruct
     */
    public function setAnCatId($anCatId)
    {
        $this->anCatId = $anCatId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnCatName()
    {
        return $this->anCatName;
    }

    /**
     * @param string $anCatName
     * @return Allegro_Web_Api_ServiceInfoCatStruct
     */
    public function setAnCatName($anCatName)
    {
        $this->anCatName = $anCatName;
        return $this;
    }
}
