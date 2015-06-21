<?php

/**
 * Class Allegro_Web_Api_DoGetSellFormFieldsExtLimitRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSellFormFieldsExtLimitRequest extends Allegro_Web_Api_Abstract
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
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var int $packageElement
     */
    protected $packageElement = null;

    /**
     * @param int    $countryCode
     * @param int    $localVersion
     * @param string $webapiKey
     * @param int    $offset
     * @param int    $packageElement
     */
    public function __construct($countryCode, $localVersion, $webapiKey, $offset, $packageElement)
    {
        $this->countryCode    = $countryCode;
        $this->localVersion   = $localVersion;
        $this->webapiKey      = $webapiKey;
        $this->offset         = $offset;
        $this->packageElement = $packageElement;
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
     * @return Allegro_Web_Api_DoGetSellFormFieldsExtLimitRequest
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
     * @return Allegro_Web_Api_DoGetSellFormFieldsExtLimitRequest
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
     * @return Allegro_Web_Api_DoGetSellFormFieldsExtLimitRequest
     */
    public function setWebapiKey($webapiKey)
    {
        $this->webapiKey = $webapiKey;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return Allegro_Web_Api_DoGetSellFormFieldsExtLimitRequest
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageElement()
    {
        return $this->packageElement;
    }

    /**
     * @param int $packageElement
     * @return Allegro_Web_Api_DoGetSellFormFieldsExtLimitRequest
     */
    public function setPackageElement($packageElement)
    {
        $this->packageElement = $packageElement;
        return $this;
    }
}
