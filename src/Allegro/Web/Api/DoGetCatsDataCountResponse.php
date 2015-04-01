<?php

/**
 * Class Allegro_Web_Api_DoGetCatsDataCountResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetCatsDataCountResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $catsCount
     */
    protected $catsCount = null;

    /**
     * @var int $verKey
     */
    protected $verKey = null;

    /**
     * @var string $verStr
     */
    protected $verStr = null;

    /**
     * @param int $catsCount
     * @param int $verKey
     * @param string $verStr
     */
    public function __construct($catsCount, $verKey, $verStr)
    {
        $this->catsCount = $catsCount;
        $this->verKey = $verKey;
        $this->verStr = $verStr;
    }

    /**
     * @return int
     */
    public function getCatsCount()
    {
        return $this->catsCount;
    }

    /**
     * @param int $catsCount
     * @return Allegro_Web_Api_DoGetCatsDataCountResponse
     */
    public function setCatsCount($catsCount)
    {
        $this->catsCount = $catsCount;
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
     * @return Allegro_Web_Api_DoGetCatsDataCountResponse
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
     * @return Allegro_Web_Api_DoGetCatsDataCountResponse
     */
    public function setVerStr($verStr)
    {
        $this->verStr = $verStr;
        return $this;
    }
}
