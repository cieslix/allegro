<?php

/**
 * Class Allegro_Web_Api_DoGetMyPaymentsInfoResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyPaymentsInfoResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_PaymentsInfoStruct $paymentsInfo
     */
    protected $paymentsInfo = null;

    /**
     * @param Allegro_Web_Api_PaymentsInfoStruct $paymentsInfo
     */
    public function __construct($paymentsInfo)
    {
        $this->paymentsInfo = $paymentsInfo;
    }

    /**
     * @return Allegro_Web_Api_PaymentsInfoStruct
     */
    public function getPaymentsInfo()
    {
        return $this->paymentsInfo;
    }

    /**
     * @param Allegro_Web_Api_PaymentsInfoStruct $paymentsInfo
     * @return Allegro_Web_Api_DoGetMyPaymentsInfoResponse
     */
    public function setPaymentsInfo($paymentsInfo)
    {
        $this->paymentsInfo = $paymentsInfo;
        return $this;
    }
}
