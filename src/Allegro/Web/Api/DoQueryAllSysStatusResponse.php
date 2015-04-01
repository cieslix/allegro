<?php

/**
 * Class Allegro_Web_Api_DoQueryAllSysStatusResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoQueryAllSysStatusResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfSysstatustype $sysCountryStatus
     */
    protected $sysCountryStatus = null;

    /**
     * @param Allegro_Web_Api_ArrayOfSysstatustype $sysCountryStatus
     */
    public function __construct($sysCountryStatus)
    {
        $this->sysCountryStatus = $sysCountryStatus;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSysstatustype
     */
    public function getSysCountryStatus()
    {
        return $this->sysCountryStatus;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSysstatustype $sysCountryStatus
     * @return Allegro_Web_Api_DoQueryAllSysStatusResponse
     */
    public function setSysCountryStatus($sysCountryStatus)
    {
        $this->sysCountryStatus = $sysCountryStatus;
        return $this;
    }
}
