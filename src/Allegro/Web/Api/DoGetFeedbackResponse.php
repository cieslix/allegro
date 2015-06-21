<?php

/**
 * Class Allegro_Web_Api_DoGetFeedbackResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetFeedbackResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfFeedbacklist $feedbackList
     */
    protected $feedbackList = null;

    /**
     * @var int $feedbackCount
     */
    protected $feedbackCount = null;

    /**
     * @param Allegro_Web_Api_ArrayOfFeedbacklist $feedbackList
     * @param int                                 $feedbackCount
     */
    public function __construct($feedbackList, $feedbackCount)
    {
        $this->feedbackList  = $feedbackList;
        $this->feedbackCount = $feedbackCount;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFeedbacklist
     */
    public function getFeedbackList()
    {
        return $this->feedbackList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFeedbacklist $feedbackList
     * @return Allegro_Web_Api_DoGetFeedbackResponse
     */
    public function setFeedbackList($feedbackList)
    {
        $this->feedbackList = $feedbackList;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeedbackCount()
    {
        return $this->feedbackCount;
    }

    /**
     * @param int $feedbackCount
     * @return Allegro_Web_Api_DoGetFeedbackResponse
     */
    public function setFeedbackCount($feedbackCount)
    {
        $this->feedbackCount = $feedbackCount;
        return $this;
    }
}
