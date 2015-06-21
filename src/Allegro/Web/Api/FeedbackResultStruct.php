<?php

/**
 * Class Allegro_Web_Api_FeedbackResultStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_FeedbackResultStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $feItemId
     */
    protected $feItemId = null;

    /**
     * @var int $feId
     */
    protected $feId = null;

    /**
     * @var string $feFaultCode
     */
    protected $feFaultCode = null;

    /**
     * @var string $feFaultDesc
     */
    protected $feFaultDesc = null;

    /**
     * @param int    $feItemId
     * @param int    $feId
     * @param string $feFaultCode
     * @param string $feFaultDesc
     */
    public function __construct($feItemId, $feId, $feFaultCode, $feFaultDesc)
    {
        $this->feItemId    = $feItemId;
        $this->feId        = $feId;
        $this->feFaultCode = $feFaultCode;
        $this->feFaultDesc = $feFaultDesc;
    }

    /**
     * @return int
     */
    public function getFeItemId()
    {
        return $this->feItemId;
    }

    /**
     * @param int $feItemId
     * @return Allegro_Web_Api_FeedbackResultStruct
     */
    public function setFeItemId($feItemId)
    {
        $this->feItemId = $feItemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeId()
    {
        return $this->feId;
    }

    /**
     * @param int $feId
     * @return Allegro_Web_Api_FeedbackResultStruct
     */
    public function setFeId($feId)
    {
        $this->feId = $feId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeFaultCode()
    {
        return $this->feFaultCode;
    }

    /**
     * @param string $feFaultCode
     * @return Allegro_Web_Api_FeedbackResultStruct
     */
    public function setFeFaultCode($feFaultCode)
    {
        $this->feFaultCode = $feFaultCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeFaultDesc()
    {
        return $this->feFaultDesc;
    }

    /**
     * @param string $feFaultDesc
     * @return Allegro_Web_Api_FeedbackResultStruct
     */
    public function setFeFaultDesc($feFaultDesc)
    {
        $this->feFaultDesc = $feFaultDesc;
        return $this;
    }
}
