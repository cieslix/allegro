<?php

class Allegro_Web_Api_DoGetSiteJournalDealsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfSitejournaldealsstruct $siteJournalDeals
     */
    protected $siteJournalDeals = null;

    /**
     * @param Allegro_Web_Api_ArrayOfSitejournaldealsstruct $siteJournalDeals
     */
    public function __construct($siteJournalDeals)
    {
        $this->siteJournalDeals = $siteJournalDeals;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSitejournaldealsstruct
     */
    public function getSiteJournalDeals()
    {
        return $this->siteJournalDeals;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSitejournaldealsstruct $siteJournalDeals
     * @return Allegro_Web_Api_DoGetSiteJournalDealsResponse
     */
    public function setSiteJournalDeals($siteJournalDeals)
    {
        $this->siteJournalDeals = $siteJournalDeals;
        return $this;
    }
}
