<?php

/**
 * Class Allegro_Web_Api_DoGetPaymentDataResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetPaymentDataResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfBillingdatatype $paymentList
     */
    protected $paymentList = null;

    /**
     * @param Allegro_Web_Api_ArrayOfBillingdatatype $paymentList
     */
    public function __construct($paymentList)
    {
        $this->paymentList = $paymentList;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfBillingdatatype
     */
    public function getPaymentList()
    {
        return $this->paymentList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfBillingdatatype $paymentList
     * @return Allegro_Web_Api_DoGetPaymentDataResponse
     */
    public function setPaymentList($paymentList)
    {
        $this->paymentList = $paymentList;
        return $this;
    }
}
