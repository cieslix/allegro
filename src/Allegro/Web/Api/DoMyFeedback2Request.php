<?php

/**
 * Class Allegro_Web_Api_DoMyFeedback2Request
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoMyFeedback2Request extends Allegro_Web_Api_Abstract
{
    const FEEDBACK_TYPE_RECEIVED = 'fb_recvd';
    const FEEDBACK_TYPE_GAVE = 'fb_gave';

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var string $feedbackType
     */
    protected $feedbackType = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var int $desc
     */
    protected $desc = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $itemsArray
     */
    protected $itemsArray = null;

    /**
     * @param string $sessionHandle
     * @param string $feedbackType
     * @param int $offset
     * @param int $desc
     * @param Allegro_Web_Api_ArrayOfLong $itemsArray
     */
    public function __construct($sessionHandle, $feedbackType, $offset, $desc, $itemsArray)
    {
        $this->sessionHandle = $sessionHandle;
        $this->feedbackType = $feedbackType;
        $this->offset = $offset;
        $this->desc = $desc;
        $this->itemsArray = $itemsArray;
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
     * @return Allegro_Web_Api_DoMyFeedback2Request
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeedbackType()
    {
        return $this->feedbackType;
    }

    /**
     * @param string $feedbackType
     * @return Allegro_Web_Api_DoMyFeedback2Request
     */
    public function setFeedbackType($feedbackType)
    {
        $this->feedbackType = $feedbackType;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return Allegro_Web_Api_DoMyFeedback2Request
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param int $desc
     * @return Allegro_Web_Api_DoMyFeedback2Request
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getItemsArray()
    {
        return $this->itemsArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $itemsArray
     * @return Allegro_Web_Api_DoMyFeedback2Request
     */
    public function setItemsArray($itemsArray)
    {
        $this->itemsArray = $itemsArray;
        return $this;
    }
}
