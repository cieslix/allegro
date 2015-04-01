<?php

/**
 * Class Allegro_Web_Api_DoGetServiceInfoResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetServiceInfoResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfServiceinfostruct $serviceInfoItemsList
     */
    protected $serviceInfoItemsList = null;

    /**
     * @param Allegro_Web_Api_ArrayOfServiceinfostruct $serviceInfoItemsList
     */
    public function __construct($serviceInfoItemsList)
    {
        $this->serviceInfoItemsList = $serviceInfoItemsList;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfServiceinfostruct
     */
    public function getServiceInfoItemsList()
    {
        return $this->serviceInfoItemsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfServiceinfostruct $serviceInfoItemsList
     * @return Allegro_Web_Api_DoGetServiceInfoResponse
     */
    public function setServiceInfoItemsList($serviceInfoItemsList)
    {
        $this->serviceInfoItemsList = $serviceInfoItemsList;
        return $this;
    }
}
