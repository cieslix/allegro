<?php

/**
 * Class Allegro_Web_Api_MyContactList
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_MyContactList extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $contactUserId
     */
    protected $contactUserId = null;

    /**
     * @var string $contactNick
     */
    protected $contactNick = null;

    /**
     * @var string $contactFirstName
     */
    protected $contactFirstName = null;

    /**
     * @var string $contactLastName
     */
    protected $contactLastName = null;

    /**
     * @var string $contactCompany
     */
    protected $contactCompany = null;

    /**
     * @var string $contactEmail
     */
    protected $contactEmail = null;

    /**
     * @var string $contactStreet
     */
    protected $contactStreet = null;

    /**
     * @var string $contactPostcode
     */
    protected $contactPostcode = null;

    /**
     * @var string $contactCity
     */
    protected $contactCity = null;

    /**
     * @var string $contactCountry
     */
    protected $contactCountry = null;

    /**
     * @var string $contactPhone
     */
    protected $contactPhone = null;

    /**
     * @var string $contactPhone2
     */
    protected $contactPhone2 = null;

    /**
     * @var string $contactRating
     */
    protected $contactRating = null;

    /**
     * @var string $contactBlocked
     */
    protected $contactBlocked = null;

    /**
     * @param int $contactUserId
     * @param string $contactNick
     * @param string $contactFirstName
     * @param string $contactLastName
     * @param string $contactCompany
     * @param string $contactEmail
     * @param string $contactStreet
     * @param string $contactPostcode
     * @param string $contactCity
     * @param string $contactCountry
     * @param string $contactPhone
     * @param string $contactPhone2
     * @param string $contactRating
     * @param string $contactBlocked
     */
    public function __construct($contactUserId, $contactNick, $contactFirstName, $contactLastName, $contactCompany, $contactEmail, $contactStreet, $contactPostcode, $contactCity, $contactCountry, $contactPhone, $contactPhone2, $contactRating, $contactBlocked)
    {
        $this->contactUserId = $contactUserId;
        $this->contactNick = $contactNick;
        $this->contactFirstName = $contactFirstName;
        $this->contactLastName = $contactLastName;
        $this->contactCompany = $contactCompany;
        $this->contactEmail = $contactEmail;
        $this->contactStreet = $contactStreet;
        $this->contactPostcode = $contactPostcode;
        $this->contactCity = $contactCity;
        $this->contactCountry = $contactCountry;
        $this->contactPhone = $contactPhone;
        $this->contactPhone2 = $contactPhone2;
        $this->contactRating = $contactRating;
        $this->contactBlocked = $contactBlocked;
    }

    /**
     * @return int
     */
    public function getContactUserId()
    {
        return $this->contactUserId;
    }

    /**
     * @param int $contactUserId
     * @return Allegro_Web_Api_MyContactList
     */
    public function setContactUserId($contactUserId)
    {
        $this->contactUserId = $contactUserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactNick()
    {
        return $this->contactNick;
    }

    /**
     * @param string $contactNick
     * @return Allegro_Web_Api_MyContactList
     */
    public function setContactNick($contactNick)
    {
        $this->contactNick = $contactNick;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactFirstName()
    {
        return $this->contactFirstName;
    }

    /**
     * @param string $contactFirstName
     * @return Allegro_Web_Api_MyContactList
     */
    public function setContactFirstName($contactFirstName)
    {
        $this->contactFirstName = $contactFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactLastName()
    {
        return $this->contactLastName;
    }

    /**
     * @param string $contactLastName
     * @return Allegro_Web_Api_MyContactList
     */
    public function setContactLastName($contactLastName)
    {
        $this->contactLastName = $contactLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactCompany()
    {
        return $this->contactCompany;
    }

    /**
     * @param string $contactCompany
     * @return Allegro_Web_Api_MyContactList
     */
    public function setContactCompany($contactCompany)
    {
        $this->contactCompany = $contactCompany;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @param string $contactEmail
     * @return Allegro_Web_Api_MyContactList
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactStreet()
    {
        return $this->contactStreet;
    }

    /**
     * @param string $contactStreet
     * @return Allegro_Web_Api_MyContactList
     */
    public function setContactStreet($contactStreet)
    {
        $this->contactStreet = $contactStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPostcode()
    {
        return $this->contactPostcode;
    }

    /**
     * @param string $contactPostcode
     * @return Allegro_Web_Api_MyContactList
     */
    public function setContactPostcode($contactPostcode)
    {
        $this->contactPostcode = $contactPostcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactCity()
    {
        return $this->contactCity;
    }

    /**
     * @param string $contactCity
     * @return Allegro_Web_Api_MyContactList
     */
    public function setContactCity($contactCity)
    {
        $this->contactCity = $contactCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactCountry()
    {
        return $this->contactCountry;
    }

    /**
     * @param string $contactCountry
     * @return Allegro_Web_Api_MyContactList
     */
    public function setContactCountry($contactCountry)
    {
        $this->contactCountry = $contactCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * @param string $contactPhone
     * @return Allegro_Web_Api_MyContactList
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPhone2()
    {
        return $this->contactPhone2;
    }

    /**
     * @param string $contactPhone2
     * @return Allegro_Web_Api_MyContactList
     */
    public function setContactPhone2($contactPhone2)
    {
        $this->contactPhone2 = $contactPhone2;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactRating()
    {
        return $this->contactRating;
    }

    /**
     * @param string $contactRating
     * @return Allegro_Web_Api_MyContactList
     */
    public function setContactRating($contactRating)
    {
        $this->contactRating = $contactRating;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactBlocked()
    {
        return $this->contactBlocked;
    }

    /**
     * @param string $contactBlocked
     * @return Allegro_Web_Api_MyContactList
     */
    public function setContactBlocked($contactBlocked)
    {
        $this->contactBlocked = $contactBlocked;
        return $this;
    }
}
