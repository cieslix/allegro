<?php

/**
 * Class Allegro_Web_Api_FinishFailureStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_FinishFailureStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $finishItemId
     */
    protected $finishItemId = null;

    /**
     * @var string $finishErrorCode
     */
    protected $finishErrorCode = null;

    /**
     * @var string $finishErrorMessage
     */
    protected $finishErrorMessage = null;

    /**
     * @param int $finishItemId
     * @param string $finishErrorCode
     * @param string $finishErrorMessage
     */
    public function __construct($finishItemId, $finishErrorCode, $finishErrorMessage)
    {
        $this->finishItemId = $finishItemId;
        $this->finishErrorCode = $finishErrorCode;
        $this->finishErrorMessage = $finishErrorMessage;
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
     * @return Allegro_Web_Api_FinishFailureStruct
     */
    public function setFinishItemId($finishItemId)
    {
        $this->finishItemId = $finishItemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinishErrorCode()
    {
        return $this->finishErrorCode;
    }

    /**
     * @param string $finishErrorCode
     * @return Allegro_Web_Api_FinishFailureStruct
     */
    public function setFinishErrorCode($finishErrorCode)
    {
        $this->finishErrorCode = $finishErrorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinishErrorMessage()
    {
        return $this->finishErrorMessage;
    }

    /**
     * @param string $finishErrorMessage
     * @return Allegro_Web_Api_FinishFailureStruct
     */
    public function setFinishErrorMessage($finishErrorMessage)
    {
        $this->finishErrorMessage = $finishErrorMessage;
        return $this;
    }
}
