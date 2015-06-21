<?php

/**
 * Class Allegro_Web_Api_DoGetMyWonItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyWonItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $wonItemsCounter
     */
    protected $wonItemsCounter = null;

    /**
     * @var Allegro_Web_Api_ArrayOfWonitemstruct $wonItemsList
     */
    protected $wonItemsList = null;

    /**
     * @param int                                  $wonItemsCounter
     * @param Allegro_Web_Api_ArrayOfWonitemstruct $wonItemsList
     */
    public function __construct($wonItemsCounter, $wonItemsList)
    {
        $this->wonItemsCounter = $wonItemsCounter;
        $this->wonItemsList    = $wonItemsList;
    }

    /**
     * @return int
     */
    public function getWonItemsCounter()
    {
        return $this->wonItemsCounter;
    }

    /**
     * @param int $wonItemsCounter
     * @return Allegro_Web_Api_DoGetMyWonItemsResponse
     */
    public function setWonItemsCounter($wonItemsCounter)
    {
        $this->wonItemsCounter = $wonItemsCounter;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfWonitemstruct
     */
    public function getWonItemsList()
    {
        return $this->wonItemsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfWonitemstruct $wonItemsList
     * @return Allegro_Web_Api_DoGetMyWonItemsResponse
     */
    public function setWonItemsList($wonItemsList)
    {
        $this->wonItemsList = $wonItemsList;
        return $this;
    }
}
