<?php

/**
 * Class Allegro_Web_Api_FinishItemsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_FinishItemsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $finishItemId
     */
    protected $finishItemId = null;

    /**
     * @var int $finishCancelAllBids
     */
    protected $finishCancelAllBids = null;

    /**
     * @var string $finishCancelReason
     */
    protected $finishCancelReason = null;

    /**
     * @param int    $finishItemId
     * @param int    $finishCancelAllBids
     * @param string $finishCancelReason
     */
    public function __construct($finishItemId, $finishCancelAllBids, $finishCancelReason)
    {
        $this->finishItemId        = $finishItemId;
        $this->finishCancelAllBids = $finishCancelAllBids;
        $this->finishCancelReason  = $finishCancelReason;
    }

    /**
     * @return int
     */
    public function getFinishItemId()
    {
        return $this->finishItemId;
    }

    /**
     * @param int $finishItemId
     * @return Allegro_Web_Api_FinishItemsStruct
     */
    public function setFinishItemId($finishItemId)
    {
        $this->finishItemId = $finishItemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFinishCancelAllBids()
    {
        return $this->finishCancelAllBids;
    }

    /**
     * @param int $finishCancelAllBids
     * @return Allegro_Web_Api_FinishItemsStruct
     */
    public function setFinishCancelAllBids($finishCancelAllBids)
    {
        $this->finishCancelAllBids = $finishCancelAllBids;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinishCancelReason()
    {
        return $this->finishCancelReason;
    }

    /**
     * @param string $finishCancelReason
     * @return Allegro_Web_Api_FinishItemsStruct
     */
    public function setFinishCancelReason($finishCancelReason)
    {
        $this->finishCancelReason = $finishCancelReason;
        return $this;
    }
}
