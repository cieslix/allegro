<?php

/**
 * Class Allegro_Web_Api_PaymentMethodStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PaymentMethodStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $paymentMethodId
     */
    protected $paymentMethodId = null;

    /**
     * @var string $paymentMethodName
     */
    protected $paymentMethodName = null;

    /**
     * @var string $paymentMethodImage
     */
    protected $paymentMethodImage = null;

    /**
     * @var int $paymentMethodUsage
     */
    protected $paymentMethodUsage = null;

    /**
     * @param string $paymentMethodId
     * @param string $paymentMethodName
     * @param string $paymentMethodImage
     * @param int $paymentMethodUsage
     */
    public function __construct($paymentMethodId, $paymentMethodName, $paymentMethodImage, $paymentMethodUsage)
    {
        $this->paymentMethodId = $paymentMethodId;
        $this->paymentMethodName = $paymentMethodName;
        $this->paymentMethodImage = $paymentMethodImage;
        $this->paymentMethodUsage = $paymentMethodUsage;
    }

    /**
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @param string $paymentMethodId
     * @return Allegro_Web_Api_PaymentMethodStruct
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodName()
    {
        return $this->paymentMethodName;
    }

    /**
     * @param string $paymentMethodName
     * @return Allegro_Web_Api_PaymentMethodStruct
     */
    public function setPaymentMethodName($paymentMethodName)
    {
        $this->paymentMethodName = $paymentMethodName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodImage()
    {
        return $this->paymentMethodImage;
    }

    /**
     * @param string $paymentMethodImage
     * @return Allegro_Web_Api_PaymentMethodStruct
     */
    public function setPaymentMethodImage($paymentMethodImage)
    {
        $this->paymentMethodImage = $paymentMethodImage;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentMethodUsage()
    {
        return $this->paymentMethodUsage;
    }

    /**
     * @param int $paymentMethodUsage
     * @return Allegro_Web_Api_PaymentMethodStruct
     */
    public function setPaymentMethodUsage($paymentMethodUsage)
    {
        $this->paymentMethodUsage = $paymentMethodUsage;
        return $this;
    }
}
