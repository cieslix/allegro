<?php

/**
 * Class Allegro_Web_Api_SiteJournalDealsInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SiteJournalDealsInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $dealEventsCount
     */
    protected $dealEventsCount = null;

    /**
     * @var int $dealLastEventTime
     */
    protected $dealLastEventTime = null;

    /**
     * @param int $dealEventsCount
     * @param int $dealLastEventTime
     */
    public function __construct($dealEventsCount, $dealLastEventTime)
    {
        $this->dealEventsCount   = $dealEventsCount;
        $this->dealLastEventTime = $dealLastEventTime;
    }

    /**
     * @return int
     */
    public function getDealEventsCount()
    {
        return $this->dealEventsCount;
    }

    /**
     * @param int $dealEventsCount
     * @return Allegro_Web_Api_SiteJournalDealsInfoStruct
     */
    public function setDealEventsCount($dealEventsCount)
    {
        $this->dealEventsCount = $dealEventsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getDealLastEventTime()
    {
        return $this->dealLastEventTime;
    }

    /**
     * @param int $dealLastEventTime
     * @return Allegro_Web_Api_SiteJournalDealsInfoStruct
     */
    public function setDealLastEventTime($dealLastEventTime)
    {
        $this->dealLastEventTime = $dealLastEventTime;
        return $this;
    }
}
