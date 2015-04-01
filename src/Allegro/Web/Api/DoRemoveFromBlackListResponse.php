<?php

/**
 * Class Allegro_Web_Api_DoRemoveFromBlackListResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoRemoveFromBlackListResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfBlacklistresstruct $blackListResult
     */
    protected $blackListResult = null;

    /**
     * @param Allegro_Web_Api_ArrayOfBlacklistresstruct $blackListResult
     */
    public function __construct($blackListResult)
    {
        $this->blackListResult = $blackListResult;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfBlacklistresstruct
     */
    public function getBlackListResult()
    {
        return $this->blackListResult;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfBlacklistresstruct $blackListResult
     * @return Allegro_Web_Api_DoRemoveFromBlackListResponse
     */
    public function setBlackListResult($blackListResult)
    {
        $this->blackListResult = $blackListResult;
        return $this;
    }
}
