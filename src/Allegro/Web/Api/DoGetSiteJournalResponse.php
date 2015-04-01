<?php

/**
 * Class Allegro_Web_Api_DoGetSiteJournalResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSiteJournalResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfSitejournal $siteJournalArray
     */
    protected $siteJournalArray = null;

    /**
     * @param Allegro_Web_Api_ArrayOfSitejournal $siteJournalArray
     */
    public function __construct($siteJournalArray)
    {
        $this->siteJournalArray = $siteJournalArray;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSitejournal
     */
    public function getSiteJournalArray()
    {
        return $this->siteJournalArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSitejournal $siteJournalArray
     * @return Allegro_Web_Api_DoGetSiteJournalResponse
     */
    public function setSiteJournalArray($siteJournalArray)
    {
        $this->siteJournalArray = $siteJournalArray;
        return $this;
    }
}
