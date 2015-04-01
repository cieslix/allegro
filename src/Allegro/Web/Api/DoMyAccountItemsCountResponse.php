<?php

/**
 * Class Allegro_Web_Api_DoMyAccountItemsCountResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoMyAccountItemsCountResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $myaccountItemsCount
     */
    protected $myaccountItemsCount = null;

    /**
     * @param int $myaccountItemsCount
     */
    public function __construct($myaccountItemsCount)
    {
        $this->myaccountItemsCount = $myaccountItemsCount;
    }

    /**
     * @return int
     */
    public function getMyaccountItemsCount()
    {
        return $this->myaccountItemsCount;
    }

    /**
     * @param int $myaccountItemsCount
     * @return Allegro_Web_Api_DoMyAccountItemsCountResponse
     */
    public function setMyaccountItemsCount($myaccountItemsCount)
    {
        $this->myaccountItemsCount = $myaccountItemsCount;
        return $this;
    }
}
