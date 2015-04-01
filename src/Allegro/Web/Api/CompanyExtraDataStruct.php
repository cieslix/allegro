<?php

/**
 * Class Allegro_Web_Api_CompanyExtraDataStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_CompanyExtraDataStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $companyType
     */
    protected $companyType = null;

    /**
     * @var string $companyNip
     */
    protected $companyNip = null;

    /**
     * @var string $companyRegon
     */
    protected $companyRegon = null;

    /**
     * @var string $companyKrs
     */
    protected $companyKrs = null;

    /**
     * @var string $companyActivitySort
     */
    protected $companyActivitySort = null;

    /**
     * @param string $companyType
     * @param string $companyNip
     * @param string $companyRegon
     * @param string $companyKrs
     * @param string $companyActivitySort
     */
    public function __construct($companyType, $companyNip, $companyRegon, $companyKrs, $companyActivitySort)
    {
        $this->companyType = $companyType;
        $this->companyNip = $companyNip;
        $this->companyRegon = $companyRegon;
        $this->companyKrs = $companyKrs;
        $this->companyActivitySort = $companyActivitySort;
    }

    /**
     * @return string
     */
    public function getCompanyType()
    {
        return $this->companyType;
    }

    /**
     * @param string $companyType
     * @return Allegro_Web_Api_CompanyExtraDataStruct
     */
    public function setCompanyType($companyType)
    {
        $this->companyType = $companyType;
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
     * @return Allegro_Web_Api_CompanyExtraDataStruct
     */
    public function setCompanyNip($companyNip)
    {
        $this->companyNip = $companyNip;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyRegon()
    {
        return $this->companyRegon;
    }

    /**
     * @param string $companyRegon
     * @return Allegro_Web_Api_CompanyExtraDataStruct
     */
    public function setCompanyRegon($companyRegon)
    {
        $this->companyRegon = $companyRegon;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyKrs()
    {
        return $this->companyKrs;
    }

    /**
     * @param string $companyKrs
     * @return Allegro_Web_Api_CompanyExtraDataStruct
     */
    public function setCompanyKrs($companyKrs)
    {
        $this->companyKrs = $companyKrs;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyActivitySort()
    {
        return $this->companyActivitySort;
    }

    /**
     * @param string $companyActivitySort
     * @return Allegro_Web_Api_CompanyExtraDataStruct
     */
    public function setCompanyActivitySort($companyActivitySort)
    {
        $this->companyActivitySort = $companyActivitySort;
        return $this;
    }
}
