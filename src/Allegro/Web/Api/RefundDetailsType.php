<?php

/**
 * Class Allegro_Web_Api_RefundDetailsType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_RefundDetailsType extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $refundId
     */
    protected $refundId = null;

    /**
     * @var string $refundStatus
     */
    protected $refundStatus = null;

    /**
     * @var int $refundQuantity
     */
    protected $refundQuantity = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $considerDate
     */
    protected $considerDate = null;

    /**
     * @param int $refundId
     * @param string $refundStatus
     * @param int $refundQuantity
     * @param \DateTime $createdDate
     * @param \DateTime $considerDate
     */
    public function __construct($refundId, $refundStatus, $refundQuantity, \DateTime $createdDate, \DateTime $considerDate)
    {
        $this->refundId = $refundId;
        $this->refundStatus = $refundStatus;
        $this->refundQuantity = $refundQuantity;
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
        $this->considerDate = $considerDate->format(\DateTime::ATOM);
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
     * @return Allegro_Web_Api_RefundDetailsType
     */
    public function setRefundId($refundId)
    {
        $this->refundId = $refundId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefundStatus()
    {
        return $this->refundStatus;
    }

    /**
     * @param string $refundStatus
     * @return Allegro_Web_Api_RefundDetailsType
     */
    public function setRefundStatus($refundStatus)
    {
        $this->refundStatus = $refundStatus;
        return $this;
    }

    /**
     * @return int
     */
    public function getRefundQuantity()
    {
        return $this->refundQuantity;
    }

    /**
     * @param int $refundQuantity
     * @return Allegro_Web_Api_RefundDetailsType
     */
    public function setRefundQuantity($refundQuantity)
    {
        $this->refundQuantity = $refundQuantity;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        if ($this->createdDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->createdDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $createdDate
     * @return Allegro_Web_Api_RefundDetailsType
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
        $this->createdDate = $createdDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getConsiderDate()
    {
        if ($this->considerDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->considerDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $considerDate
     * @return Allegro_Web_Api_RefundDetailsType
     */
    public function setConsiderDate(\DateTime $considerDate)
    {
        $this->considerDate = $considerDate->format(\DateTime::ATOM);
        return $this;
    }
}
