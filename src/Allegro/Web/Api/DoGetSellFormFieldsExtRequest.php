<?php

/**
 * Class Allegro_Web_Api_DoGetSellFormFieldsExtRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSellFormFieldsExtRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $countryCode
     */
    protected $countryCode = null;

    /**
     * @var int $localVersion
     */
    protected $localVersion = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param int    $countryCode
     * @param int    $localVersion
     * @param string $webapiKey
     */
    public function __construct($countryCode, $localVersion, $webapiKey)
    {
        $this->countryCode  = $countryCode;
        $this->localVersion = $localVersion;
        $this->webapiKey    = $webapiKey;
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
     * @return Allegro_Web_Api_DoGetSellFormFieldsExtRequest
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocalVersion()
    {
        return $this->localVersion;
    }

    /**
     * @param int $localVersion
     * @return Allegro_Web_Api_DoGetSellFormFieldsExtRequest
     */
    public function setLocalVersion($localVersion)
    {
        $this->localVersion = $localVersion;
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
     * @return Allegro_Web_Api_DoGetSellFormFieldsExtRequest
     */
    public function setWebapiKey($webapiKey)
    {
        $this->webapiKey = $webapiKey;
        return $this;
    }
}
