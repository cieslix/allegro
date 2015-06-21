<?php

/**
 * Class Allegro_Web_Api_ArchiveRefundsListTypeStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArchiveRefundsListTypeStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $refundId
     */
    protected $refundId = null;

    /**
     * @var int $buyerId
     */
    protected $buyerId = null;

    /**
     * @var string $buyerLogin
     */
    protected $buyerLogin = null;

    /**
     * @param int    $refundId
     * @param int    $buyerId
     * @param string $buyerLogin
     */
    public function __construct($refundId, $buyerId, $buyerLogin)
    {
        $this->refundId   = $refundId;
        $this->buyerId    = $buyerId;
        $this->buyerLogin = $buyerLogin;
    }

    /**
     * @return int
     */
    public function getRefundId()
    {
        return $this->refundId;
    }

    /**
     * @param int $refundId
     * @return Allegro_Web_Api_ArchiveRefundsListTypeStruct
     */
    public function setRefundId($refundId)
    {
        $this->refundId = $refundId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     * @return Allegro_Web_Api_ArchiveRefundsListTypeStruct
     */
    public function setBuyerId($buyerId)
    {
        $this->buyerId = $buyerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuyerLogin()
    {
        return $this->buyerLogin;
    }

    /**
     * @param string $buyerLogin
     * @return Allegro_Web_Api_ArchiveRefundsListTypeStruct
     */
    public function setBuyerLogin($buyerLogin)
    {
        $this->buyerLogin = $buyerLogin;
        return $this;
    }
}
