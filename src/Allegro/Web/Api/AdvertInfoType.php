<?php

/**
 * Class Allegro_Web_Api_AdvertInfoType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_AdvertInfoType extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $serviceId
     */
    protected $serviceId = null;

    /**
     * @var string $advertId
     */
    protected $advertId = null;

    /**
     * @param string $serviceId
     * @param string $advertId
     */
    public function __construct($serviceId, $advertId)
    {
        $this->serviceId = $serviceId;
        $this->advertId = $advertId;
    }

    /**
     * @return string
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param string $serviceId
     * @return Allegro_Web_Api_AdvertInfoType
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdvertId()
    {
        return $this->advertId;
    }

    /**
     * @param string $advertId
     * @return Allegro_Web_Api_AdvertInfoType
     */
    public function setAdvertId($advertId)
    {
        $this->advertId = $advertId;
        return $this;
    }
}
