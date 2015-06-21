<?php

/**
 * Class Allegro_Web_Api_PhotoInfoType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PhotoInfoType extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $photoSize
     */
    protected $photoSize = null;

    /**
     * @var string $photoUrl
     */
    protected $photoUrl = null;

    /**
     * @var boolean $photoIsMain
     */
    protected $photoIsMain = null;

    /**
     * @param string  $photoSize
     * @param string  $photoUrl
     * @param boolean $photoIsMain
     */
    public function __construct($photoSize, $photoUrl, $photoIsMain)
    {
        $this->photoSize   = $photoSize;
        $this->photoUrl    = $photoUrl;
        $this->photoIsMain = $photoIsMain;
    }

    /**
     * @return string
     */
    public function getPhotoSize()
    {
        return $this->photoSize;
    }

    /**
     * @param string $photoSize
     * @return Allegro_Web_Api_PhotoInfoType
     */
    public function setPhotoSize($photoSize)
    {
        $this->photoSize = $photoSize;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }

    /**
     * @param string $photoUrl
     * @return Allegro_Web_Api_PhotoInfoType
     */
    public function setPhotoUrl($photoUrl)
    {
        $this->photoUrl = $photoUrl;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPhotoIsMain()
    {
        return $this->photoIsMain;
    }

    /**
     * @param boolean $photoIsMain
     * @return Allegro_Web_Api_PhotoInfoType
     */
    public function setPhotoIsMain($photoIsMain)
    {
        $this->photoIsMain = $photoIsMain;
        return $this;
    }
}
