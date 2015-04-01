<?php

/**
 * Class Allegro_Web_Api_DoFeedbackResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoFeedbackResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $feedbackId
     */
    protected $feedbackId = null;

    /**
     * @param int $feedbackId
     */
    public function __construct($feedbackId)
    {
        $this->feedbackId = $feedbackId;
    }

    /**
     * @return int
     */
    public function getFeedbackId()
    {
        return $this->feedbackId;
    }

    /**
     * @param int $feedbackId
     * @return Allegro_Web_Api_DoFeedbackResponse
     */
    public function setFeedbackId($feedbackId)
    {
        $this->feedbackId = $feedbackId;
        return $this;
    }
}
