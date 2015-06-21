<?php

/**
 * Class Allegro_Web_Api_DoGetFilledPostBuyFormsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetFilledPostBuyFormsRequest extends Allegro_Web_Api_Abstract
{
    const USER_ROLE_SELLER = 1;
    const USER_ROLE_BUYER  = 2;

    const PAYMENT_TYPE_PAYU     = 1;
    const PAYMENT_TYPE_STANDARD = 2;
    const PAYMENT_TYPE_COD      = 4;

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $paymentType
     */
    protected $paymentType = null;

    /**
     * @var int $userRole
     */
    protected $userRole = null;

    /**
     * @var int $fillingTimeFrom
     */
    protected $fillingTimeFrom = null;

    /**
     * @var int $fillingTimeTo
     */
    protected $fillingTimeTo = null;

    /**
     * @param string $sessionId
     * @param int    $paymentType
     * @param int    $userRole
     * @param int    $fillingTimeFrom
     * @param int    $fillingTimeTo
     */
    public function __construct($sessionId, $paymentType, $userRole, $fillingTimeFrom, $fillingTimeTo)
    {
        $this->sessionId       = $sessionId;
        $this->paymentType     = $paymentType;
        $this->userRole        = $userRole;
        $this->fillingTimeFrom = $fillingTimeFrom;
        $this->fillingTimeTo   = $fillingTimeTo;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return Allegro_Web_Api_DoGetFilledPostBuyFormsRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param int $paymentType
     * @return Allegro_Web_Api_DoGetFilledPostBuyFormsRequest
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * @param int $userRole
     * @return Allegro_Web_Api_DoGetFilledPostBuyFormsRequest
     */
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;
        return $this;
    }

    /**
     * @return int
     */
    public function getFillingTimeFrom()
    {
        return $this->fillingTimeFrom;
    }

    /**
     * @param int $fillingTimeFrom
     * @return Allegro_Web_Api_DoGetFilledPostBuyFormsRequest
     */
    public function setFillingTimeFrom($fillingTimeFrom)
    {
        $this->fillingTimeFrom = $fillingTimeFrom;
        return $this;
    }

    /**
     * @return int
     */
    public function getFillingTimeTo()
    {
        return $this->fillingTimeTo;
    }

    /**
     * @param int $fillingTimeTo
     * @return Allegro_Web_Api_DoGetFilledPostBuyFormsRequest
     */
    public function setFillingTimeTo($fillingTimeTo)
    {
        $this->fillingTimeTo = $fillingTimeTo;
        return $this;
    }
}
