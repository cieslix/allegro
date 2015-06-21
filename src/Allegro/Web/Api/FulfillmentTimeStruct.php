<?php

/**
 * Class Allegro_Web_Api_FulfillmentTimeStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_FulfillmentTimeStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $fulfillmentTimeFrom
     */
    protected $fulfillmentTimeFrom = null;

    /**
     * @var int $fulfillmentTimeTo
     */
    protected $fulfillmentTimeTo = null;

    /**
     * @param int $fulfillmentTimeFrom
     * @param int $fulfillmentTimeTo
     */
    public function __construct($fulfillmentTimeFrom, $fulfillmentTimeTo)
    {
        $this->fulfillmentTimeFrom = $fulfillmentTimeFrom;
        $this->fulfillmentTimeTo   = $fulfillmentTimeTo;
    }

    /**
     * @return int
     */
    public function getFulfillmentTimeFrom()
    {
        return $this->fulfillmentTimeFrom;
    }

    /**
     * @param int $fulfillmentTimeFrom
     * @return Allegro_Web_Api_FulfillmentTimeStruct
     */
    public function setFulfillmentTimeFrom($fulfillmentTimeFrom)
    {
        $this->fulfillmentTimeFrom = $fulfillmentTimeFrom;
        return $this;
    }

    /**
     * @return int
     */
    public function getFulfillmentTimeTo()
    {
        return $this->fulfillmentTimeTo;
    }

    /**
     * @param int $fulfillmentTimeTo
     * @return Allegro_Web_Api_FulfillmentTimeStruct
     */
    public function setFulfillmentTimeTo($fulfillmentTimeTo)
    {
        $this->fulfillmentTimeTo = $fulfillmentTimeTo;
        return $this;
    }
}
