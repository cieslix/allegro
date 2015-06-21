<?php

/**
 * Class Allegro_Web_Api_DoGetMyNotWonItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyNotWonItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $notWonItemsCounter
     */
    protected $notWonItemsCounter = null;

    /**
     * @var Allegro_Web_Api_ArrayOfNotwonitemstruct $notWonItemsList
     */
    protected $notWonItemsList = null;

    /**
     * @param int                                     $notWonItemsCounter
     * @param Allegro_Web_Api_ArrayOfNotwonitemstruct $notWonItemsList
     */
    public function __construct($notWonItemsCounter, $notWonItemsList)
    {
        $this->notWonItemsCounter = $notWonItemsCounter;
        $this->notWonItemsList    = $notWonItemsList;
    }

    /**
     * @return int
     */
    public function getNotWonItemsCounter()
    {
        return $this->notWonItemsCounter;
    }

    /**
     * @param int $notWonItemsCounter
     * @return Allegro_Web_Api_DoGetMyNotWonItemsResponse
     */
    public function setNotWonItemsCounter($notWonItemsCounter)
    {
        $this->notWonItemsCounter = $notWonItemsCounter;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfNotwonitemstruct
     */
    public function getNotWonItemsList()
    {
        return $this->notWonItemsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfNotwonitemstruct $notWonItemsList
     * @return Allegro_Web_Api_DoGetMyNotWonItemsResponse
     */
    public function setNotWonItemsList($notWonItemsList)
    {
        $this->notWonItemsList = $notWonItemsList;
        return $this;
    }
}
