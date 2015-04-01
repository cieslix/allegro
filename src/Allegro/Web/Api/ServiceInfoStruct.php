<?php

/**
 * Class Allegro_Web_Api_ServiceInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ServiceInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $anItId
     */
    protected $anItId = null;

    /**
     * @var int $anCatId
     */
    protected $anCatId = null;

    /**
     * @var string $anItTitle
     */
    protected $anItTitle = null;

    /**
     * @var base64Binary $anItBody
     */
    protected $anItBody = null;

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var int $anItDate
     */
    protected $anItDate = null;

    /**
     * @param int $anItId
     * @param int $anCatId
     * @param string $anItTitle
     * @param base64Binary $anItBody
     * @param int $countryId
     * @param int $anItDate
     */
    public function __construct($anItId, $anCatId, $anItTitle, $anItBody, $countryId, $anItDate)
    {
        $this->anItId = $anItId;
        $this->anCatId = $anCatId;
        $this->anItTitle = $anItTitle;
        $this->anItBody = $anItBody;
        $this->countryId = $countryId;
        $this->anItDate = $anItDate;
    }

    /**
     * @return int
     */
    public function getAnItId()
    {
        return $this->anItId;
    }

    /**
     * @param int $anItId
     * @return Allegro_Web_Api_ServiceInfoStruct
     */
    public function setAnItId($anItId)
    {
        $this->anItId = $anItId;
        return $this;
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
     * @return Allegro_Web_Api_ServiceInfoStruct
     */
    public function setAnCatId($anCatId)
    {
        $this->anCatId = $anCatId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnItTitle()
    {
        return $this->anItTitle;
    }

    /**
     * @param string $anItTitle
     * @return Allegro_Web_Api_ServiceInfoStruct
     */
    public function setAnItTitle($anItTitle)
    {
        $this->anItTitle = $anItTitle;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getAnItBody()
    {
        return $this->anItBody;
    }

    /**
     * @param base64Binary $anItBody
     * @return Allegro_Web_Api_ServiceInfoStruct
     */
    public function setAnItBody($anItBody)
    {
        $this->anItBody = $anItBody;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return Allegro_Web_Api_ServiceInfoStruct
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAnItDate()
    {
        return $this->anItDate;
    }

    /**
     * @param int $anItDate
     * @return Allegro_Web_Api_ServiceInfoStruct
     */
    public function setAnItDate($anItDate)
    {
        $this->anItDate = $anItDate;
        return $this;
    }
}
