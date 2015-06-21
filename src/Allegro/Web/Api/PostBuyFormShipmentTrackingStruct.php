<?php

/**
 * Class Allegro_Web_Api_PostBuyFormShipmentTrackingStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PostBuyFormShipmentTrackingStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $postBuyFormOperatorId
     */
    protected $postBuyFormOperatorId = null;

    /**
     * @var string $postBuyFormPackageId
     */
    protected $postBuyFormPackageId = null;

    /**
     * @var string $postBuyFormPackageStatus
     */
    protected $postBuyFormPackageStatus = null;

    /**
     * @param int    $postBuyFormOperatorId
     * @param string $postBuyFormPackageId
     * @param string $postBuyFormPackageStatus
     */
    public function __construct($postBuyFormOperatorId, $postBuyFormPackageId, $postBuyFormPackageStatus)
    {
        $this->postBuyFormOperatorId    = $postBuyFormOperatorId;
        $this->postBuyFormPackageId     = $postBuyFormPackageId;
        $this->postBuyFormPackageStatus = $postBuyFormPackageStatus;
    }

    /**
     * @return int
     */
    public function getPostBuyFormOperatorId()
    {
        return $this->postBuyFormOperatorId;
    }

    /**
     * @param int $postBuyFormOperatorId
     * @return Allegro_Web_Api_PostBuyFormShipmentTrackingStruct
     */
    public function setPostBuyFormOperatorId($postBuyFormOperatorId)
    {
        $this->postBuyFormOperatorId = $postBuyFormOperatorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormPackageId()
    {
        return $this->postBuyFormPackageId;
    }

    /**
     * @param string $postBuyFormPackageId
     * @return Allegro_Web_Api_PostBuyFormShipmentTrackingStruct
     */
    public function setPostBuyFormPackageId($postBuyFormPackageId)
    {
        $this->postBuyFormPackageId = $postBuyFormPackageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormPackageStatus()
    {
        return $this->postBuyFormPackageStatus;
    }

    /**
     * @param string $postBuyFormPackageStatus
     * @return Allegro_Web_Api_PostBuyFormShipmentTrackingStruct
     */
    public function setPostBuyFormPackageStatus($postBuyFormPackageStatus)
    {
        $this->postBuyFormPackageStatus = $postBuyFormPackageStatus;
        return $this;
    }
}
