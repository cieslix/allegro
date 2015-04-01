<?php

/**
 * Class Allegro_Web_Api_DoGetSellFormAttribsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSellFormAttribsRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $localVersion
     */
    protected $localVersion = null;

    /**
     * @var int $catId
     */
    protected $catId = null;

    /**
     * @param int $countryId
     * @param string $webapiKey
     * @param int $localVersion
     * @param int $catId
     */
    public function __construct($countryId, $webapiKey, $localVersion, $catId)
    {
        $this->countryId = $countryId;
        $this->webapiKey = $webapiKey;
        $this->localVersion = $localVersion;
        $this->catId = $catId;
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
     * @return Allegro_Web_Api_DoGetSellFormAttribsRequest
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
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
     * @return Allegro_Web_Api_DoGetSellFormAttribsRequest
     */
    public function setWebapiKey($webapiKey)
    {
        $this->webapiKey = $webapiKey;
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
     * @return Allegro_Web_Api_DoGetSellFormAttribsRequest
     */
    public function setLocalVersion($localVersion)
    {
        $this->localVersion = $localVersion;
        return $this;
    }

    /**
     * @return int
     */
    public function getCatId()
    {
        return $this->catId;
    }

    /**
     * @param int $catId
     * @return Allegro_Web_Api_DoGetSellFormAttribsRequest
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;
        return $this;
    }
}
