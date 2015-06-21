<?php

/**
 * Class Allegro_Web_Api_DoGetArchiveRefundsListResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetArchiveRefundsListResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $refundsCount
     */
    protected $refundsCount = null;

    /**
     * @var Allegro_Web_Api_ArrayOfArchiverefundslisttypestruct $refundsList
     */
    protected $refundsList = null;

    /**
     * @param int                                                 $refundsCount
     * @param Allegro_Web_Api_ArrayOfArchiverefundslisttypestruct $refundsList
     */
    public function __construct($refundsCount, $refundsList)
    {
        $this->refundsCount = $refundsCount;
        $this->refundsList  = $refundsList;
    }

    /**
     * @return int
     */
    public function getRefundsCount()
    {
        return $this->refundsCount;
    }

    /**
     * @param int $refundsCount
     * @return Allegro_Web_Api_DoGetArchiveRefundsListResponse
     */
    public function setRefundsCount($refundsCount)
    {
        $this->refundsCount = $refundsCount;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfArchiverefundslisttypestruct
     */
    public function getRefundsList()
    {
        return $this->refundsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfArchiverefundslisttypestruct $refundsList
     * @return Allegro_Web_Api_DoGetArchiveRefundsListResponse
     */
    public function setRefundsList($refundsList)
    {
        $this->refundsList = $refundsList;
        return $this;
    }
}
