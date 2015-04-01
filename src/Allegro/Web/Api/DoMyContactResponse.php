<?php

/**
 * Class Allegro_Web_Api_DoMyContactResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoMyContactResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfMycontactlist $mycontactList
     */
    protected $mycontactList = null;

    /**
     * @param Allegro_Web_Api_ArrayOfMycontactlist $mycontactList
     */
    public function __construct($mycontactList)
    {
        $this->mycontactList = $mycontactList;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfMycontactlist
     */
    public function getMycontactList()
    {
        return $this->mycontactList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfMycontactlist $mycontactList
     * @return Allegro_Web_Api_DoMyContactResponse
     */
    public function setMycontactList($mycontactList)
    {
        $this->mycontactList = $mycontactList;
        return $this;
    }
}
