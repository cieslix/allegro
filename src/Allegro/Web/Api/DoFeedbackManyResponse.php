<?php

/**
 * Class Allegro_Web_Api_DoFeedbackManyResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoFeedbackManyResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfFeedbackresultstruct $feResults
     */
    protected $feResults = null;

    /**
     * @param Allegro_Web_Api_ArrayOfFeedbackresultstruct $feResults
     */
    public function __construct($feResults)
    {
        $this->feResults = $feResults;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFeedbackresultstruct
     */
    public function getFeResults()
    {
        return $this->feResults;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFeedbackresultstruct $feResults
     * @return Allegro_Web_Api_DoFeedbackManyResponse
     */
    public function setFeResults($feResults)
    {
        $this->feResults = $feResults;
        return $this;
    }
}
