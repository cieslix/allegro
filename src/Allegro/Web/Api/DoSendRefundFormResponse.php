<?php

/**
 * Class Allegro_Web_Api_DoSendRefundFormResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSendRefundFormResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $refundId
     */
    protected $refundId = null;

    /**
     * @param int $refundId
     */
    public function __construct($refundId)
    {
        $this->refundId = $refundId;
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
     * @return Allegro_Web_Api_DoSendRefundFormResponse
     */
    public function setRefundId($refundId)
    {
        $this->refundId = $refundId;
        return $this;
    }
}
