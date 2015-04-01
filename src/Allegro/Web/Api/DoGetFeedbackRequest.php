<?php

/**
 * Class Allegro_Web_Api_DoGetFeedbackRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetFeedbackRequest extends Allegro_Web_Api_Abstract
{
    const KIND_TYPE_ALL = 'ALL';
    const KIND_TYPE_POS = 'POS';
    const KIND_TYPE_NEU = 'NEU';
    const KIND_TYPE_NEG = 'NEG';

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $feedbackFrom
     */
    protected $feedbackFrom = null;

    /**
     * @var int $feedbackTo
     */
    protected $feedbackTo = null;

    /**
     * @var int $feedbackOffset
     */
    protected $feedbackOffset = null;

    /**
     * @var string $feedbackKindList
     */
    protected $feedbackKindList = null;

    /**
     * @param string $sessionHandle
     * @param int $feedbackFrom
     * @param int $feedbackTo
     * @param int $feedbackOffset
     * @param string $feedbackKindList
     */
    public function __construct($sessionHandle, $feedbackFrom, $feedbackTo, $feedbackOffset, $feedbackKindList)
    {
        $this->sessionHandle = $sessionHandle;
        $this->feedbackFrom = $feedbackFrom;
        $this->feedbackTo = $feedbackTo;
        $this->feedbackOffset = $feedbackOffset;
        $this->feedbackKindList = $feedbackKindList;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return Allegro_Web_Api_DoGetFeedbackRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeedbackFrom()
    {
        return $this->feedbackFrom;
    }

    /**
     * @param int $feedbackFrom
     * @return Allegro_Web_Api_DoGetFeedbackRequest
     */
    public function setFeedbackFrom($feedbackFrom)
    {
        $this->feedbackFrom = $feedbackFrom;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeedbackTo()
    {
        return $this->feedbackTo;
    }

    /**
     * @param int $feedbackTo
     * @return Allegro_Web_Api_DoGetFeedbackRequest
     */
    public function setFeedbackTo($feedbackTo)
    {
        $this->feedbackTo = $feedbackTo;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeedbackOffset()
    {
        return $this->feedbackOffset;
    }

    /**
     * @param int $feedbackOffset
     * @return Allegro_Web_Api_DoGetFeedbackRequest
     */
    public function setFeedbackOffset($feedbackOffset)
    {
        $this->feedbackOffset = $feedbackOffset;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeedbackKindList()
    {
        return $this->feedbackKindList;
    }

    /**
     * @param string $feedbackKindList
     * @return Allegro_Web_Api_DoGetFeedbackRequest
     */
    public function setFeedbackKindList($feedbackKindList)
    {
        $this->feedbackKindList = $feedbackKindList;
        return $this;
    }
}
