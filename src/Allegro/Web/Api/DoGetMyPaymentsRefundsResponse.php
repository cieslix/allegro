<?php

/**
 * Class Allegro_Web_Api_DoGetMyPaymentsRefundsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyPaymentsRefundsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfUserpaymentrefundsstruct $payTransPaymentRefunds
     */
    protected $payTransPaymentRefunds = null;

    /**
     * @param Allegro_Web_Api_ArrayOfUserpaymentrefundsstruct $payTransPaymentRefunds
     */
    public function __construct($payTransPaymentRefunds)
    {
        $this->payTransPaymentRefunds = $payTransPaymentRefunds;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfUserpaymentrefundsstruct
     */
    public function getPayTransPaymentRefunds()
    {
        return $this->payTransPaymentRefunds;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfUserpaymentrefundsstruct $payTransPaymentRefunds
     * @return Allegro_Web_Api_DoGetMyPaymentsRefundsResponse
     */
    public function setPayTransPaymentRefunds($payTransPaymentRefunds)
    {
        $this->payTransPaymentRefunds = $payTransPaymentRefunds;
        return $this;
    }
}
