<?php

/**
 * Class Allegro_Web_Api_DoGetMyPaymentsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyPaymentsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfUserpaymentstruct $payTransPayment
     */
    protected $payTransPayment = null;

    /**
     * @param Allegro_Web_Api_ArrayOfUserpaymentstruct $payTransPayment
     */
    public function __construct($payTransPayment)
    {
        $this->payTransPayment = $payTransPayment;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfUserpaymentstruct
     */
    public function getPayTransPayment()
    {
        return $this->payTransPayment;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfUserpaymentstruct $payTransPayment
     * @return Allegro_Web_Api_DoGetMyPaymentsResponse
     */
    public function setPayTransPayment($payTransPayment)
    {
        $this->payTransPayment = $payTransPayment;
        return $this;
    }
}
