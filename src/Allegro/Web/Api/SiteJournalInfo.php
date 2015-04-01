<?php

/**
 * Class Allegro_Web_Api_SiteJournalInfo
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SiteJournalInfo extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemsNumber
     */
    protected $itemsNumber = null;

    /**
     * @var int $lastItemDate
     */
    protected $lastItemDate = null;

    /**
     * @param int $itemsNumber
     * @param int $lastItemDate
     */
    public function __construct($itemsNumber, $lastItemDate)
    {
        $this->itemsNumber = $itemsNumber;
        $this->lastItemDate = $lastItemDate;
    }

    /**
     * @return int
     */
    public function getItemsNumber()
    {
        return $this->itemsNumber;
    }

    /**
     * @param int $itemsNumber
     * @return Allegro_Web_Api_SiteJournalInfo
     */
    public function setItemsNumber($itemsNumber)
    {
        $this->itemsNumber = $itemsNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastItemDate()
    {
        return $this->lastItemDate;
    }

    /**
     * @param int $lastItemDate
     * @return Allegro_Web_Api_SiteJournalInfo
     */
    public function setLastItemDate($lastItemDate)
    {
        $this->lastItemDate = $lastItemDate;
        return $this;
    }
}
