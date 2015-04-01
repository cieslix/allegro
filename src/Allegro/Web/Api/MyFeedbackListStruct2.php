<?php

/**
 * Class Allegro_Web_Api_MyFeedbackListStruct2
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_MyFeedbackListStruct2 extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfString $feedbackArray
     */
    protected $feedbackArray = null;

    /**
     * @param Allegro_Web_Api_ArrayOfString $feedbackArray
     */
    public function __construct($feedbackArray)
    {
        $this->feedbackArray = $feedbackArray;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getFeedbackArray()
    {
        return $this->feedbackArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $feedbackArray
     * @return Allegro_Web_Api_MyFeedbackListStruct2
     */
    public function setFeedbackArray($feedbackArray)
    {
        $this->feedbackArray = $feedbackArray;
        return $this;
    }
}
