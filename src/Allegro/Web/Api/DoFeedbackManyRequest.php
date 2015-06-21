<?php

/**
 * Class Allegro_Web_Api_DoFeedbackManyRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoFeedbackManyRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFeedbackmanystruct $feedbacksList
     */
    protected $feedbacksList = null;

    /**
     * @param string                                    $sessionHandle
     * @param Allegro_Web_Api_ArrayOfFeedbackmanystruct $feedbacksList
     */
    public function __construct($sessionHandle, $feedbacksList)
    {
        $this->sessionHandle = $sessionHandle;
        $this->feedbacksList = $feedbacksList;
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
     * @return Allegro_Web_Api_DoFeedbackManyRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFeedbackmanystruct
     */
    public function getFeedbacksList()
    {
        return $this->feedbacksList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFeedbackmanystruct $feedbacksList
     * @return Allegro_Web_Api_DoFeedbackManyRequest
     */
    public function setFeedbacksList($feedbacksList)
    {
        $this->feedbacksList = $feedbacksList;
        return $this;
    }
}
