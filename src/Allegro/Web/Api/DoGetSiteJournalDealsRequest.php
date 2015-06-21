<?php

/**
 * Class Allegro_Web_Api_DoGetSiteJournalDealsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSiteJournalDealsRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $journalStart
     */
    protected $journalStart = null;

    /**
     * @param string $sessionId
     * @param int    $journalStart
     */
    public function __construct($sessionId, $journalStart)
    {
        $this->sessionId    = $sessionId;
        $this->journalStart = $journalStart;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return Allegro_Web_Api_DoGetSiteJournalDealsRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getJournalStart()
    {
        return $this->journalStart;
    }

    /**
     * @param int $journalStart
     * @return Allegro_Web_Api_DoGetSiteJournalDealsRequest
     */
    public function setJournalStart($journalStart)
    {
        $this->journalStart = $journalStart;
        return $this;
    }
}
