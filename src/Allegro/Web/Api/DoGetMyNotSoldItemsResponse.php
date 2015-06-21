<?php

/**
 * Class Allegro_Web_Api_DoGetMyNotSoldItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyNotSoldItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $notSoldItemsCounter
     */
    protected $notSoldItemsCounter = null;

    /**
     * @var Allegro_Web_Api_ArrayOfNotsolditemstruct $notSoldItemsList
     */
    protected $notSoldItemsList = null;

    /**
     * @param int                                      $notSoldItemsCounter
     * @param Allegro_Web_Api_ArrayOfNotsolditemstruct $notSoldItemsList
     */
    public function __construct($notSoldItemsCounter, $notSoldItemsList)
    {
        $this->notSoldItemsCounter = $notSoldItemsCounter;
        $this->notSoldItemsList    = $notSoldItemsList;
    }

    /**
     * @return int
     */
    public function getNotSoldItemsCounter()
    {
        return $this->notSoldItemsCounter;
    }

    /**
     * @param int $notSoldItemsCounter
     * @return Allegro_Web_Api_DoGetMyNotSoldItemsResponse
     */
    public function setNotSoldItemsCounter($notSoldItemsCounter)
    {
        $this->notSoldItemsCounter = $notSoldItemsCounter;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfNotsolditemstruct
     */
    public function getNotSoldItemsList()
    {
        return $this->notSoldItemsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfNotsolditemstruct $notSoldItemsList
     * @return Allegro_Web_Api_DoGetMyNotSoldItemsResponse
     */
    public function setNotSoldItemsList($notSoldItemsList)
    {
        $this->notSoldItemsList = $notSoldItemsList;
        return $this;
    }
}
