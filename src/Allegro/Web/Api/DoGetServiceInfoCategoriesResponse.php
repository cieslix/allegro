<?php

/**
 * Class Allegro_Web_Api_DoGetServiceInfoCategoriesResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetServiceInfoCategoriesResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfServiceinfocatstruct $serviceInfoCatsList
     */
    protected $serviceInfoCatsList = null;

    /**
     * @param Allegro_Web_Api_ArrayOfServiceinfocatstruct $serviceInfoCatsList
     */
    public function __construct($serviceInfoCatsList)
    {
        $this->serviceInfoCatsList = $serviceInfoCatsList;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfServiceinfocatstruct
     */
    public function getServiceInfoCatsList()
    {
        return $this->serviceInfoCatsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfServiceinfocatstruct $serviceInfoCatsList
     * @return Allegro_Web_Api_DoGetServiceInfoCategoriesResponse
     */
    public function setServiceInfoCatsList($serviceInfoCatsList)
    {
        $this->serviceInfoCatsList = $serviceInfoCatsList;
        return $this;
    }
}
