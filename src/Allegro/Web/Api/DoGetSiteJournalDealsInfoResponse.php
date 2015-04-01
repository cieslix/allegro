<?php

/**
 * Class Allegro_Web_Api_DoGetSiteJournalDealsInfoResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSiteJournalDealsInfoResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_SiteJournalDealsInfoStruct $siteJournalDealsInfo
     */
    protected $siteJournalDealsInfo = null;

    /**
     * @param Allegro_Web_Api_SiteJournalDealsInfoStruct $siteJournalDealsInfo
     */
    public function __construct($siteJournalDealsInfo)
    {
        $this->siteJournalDealsInfo = $siteJournalDealsInfo;
    }

    /**
     * @return Allegro_Web_Api_SiteJournalDealsInfoStruct
     */
    public function getSiteJournalDealsInfo()
    {
        return $this->siteJournalDealsInfo;
    }

    /**
     * @param Allegro_Web_Api_SiteJournalDealsInfoStruct $siteJournalDealsInfo
     * @return Allegro_Web_Api_DoGetSiteJournalDealsInfoResponse
     */
    public function setSiteJournalDealsInfo($siteJournalDealsInfo)
    {
        $this->siteJournalDealsInfo = $siteJournalDealsInfo;
        return $this;
    }
}
