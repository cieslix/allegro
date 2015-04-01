<?php

/**
 * Class Allegro_Web_Api_DoQuerySysStatusRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoQuerySysStatusRequest extends Allegro_Web_Api_Abstract
{
    const SYSVAR_CATEGORY_TREE = 3;
    const SYSVER_FIELDS_SALE_FORM = 4;

    /**
     * @var int $sysvar
     */
    protected $sysvar = null;

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param int $sysvar
     * @param int $countryId
     * @param string $webapiKey
     */
    public function __construct($sysvar, $countryId, $webapiKey)
    {
        $this->sysvar = $sysvar;
        $this->countryId = $countryId;
        $this->webapiKey = $webapiKey;
    }

    /**
     * @return int
     */
    public function getSysvar()
    {
        return $this->sysvar;
    }

    /**
     * @param int $sysvar
     * @return Allegro_Web_Api_DoQuerySysStatusRequest
     */
    public function setSysvar($sysvar)
    {
        $this->sysvar = $sysvar;
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
     * @return Allegro_Web_Api_DoQuerySysStatusRequest
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
     * @return Allegro_Web_Api_DoQuerySysStatusRequest
     */
    public function setWebapiKey($webapiKey)
    {
        $this->webapiKey = $webapiKey;
        return $this;
    }
}
