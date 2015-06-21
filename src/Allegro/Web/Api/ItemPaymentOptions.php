<?php

/**
 * Class Allegro_Web_Api_ItemPaymentOptions
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemPaymentOptions extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $payOptionTransfer
     */
    protected $payOptionTransfer = null;

    /**
     * @var int $payOptionOnDelivery
     */
    protected $payOptionOnDelivery = null;

    /**
     * @var int $payOptionAllegroPay
     */
    protected $payOptionAllegroPay = null;

    /**
     * @var int $payOptionSeeDesc
     */
    protected $payOptionSeeDesc = null;

    /**
     * @var int $payOptionPayu
     */
    protected $payOptionPayu = null;

    /**
     * @var int $payOptionEscrow
     */
    protected $payOptionEscrow = null;

    /**
     * @var int $payOptionQiwi
     */
    protected $payOptionQiwi = null;

    /**
     * @param int $payOptionTransfer
     * @param int $payOptionOnDelivery
     * @param int $payOptionAllegroPay
     * @param int $payOptionSeeDesc
     * @param int $payOptionPayu
     * @param int $payOptionEscrow
     * @param int $payOptionQiwi
     */
    public function __construct($payOptionTransfer, $payOptionOnDelivery, $payOptionAllegroPay, $payOptionSeeDesc, $payOptionPayu, $payOptionEscrow, $payOptionQiwi)
    {
        $this->payOptionTransfer   = $payOptionTransfer;
        $this->payOptionOnDelivery = $payOptionOnDelivery;
        $this->payOptionAllegroPay = $payOptionAllegroPay;
        $this->payOptionSeeDesc    = $payOptionSeeDesc;
        $this->payOptionPayu       = $payOptionPayu;
        $this->payOptionEscrow     = $payOptionEscrow;
        $this->payOptionQiwi       = $payOptionQiwi;
    }

    /**
     * @return int
     */
    public function getPayOptionTransfer()
    {
        return $this->payOptionTransfer;
    }

    /**
     * @param int $payOptionTransfer
     * @return Allegro_Web_Api_ItemPaymentOptions
     */
    public function setPayOptionTransfer($payOptionTransfer)
    {
        $this->payOptionTransfer = $payOptionTransfer;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayOptionOnDelivery()
    {
        return $this->payOptionOnDelivery;
    }

    /**
     * @param int $payOptionOnDelivery
     * @return Allegro_Web_Api_ItemPaymentOptions
     */
    public function setPayOptionOnDelivery($payOptionOnDelivery)
    {
        $this->payOptionOnDelivery = $payOptionOnDelivery;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayOptionAllegroPay()
    {
        return $this->payOptionAllegroPay;
    }

    /**
     * @param int $payOptionAllegroPay
     * @return Allegro_Web_Api_ItemPaymentOptions
     */
    public function setPayOptionAllegroPay($payOptionAllegroPay)
    {
        $this->payOptionAllegroPay = $payOptionAllegroPay;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayOptionSeeDesc()
    {
        return $this->payOptionSeeDesc;
    }

    /**
     * @param int $payOptionSeeDesc
     * @return Allegro_Web_Api_ItemPaymentOptions
     */
    public function setPayOptionSeeDesc($payOptionSeeDesc)
    {
        $this->payOptionSeeDesc = $payOptionSeeDesc;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayOptionPayu()
    {
        return $this->payOptionPayu;
    }

    /**
     * @param int $payOptionPayu
     * @return Allegro_Web_Api_ItemPaymentOptions
     */
    public function setPayOptionPayu($payOptionPayu)
    {
        $this->payOptionPayu = $payOptionPayu;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayOptionEscrow()
    {
        return $this->payOptionEscrow;
    }

    /**
     * @param int $payOptionEscrow
     * @return Allegro_Web_Api_ItemPaymentOptions
     */
    public function setPayOptionEscrow($payOptionEscrow)
    {
        $this->payOptionEscrow = $payOptionEscrow;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayOptionQiwi()
    {
        return $this->payOptionQiwi;
    }

    /**
     * @param int $payOptionQiwi
     * @return Allegro_Web_Api_ItemPaymentOptions
     */
    public function setPayOptionQiwi($payOptionQiwi)
    {
        $this->payOptionQiwi = $payOptionQiwi;
        return $this;
    }
}
