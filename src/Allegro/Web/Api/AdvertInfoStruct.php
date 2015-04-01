<?php

/**
 * Class Allegro_Web_Api_AdvertInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_AdvertInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemIsAdvert
     */
    protected $itemIsAdvert = null;

    /**
     * @var string $itemAdvertId
     */
    protected $itemAdvertId = null;

    /**
     * @param int $itemIsAdvert
     * @param string $itemAdvertId
     */
    public function __construct($itemIsAdvert, $itemAdvertId)
    {
        $this->itemIsAdvert = $itemIsAdvert;
        $this->itemAdvertId = $itemAdvertId;
    }

    /**
     * @return int
     */
    public function getItemIsAdvert()
    {
        return $this->itemIsAdvert;
    }

    /**
     * @param int $itemIsAdvert
     * @return Allegro_Web_Api_AdvertInfoStruct
     */
    public function setItemIsAdvert($itemIsAdvert)
    {
        $this->itemIsAdvert = $itemIsAdvert;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemAdvertId()
    {
        return $this->itemAdvertId;
    }

    /**
     * @param string $itemAdvertId
     * @return Allegro_Web_Api_AdvertInfoStruct
     */
    public function setItemAdvertId($itemAdvertId)
    {
        $this->itemAdvertId = $itemAdvertId;
        return $this;
    }
}
