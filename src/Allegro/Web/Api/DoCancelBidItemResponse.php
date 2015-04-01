<?php

/**
 * Class Allegro_Web_Api_DoCancelBidItemResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoCancelBidItemResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $cancelBidValue
     */
    protected $cancelBidValue = null;

    /**
     * @var Allegro_Web_Api_ArrayOfInt $cancelledBids
     */
    protected $cancelledBids = null;

    /**
     * @var Allegro_Web_Api_ArrayOfInt $notCancelledBids
     */
    protected $notCancelledBids = null;

    /**
     * @param int $cancelBidValue
     * @param Allegro_Web_Api_ArrayOfInt $cancelledBids
     * @param Allegro_Web_Api_ArrayOfInt $notCancelledBids
     */
    public function __construct($cancelBidValue, $cancelledBids, $notCancelledBids)
    {
        $this->cancelBidValue = $cancelBidValue;
        $this->cancelledBids = $cancelledBids;
        $this->notCancelledBids = $notCancelledBids;
    }

    /**
     * @return int
     */
    public function getCancelBidValue()
    {
        return $this->cancelBidValue;
    }

    /**
     * @param int $cancelBidValue
     * @return Allegro_Web_Api_DoCancelBidItemResponse
     */
    public function setCancelBidValue($cancelBidValue)
    {
        $this->cancelBidValue = $cancelBidValue;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfInt
     */
    public function getCancelledBids()
    {
        return $this->cancelledBids;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfInt $cancelledBids
     * @return Allegro_Web_Api_DoCancelBidItemResponse
     */
    public function setCancelledBids($cancelledBids)
    {
        $this->cancelledBids = $cancelledBids;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfInt
     */
    public function getNotCancelledBids()
    {
        return $this->notCancelledBids;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfInt $notCancelledBids
     * @return Allegro_Web_Api_DoCancelBidItemResponse
     */
    public function setNotCancelledBids($notCancelledBids)
    {
        $this->notCancelledBids = $notCancelledBids;
        return $this;
    }
}
