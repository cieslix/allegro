<?php

/**
 * Class Allegro_Web_Api_DoGetMyIncomingPaymentsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyIncomingPaymentsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfUserincomingpaymentstruct $payTransIncome
     */
    protected $payTransIncome = null;

    /**
     * @param Allegro_Web_Api_ArrayOfUserincomingpaymentstruct $payTransIncome
     */
    public function __construct($payTransIncome)
    {
        $this->payTransIncome = $payTransIncome;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfUserincomingpaymentstruct
     */
    public function getPayTransIncome()
    {
        return $this->payTransIncome;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfUserincomingpaymentstruct $payTransIncome
     * @return Allegro_Web_Api_DoGetMyIncomingPaymentsResponse
     */
    public function setPayTransIncome($payTransIncome)
    {
        $this->payTransIncome = $payTransIncome;
        return $this;
    }
}
