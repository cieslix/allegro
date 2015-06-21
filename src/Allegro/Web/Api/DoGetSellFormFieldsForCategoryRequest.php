<?php

/**
 * Class Allegro_Web_Api_DoGetSellFormFieldsForCategoryRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSellFormFieldsForCategoryRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var int $categoryId
     */
    protected $categoryId = null;

    /**
     * @param string $webapiKey
     * @param int    $countryId
     * @param int    $categoryId
     */
    public function __construct($webapiKey, $countryId, $categoryId)
    {
        $this->webapiKey  = $webapiKey;
        $this->countryId  = $countryId;
        $this->categoryId = $categoryId;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
        return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return Allegro_Web_Api_DoGetSellFormFieldsForCategoryRequest
     */
    public function setWebapiKey($webapiKey)
    {
        $this->webapiKey = $webapiKey;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return Allegro_Web_Api_DoGetSellFormFieldsForCategoryRequest
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return Allegro_Web_Api_DoGetSellFormFieldsForCategoryRequest
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }
}
