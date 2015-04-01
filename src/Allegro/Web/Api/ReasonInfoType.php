<?php

/**
 * Class Allegro_Web_Api_ReasonInfoType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ReasonInfoType extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $reasonId
     */
    protected $reasonId = null;

    /**
     * @var string $reasonName
     */
    protected $reasonName = null;

    /**
     * @var int $maxQuantity
     */
    protected $maxQuantity = null;

    /**
     * @param int $reasonId
     * @param string $reasonName
     * @param int $maxQuantity
     */
    public function __construct($reasonId, $reasonName, $maxQuantity)
    {
        $this->reasonId = $reasonId;
        $this->reasonName = $reasonName;
        $this->maxQuantity = $maxQuantity;
    }

    /**
     * @return int
     */
    public function getReasonId()
    {
        return $this->reasonId;
    }

    /**
     * @param int $reasonId
     * @return Allegro_Web_Api_ReasonInfoType
     */
    public function setReasonId($reasonId)
    {
        $this->reasonId = $reasonId;
        return $this;
    }

    /**
     * @return string
     */
    public function getReasonName()
    {
        return $this->reasonName;
    }

    /**
     * @param string $reasonName
     * @return Allegro_Web_Api_ReasonInfoType
     */
    public function setReasonName($reasonName)
    {
        $this->reasonName = $reasonName;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxQuantity()
    {
        return $this->maxQuantity;
    }

    /**
     * @param int $maxQuantity
     * @return Allegro_Web_Api_ReasonInfoType
     */
    public function setMaxQuantity($maxQuantity)
    {
        $this->maxQuantity = $maxQuantity;
        return $this;
    }
}
