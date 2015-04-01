<?php

/**
 * Class Allegro_Web_Api_DoGetBidItem2Response
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetBidItem2Response extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfBidliststruct2 $biditemList
     */
    protected $biditemList = null;

    /**
     * @param Allegro_Web_Api_ArrayOfBidliststruct2 $biditemList
     */
    public function __construct($biditemList)
    {
        $this->biditemList = $biditemList;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfBidliststruct2
     */
    public function getBiditemList()
    {
        return $this->biditemList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfBidliststruct2 $biditemList
     * @return Allegro_Web_Api_DoGetBidItem2Response
     */
    public function setBiditemList($biditemList)
    {
        $this->biditemList = $biditemList;
        return $this;
    }
}
