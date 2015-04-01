<?php

/**
 * Class Allegro_Web_Api_DoGetMyIncomingPaymentsRefundsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyIncomingPaymentsRefundsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfUserincomingpaymentrefundsstruct $payTransIncomeRefunds
     */
    protected $payTransIncomeRefunds = null;

    /**
     * @param Allegro_Web_Api_ArrayOfUserincomingpaymentrefundsstruct $payTransIncomeRefunds
     */
    public function __construct($payTransIncomeRefunds)
    {
        $this->payTransIncomeRefunds = $payTransIncomeRefunds;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfUserincomingpaymentrefundsstruct
     */
    public function getPayTransIncomeRefunds()
    {
        return $this->payTransIncomeRefunds;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfUserincomingpaymentrefundsstruct $payTransIncomeRefunds
     * @return Allegro_Web_Api_DoGetMyIncomingPaymentsRefundsResponse
     */
    public function setPayTransIncomeRefunds($payTransIncomeRefunds)
    {
        $this->payTransIncomeRefunds = $payTransIncomeRefunds;
        return $this;
    }
}
