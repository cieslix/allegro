<?php

/**
 * Class Allegro_Web_Api_DoGetCatsDataLimitResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetCatsDataLimitResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfCatinfotype $catsList
     */
    protected $catsList = null;

    /**
     * @var int $verKey
     */
    protected $verKey = null;

    /**
     * @var string $verStr
     */
    protected $verStr = null;

    /**
     * @param Allegro_Web_Api_ArrayOfCatinfotype $catsList
     * @param int                                $verKey
     * @param string                             $verStr
     */
    public function __construct($catsList, $verKey, $verStr)
    {
        $this->catsList = $catsList;
        $this->verKey   = $verKey;
        $this->verStr   = $verStr;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfCatinfotype
     */
    public function getCatsList()
    {
        return $this->catsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfCatinfotype $catsList
     * @return Allegro_Web_Api_DoGetCatsDataLimitResponse
     */
    public function setCatsList($catsList)
    {
        $this->catsList = $catsList;
        return $this;
    }

    /**
     * @return int
     */
    public function getVerKey()
    {
        return $this->verKey;
    }

    /**
     * @param int $verKey
     * @return Allegro_Web_Api_DoGetCatsDataLimitResponse
     */
    public function setVerKey($verKey)
    {
        $this->verKey = $verKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getVerStr()
    {
        return $this->verStr;
    }

    /**
     * @param string $verStr
     * @return Allegro_Web_Api_DoGetCatsDataLimitResponse
     */
    public function setVerStr($verStr)
    {
        $this->verStr = $verStr;
        return $this;
    }
}
