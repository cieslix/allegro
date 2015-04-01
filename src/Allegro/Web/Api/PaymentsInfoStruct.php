<?php

/**
 * Class Allegro_Web_Api_PaymentsInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PaymentsInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var float $paymentsBalance
     */
    protected $paymentsBalance = null;

    /**
     * @var string $paymentsBankAccount
     */
    protected $paymentsBankAccount = null;

    /**
     * @var Allegro_Web_Api_PaymentsUserDataStruct $paymentsUserData
     */
    protected $paymentsUserData = null;

    /**
     * @var Allegro_Web_Api_PaymentsPayoutStruct $paymentsPayout
     */
    protected $paymentsPayout = null;

    /**
     * @var int $paymentsNotifications
     */
    protected $paymentsNotifications = null;

    /**
     * @param float $paymentsBalance
     * @param string $paymentsBankAccount
     * @param Allegro_Web_Api_PaymentsUserDataStruct $paymentsUserData
     * @param Allegro_Web_Api_PaymentsPayoutStruct $paymentsPayout
     * @param int $paymentsNotifications
     */
    public function __construct($paymentsBalance, $paymentsBankAccount, $paymentsUserData, $paymentsPayout, $paymentsNotifications)
    {
        $this->paymentsBalance = $paymentsBalance;
        $this->paymentsBankAccount = $paymentsBankAccount;
        $this->paymentsUserData = $paymentsUserData;
        $this->paymentsPayout = $paymentsPayout;
        $this->paymentsNotifications = $paymentsNotifications;
    }

    /**
     * @return float
     */
    public function getPaymentsBalance()
    {
        return $this->paymentsBalance;
    }

    /**
     * @param float $paymentsBalance
     * @return Allegro_Web_Api_PaymentsInfoStruct
     */
    public function setPaymentsBalance($paymentsBalance)
    {
        $this->paymentsBalance = $paymentsBalance;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentsBankAccount()
    {
        return $this->paymentsBankAccount;
    }

    /**
     * @param string $paymentsBankAccount
     * @return Allegro_Web_Api_PaymentsInfoStruct
     */
    public function setPaymentsBankAccount($paymentsBankAccount)
    {
        $this->paymentsBankAccount = $paymentsBankAccount;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_PaymentsUserDataStruct
     */
    public function getPaymentsUserData()
    {
        return $this->paymentsUserData;
    }

    /**
     * @param Allegro_Web_Api_PaymentsUserDataStruct $paymentsUserData
     * @return Allegro_Web_Api_PaymentsInfoStruct
     */
    public function setPaymentsUserData($paymentsUserData)
    {
        $this->paymentsUserData = $paymentsUserData;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_PaymentsPayoutStruct
     */
    public function getPaymentsPayout()
    {
        return $this->paymentsPayout;
    }

    /**
     * @param Allegro_Web_Api_PaymentsPayoutStruct $paymentsPayout
     * @return Allegro_Web_Api_PaymentsInfoStruct
     */
    public function setPaymentsPayout($paymentsPayout)
    {
        $this->paymentsPayout = $paymentsPayout;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentsNotifications()
    {
        return $this->paymentsNotifications;
    }

    /**
     * @param int $paymentsNotifications
     * @return Allegro_Web_Api_PaymentsInfoStruct
     */
    public function setPaymentsNotifications($paymentsNotifications)
    {
        $this->paymentsNotifications = $paymentsNotifications;
        return $this;
    }
}
