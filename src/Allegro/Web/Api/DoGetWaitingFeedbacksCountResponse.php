<?php

/**
 * Class Allegro_Web_Api_DoGetWaitingFeedbacksCountResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetWaitingFeedbacksCountResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $feedbackCount
     */
    protected $feedbackCount = null;

    /**
     * @param int $feedbackCount
     */
    public function __construct($feedbackCount)
    {
        $this->feedbackCount = $feedbackCount;
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
     * @return Allegro_Web_Api_DoGetWaitingFeedbacksCountResponse
     */
    public function setFeedbackCount($feedbackCount)
    {
        $this->feedbackCount = $feedbackCount;
        return $this;
    }
}
