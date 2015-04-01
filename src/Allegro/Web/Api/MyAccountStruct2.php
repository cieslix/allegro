<?php

/**
 * Class Allegro_Web_Api_MyAccountStruct2
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_MyAccountStruct2 extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfString $myAccountArray
     */
    protected $myAccountArray = null;

    /**
     * @param Allegro_Web_Api_ArrayOfString $myAccountArray
     */
    public function __construct($myAccountArray)
    {
        $this->myAccountArray = $myAccountArray;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getMyAccountArray()
    {
        return $this->myAccountArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $myAccountArray
     * @return Allegro_Web_Api_MyAccountStruct2
     */
    public function setMyAccountArray($myAccountArray)
    {
        $this->myAccountArray = $myAccountArray;
        return $this;
    }
}
