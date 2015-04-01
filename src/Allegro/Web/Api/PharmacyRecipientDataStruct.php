<?php

/**
 * Class Allegro_Web_Api_PharmacyRecipientDataStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PharmacyRecipientDataStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $recipientFirstName
     */
    protected $recipientFirstName = null;

    /**
     * @var string $recipientLastName
     */
    protected $recipientLastName = null;

    /**
     * @var string $recipientAddress
     */
    protected $recipientAddress = null;

    /**
     * @var string $recipientPostcode
     */
    protected $recipientPostcode = null;

    /**
     * @var string $recipientCity
     */
    protected $recipientCity = null;

    /**
     * @param string $recipientFirstName
     * @param string $recipientLastName
     * @param string $recipientAddress
     * @param string $recipientPostcode
     * @param string $recipientCity
     */
    public function __construct($recipientFirstName, $recipientLastName, $recipientAddress, $recipientPostcode, $recipientCity)
    {
        $this->recipientFirstName = $recipientFirstName;
        $this->recipientLastName = $recipientLastName;
        $this->recipientAddress = $recipientAddress;
        $this->recipientPostcode = $recipientPostcode;
        $this->recipientCity = $recipientCity;
    }

    /**
     * @return string
     */
    public function getRecipientFirstName()
    {
        return $this->recipientFirstName;
    }

    /**
     * @param string $recipientFirstName
     * @return Allegro_Web_Api_PharmacyRecipientDataStruct
     */
    public function setRecipientFirstName($recipientFirstName)
    {
        $this->recipientFirstName = $recipientFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientLastName()
    {
        return $this->recipientLastName;
    }

    /**
     * @param string $recipientLastName
     * @return Allegro_Web_Api_PharmacyRecipientDataStruct
     */
    public function setRecipientLastName($recipientLastName)
    {
        $this->recipientLastName = $recipientLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientAddress()
    {
        return $this->recipientAddress;
    }

    /**
     * @param string $recipientAddress
     * @return Allegro_Web_Api_PharmacyRecipientDataStruct
     */
    public function setRecipientAddress($recipientAddress)
    {
        $this->recipientAddress = $recipientAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientPostcode()
    {
        return $this->recipientPostcode;
    }

    /**
     * @param string $recipientPostcode
     * @return Allegro_Web_Api_PharmacyRecipientDataStruct
     */
    public function setRecipientPostcode($recipientPostcode)
    {
        $this->recipientPostcode = $recipientPostcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientCity()
    {
        return $this->recipientCity;
    }

    /**
     * @param string $recipientCity
     * @return Allegro_Web_Api_PharmacyRecipientDataStruct
     */
    public function setRecipientCity($recipientCity)
    {
        $this->recipientCity = $recipientCity;
        return $this;
    }
}
