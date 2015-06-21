<?php

/**
 * Class Allegro_Web_Api_DoGetItemsInfoResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetItemsInfoResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfIteminfostruct $arrayItemListInfo
     */
    protected $arrayItemListInfo = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $arrayItemsNotFound
     */
    protected $arrayItemsNotFound = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $arrayItemsAdminKilled
     */
    protected $arrayItemsAdminKilled = null;

    /**
     * @param Allegro_Web_Api_ArrayOfIteminfostruct $arrayItemListInfo
     * @param Allegro_Web_Api_ArrayOfLong           $arrayItemsNotFound
     * @param Allegro_Web_Api_ArrayOfLong           $arrayItemsAdminKilled
     */
    public function __construct($arrayItemListInfo, $arrayItemsNotFound, $arrayItemsAdminKilled)
    {
        $this->arrayItemListInfo     = $arrayItemListInfo;
        $this->arrayItemsNotFound    = $arrayItemsNotFound;
        $this->arrayItemsAdminKilled = $arrayItemsAdminKilled;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfIteminfostruct
     */
    public function getArrayItemListInfo()
    {
        return $this->arrayItemListInfo;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfIteminfostruct $arrayItemListInfo
     * @return Allegro_Web_Api_DoGetItemsInfoResponse
     */
    public function setArrayItemListInfo($arrayItemListInfo)
    {
        $this->arrayItemListInfo = $arrayItemListInfo;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getArrayItemsNotFound()
    {
        return $this->arrayItemsNotFound;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $arrayItemsNotFound
     * @return Allegro_Web_Api_DoGetItemsInfoResponse
     */
    public function setArrayItemsNotFound($arrayItemsNotFound)
    {
        $this->arrayItemsNotFound = $arrayItemsNotFound;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getArrayItemsAdminKilled()
    {
        return $this->arrayItemsAdminKilled;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $arrayItemsAdminKilled
     * @return Allegro_Web_Api_DoGetItemsInfoResponse
     */
    public function setArrayItemsAdminKilled($arrayItemsAdminKilled)
    {
        $this->arrayItemsAdminKilled = $arrayItemsAdminKilled;
        return $this;
    }
}
