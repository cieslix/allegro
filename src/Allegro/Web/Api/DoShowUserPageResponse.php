<?php

/**
 * Class Allegro_Web_Api_DoShowUserPageResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoShowUserPageResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $userPageContent
     */
    protected $userPageContent = null;

    /**
     * @var string $userPagePharmacyPermit
     */
    protected $userPagePharmacyPermit = null;

    /**
     * @var string $userPageAlcoholPermit
     */
    protected $userPageAlcoholPermit = null;

    /**
     * @param string $userPageContent
     * @param string $userPagePharmacyPermit
     * @param string $userPageAlcoholPermit
     */
    public function __construct($userPageContent, $userPagePharmacyPermit, $userPageAlcoholPermit)
    {
        $this->userPageContent        = $userPageContent;
        $this->userPagePharmacyPermit = $userPagePharmacyPermit;
        $this->userPageAlcoholPermit  = $userPageAlcoholPermit;
    }

    /**
     * @return string
     */
    public function getUserPageContent()
    {
        return $this->userPageContent;
    }

    /**
     * @param string $userPageContent
     * @return Allegro_Web_Api_DoShowUserPageResponse
     */
    public function setUserPageContent($userPageContent)
    {
        $this->userPageContent = $userPageContent;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserPagePharmacyPermit()
    {
        return $this->userPagePharmacyPermit;
    }

    /**
     * @param string $userPagePharmacyPermit
     * @return Allegro_Web_Api_DoShowUserPageResponse
     */
    public function setUserPagePharmacyPermit($userPagePharmacyPermit)
    {
        $this->userPagePharmacyPermit = $userPagePharmacyPermit;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserPageAlcoholPermit()
    {
        return $this->userPageAlcoholPermit;
    }

    /**
     * @param string $userPageAlcoholPermit
     * @return Allegro_Web_Api_DoShowUserPageResponse
     */
    public function setUserPageAlcoholPermit($userPageAlcoholPermit)
    {
        $this->userPageAlcoholPermit = $userPageAlcoholPermit;
        return $this;
    }
}
