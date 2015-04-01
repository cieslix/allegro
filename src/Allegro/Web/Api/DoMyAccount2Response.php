<?php

/**
 * Class Allegro_Web_Api_DoMyAccount2Response
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoMyAccount2Response extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfMyaccountstruct2 $myaccountList
     */
    protected $myaccountList = null;

    /**
     * @param Allegro_Web_Api_ArrayOfMyaccountstruct2 $myaccountList
     */
    public function __construct($myaccountList)
    {
        $this->myaccountList = $myaccountList;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfMyaccountstruct2
     */
    public function getMyaccountList()
    {
        return $this->myaccountList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfMyaccountstruct2 $myaccountList
     * @return Allegro_Web_Api_DoMyAccount2Response
     */
    public function setMyaccountList($myaccountList)
    {
        $this->myaccountList = $myaccountList;
        return $this;
    }
}
