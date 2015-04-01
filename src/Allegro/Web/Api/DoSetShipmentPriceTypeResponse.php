<?php

/**
 * Class Allegro_Web_Api_DoSetShipmentPriceTypeResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSetShipmentPriceTypeResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $operationResult
     */
    protected $operationResult = null;

    /**
     * @param int $operationResult
     */
    public function __construct($operationResult)
    {
        $this->operationResult = $operationResult;
    }

    /**
     * @return int
     */
    public function getOperationResult()
    {
        return $this->operationResult;
    }

    /**
     * @param int $operationResult
     * @return Allegro_Web_Api_DoSetShipmentPriceTypeResponse
     */
    public function setOperationResult($operationResult)
    {
        $this->operationResult = $operationResult;
        return $this;
    }
}
