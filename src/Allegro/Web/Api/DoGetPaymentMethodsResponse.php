<?php

/**
 * Class Allegro_Web_Api_DoGetPaymentMethodsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetPaymentMethodsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfPaymentmethodstruct $paymentMethods
     */
    protected $paymentMethods = null;

    /**
     * @param Allegro_Web_Api_ArrayOfPaymentmethodstruct $paymentMethods
     */
    public function __construct($paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPaymentmethodstruct
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPaymentmethodstruct $paymentMethods
     * @return Allegro_Web_Api_DoGetPaymentMethodsResponse
     */
    public function setPaymentMethods($paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }
}
