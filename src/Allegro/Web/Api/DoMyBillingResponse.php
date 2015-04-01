<?php

/**
 * Class Allegro_Web_Api_DoMyBillingResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoMyBillingResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $myBilling
     */
    protected $myBilling = null;

    /**
     * @param string $myBilling
     */
    public function __construct($myBilling)
    {
        $this->myBilling = $myBilling;
    }

    /**
     * @return string
     */
    public function getMyBilling()
    {
        return $this->myBilling;
    }

    /**
     * @param string $myBilling
     * @return Allegro_Web_Api_DoMyBillingResponse
     */
    public function setMyBilling($myBilling)
    {
        $this->myBilling = $myBilling;
        return $this;
    }
}
