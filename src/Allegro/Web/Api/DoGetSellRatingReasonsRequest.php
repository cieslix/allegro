<?php

/**
 * Class Allegro_Web_Api_DoGetSellRatingReasonsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSellRatingReasonsRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $countryCode
     */
    protected $countryCode = null;

    /**
     * @param string $webapiKey
     * @param int    $countryCode
     */
    public function __construct($webapiKey, $countryCode)
    {
        $this->webapiKey   = $webapiKey;
        $this->countryCode = $countryCode;
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
     * @return Allegro_Web_Api_DoGetSellRatingReasonsRequest
     */
    public function setWebapiKey($webapiKey)
    {
        $this->webapiKey = $webapiKey;
        return $this;
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
     * @return Allegro_Web_Api_DoGetSellRatingReasonsRequest
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}
