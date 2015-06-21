<?php

/**
 * Class Allegro_Web_Api_DoSearchResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSearchResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $searchCount
     */
    protected $searchCount = null;

    /**
     * @var int $searchCountFeatured
     */
    protected $searchCountFeatured = null;

    /**
     * @var Allegro_Web_Api_ArrayOfSearchresponsetype $searchArray
     */
    protected $searchArray = null;

    /**
     * @var Allegro_Web_Api_ArrayOfString $searchExcludedWords
     */
    protected $searchExcludedWords = null;

    /**
     * @var Allegro_Web_Api_ArrayOfCategoriesstruct $searchCategories
     */
    protected $searchCategories = null;

    /**
     * @param int                                       $searchCount
     * @param int                                       $searchCountFeatured
     * @param Allegro_Web_Api_ArrayOfSearchresponsetype $searchArray
     * @param Allegro_Web_Api_ArrayOfString             $searchExcludedWords
     * @param Allegro_Web_Api_ArrayOfCategoriesstruct   $searchCategories
     */
    public function __construct($searchCount, $searchCountFeatured, $searchArray, $searchExcludedWords, $searchCategories)
    {
        $this->searchCount         = $searchCount;
        $this->searchCountFeatured = $searchCountFeatured;
        $this->searchArray         = $searchArray;
        $this->searchExcludedWords = $searchExcludedWords;
        $this->searchCategories    = $searchCategories;
    }

    /**
     * @return int
     */
    public function getSearchCount()
    {
        return $this->searchCount;
    }

    /**
     * @param int $searchCount
     * @return Allegro_Web_Api_DoSearchResponse
     */
    public function setSearchCount($searchCount)
    {
        $this->searchCount = $searchCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getSearchCountFeatured()
    {
        return $this->searchCountFeatured;
    }

    /**
     * @param int $searchCountFeatured
     * @return Allegro_Web_Api_DoSearchResponse
     */
    public function setSearchCountFeatured($searchCountFeatured)
    {
        $this->searchCountFeatured = $searchCountFeatured;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSearchresponsetype
     */
    public function getSearchArray()
    {
        return $this->searchArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSearchresponsetype $searchArray
     * @return Allegro_Web_Api_DoSearchResponse
     */
    public function setSearchArray($searchArray)
    {
        $this->searchArray = $searchArray;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getSearchExcludedWords()
    {
        return $this->searchExcludedWords;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $searchExcludedWords
     * @return Allegro_Web_Api_DoSearchResponse
     */
    public function setSearchExcludedWords($searchExcludedWords)
    {
        $this->searchExcludedWords = $searchExcludedWords;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfCategoriesstruct
     */
    public function getSearchCategories()
    {
        return $this->searchCategories;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfCategoriesstruct $searchCategories
     * @return Allegro_Web_Api_DoSearchResponse
     */
    public function setSearchCategories($searchCategories)
    {
        $this->searchCategories = $searchCategories;
        return $this;
    }
}
