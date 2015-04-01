<?php

/**
 * Class Allegro_Web_Api_DoGetSiteJournalInfoResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSiteJournalInfoResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_SiteJournalInfo $siteJournalInfo
     */
    protected $siteJournalInfo = null;

    /**
     * @param Allegro_Web_Api_SiteJournalInfo $siteJournalInfo
     */
    public function __construct($siteJournalInfo)
    {
        $this->siteJournalInfo = $siteJournalInfo;
    }

    /**
     * @return Allegro_Web_Api_SiteJournalInfo
     */
    public function getSiteJournalInfo()
    {
        return $this->siteJournalInfo;
    }

    /**
     * @param Allegro_Web_Api_SiteJournalInfo $siteJournalInfo
     * @return Allegro_Web_Api_DoGetSiteJournalInfoResponse
     */
    public function setSiteJournalInfo($siteJournalInfo)
    {
        $this->siteJournalInfo = $siteJournalInfo;
        return $this;
    }
}
