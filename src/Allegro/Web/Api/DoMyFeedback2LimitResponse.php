<?php

/**
 * Class Allegro_Web_Api_DoMyFeedback2LimitResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoMyFeedback2LimitResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfMyfeedbackliststruct2 $myfeedbackList
     */
    protected $myfeedbackList = null;

    /**
     * @param Allegro_Web_Api_ArrayOfMyfeedbackliststruct2 $myfeedbackList
     */
    public function __construct($myfeedbackList)
    {
        $this->myfeedbackList = $myfeedbackList;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfMyfeedbackliststruct2
     */
    public function getMyfeedbackList()
    {
        return $this->myfeedbackList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfMyfeedbackliststruct2 $myfeedbackList
     * @return Allegro_Web_Api_DoMyFeedback2LimitResponse
     */
    public function setMyfeedbackList($myfeedbackList)
    {
        $this->myfeedbackList = $myfeedbackList;
        return $this;
    }
}
