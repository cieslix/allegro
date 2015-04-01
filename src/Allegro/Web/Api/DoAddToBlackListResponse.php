<?php

/**
 * Class Allegro_Web_Api_DoAddToBlackListResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoAddToBlackListResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfUserblacklistaddresultstruct $userBlackListResultsArr
     */
    protected $userBlackListResultsArr = null;

    /**
     * @param Allegro_Web_Api_ArrayOfUserblacklistaddresultstruct $userBlackListResultsArr
     */
    public function __construct($userBlackListResultsArr)
    {
        $this->userBlackListResultsArr = $userBlackListResultsArr;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfUserblacklistaddresultstruct
     */
    public function getUserBlackListResultsArr()
    {
        return $this->userBlackListResultsArr;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfUserblacklistaddresultstruct $userBlackListResultsArr
     * @return Allegro_Web_Api_DoAddToBlackListResponse
     */
    public function setUserBlackListResultsArr($userBlackListResultsArr)
    {
        $this->userBlackListResultsArr = $userBlackListResultsArr;
        return $this;
    }
}
