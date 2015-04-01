<?php

/**
 * Class Allegro_Web_Api_DoGetWaitingFeedbacksResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetWaitingFeedbacksResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfWaitfeedbackstruct $feWaitList
     */
    protected $feWaitList = null;

    /**
     * @param Allegro_Web_Api_ArrayOfWaitfeedbackstruct $feWaitList
     */
    public function __construct($feWaitList)
    {
        $this->feWaitList = $feWaitList;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfWaitfeedbackstruct
     */
    public function getFeWaitList()
    {
        return $this->feWaitList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfWaitfeedbackstruct $feWaitList
     * @return Allegro_Web_Api_DoGetWaitingFeedbacksResponse
     */
    public function setFeWaitList($feWaitList)
    {
        $this->feWaitList = $feWaitList;
        return $this;
    }
}
