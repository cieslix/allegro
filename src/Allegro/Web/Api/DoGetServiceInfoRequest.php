<?php

/**
 * Class Allegro_Web_Api_DoGetServiceInfoRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetServiceInfoRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $countryCode
     */
    protected $countryCode = null;

    /**
     * @var int $anCatId
     */
    protected $anCatId = null;

    /**
     * @var int $anItDate
     */
    protected $anItDate = null;

    /**
     * @var int $anItId
     */
    protected $anItId = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param int $countryCode
     * @param int $anCatId
     * @param int $anItDate
     * @param int $anItId
     * @param string $webapiKey
     */
    public function __construct($countryCode, $anCatId, $anItDate, $anItId, $webapiKey)
    {
        $this->countryCode = $countryCode;
        $this->anCatId = $anCatId;
        $this->anItDate = $anItDate;
        $this->anItId = $anItId;
        $this->webapiKey = $webapiKey;
    }

    /**
     * @return int
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param int $countryCode
     * @return Allegro_Web_Api_DoGetServiceInfoRequest
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
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
     * @return Allegro_Web_Api_DoGetServiceInfoRequest
     */
    public function setAnCatId($anCatId)
    {
        $this->anCatId = $anCatId;
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
     * @return Allegro_Web_Api_DoGetServiceInfoRequest
     */
    public function setAnItDate($anItDate)
    {
        $this->anItDate = $anItDate;
        return $this;
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
     * @return Allegro_Web_Api_DoGetServiceInfoRequest
     */
    public function setAnItId($anItId)
    {
        $this->anItId = $anItId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
        return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return Allegro_Web_Api_DoGetServiceInfoRequest
     */
    public function setWebapiKey($webapiKey)
    {
        $this->webapiKey = $webapiKey;
        return $this;
    }
}
