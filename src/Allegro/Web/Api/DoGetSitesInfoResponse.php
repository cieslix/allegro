<?php

/**
 * Class Allegro_Web_Api_DoGetSitesInfoResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSitesInfoResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfSiteinfotype $sitesInfoList
     */
    protected $sitesInfoList = null;

    /**
     * @var int $verKey
     */
    protected $verKey = null;

    /**
     * @var string $verStr
     */
    protected $verStr = null;

    /**
     * @param Allegro_Web_Api_ArrayOfSiteinfotype $sitesInfoList
     * @param int                                 $verKey
     * @param string                              $verStr
     */
    public function __construct($sitesInfoList, $verKey, $verStr)
    {
        $this->sitesInfoList = $sitesInfoList;
        $this->verKey        = $verKey;
        $this->verStr        = $verStr;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSiteinfotype
     */
    public function getSitesInfoList()
    {
        return $this->sitesInfoList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSiteinfotype $sitesInfoList
     * @return Allegro_Web_Api_DoGetSitesInfoResponse
     */
    public function setSitesInfoList($sitesInfoList)
    {
        $this->sitesInfoList = $sitesInfoList;
        return $this;
    }

    /**
     * @return int
     */
    public function getVerKey()
    {
        return $this->verKey;
    }

    /**
     * @param int $verKey
     * @return Allegro_Web_Api_DoGetSitesInfoResponse
     */
    public function setVerKey($verKey)
    {
        $this->verKey = $verKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getVerStr()
    {
        return $this->verStr;
    }

    /**
     * @param string $verStr
     * @return Allegro_Web_Api_DoGetSitesInfoResponse
     */
    public function setVerStr($verStr)
    {
        $this->verStr = $verStr;
        return $this;
    }
}
