<?php

/**
 * Class Allegro_Web_Api_ItemImageList
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemImageList extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $imageType
     */
    protected $imageType = null;

    /**
     * @var string $imageUrl
     */
    protected $imageUrl = null;

    /**
     * @param int $imageType
     * @param string $imageUrl
     */
    public function __construct($imageType, $imageUrl)
    {
        $this->imageType = $imageType;
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return int
     */
    public function getImageType()
    {
        return $this->imageType;
    }

    /**
     * @param int $imageType
     * @return Allegro_Web_Api_ItemImageList
     */
    public function setImageType($imageType)
    {
        $this->imageType = $imageType;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return Allegro_Web_Api_ItemImageList
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }
}
