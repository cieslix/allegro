<?php

/**
 * Class Allegro_Web_Api_InvoiceDataStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_InvoiceDataStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $companyName
     */
    protected $companyName = null;

    /**
     * @var string $companyNip
     */
    protected $companyNip = null;

    /**
     * @param string $companyName
     * @param string $companyNip
     */
    public function __construct($companyName, $companyNip)
    {
        $this->companyName = $companyName;
        $this->companyNip  = $companyNip;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return Allegro_Web_Api_InvoiceDataStruct
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyNip()
    {
        return $this->companyNip;
    }

    /**
     * @param string $companyNip
     * @return Allegro_Web_Api_InvoiceDataStruct
     */
    public function setCompanyNip($companyNip)
    {
        $this->companyNip = $companyNip;
        return $this;
    }
}
