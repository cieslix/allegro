<?php

/**
 * Class Allegro_Web_Api_DoGetCategoryPathResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetCategoryPathResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfCategorydata $categoryPath
     */
    protected $categoryPath = null;

    /**
     * @param Allegro_Web_Api_ArrayOfCategorydata $categoryPath
     */
    public function __construct($categoryPath)
    {
        $this->categoryPath = $categoryPath;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfCategorydata
     */
    public function getCategoryPath()
    {
        return $this->categoryPath;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfCategorydata $categoryPath
     * @return Allegro_Web_Api_DoGetCategoryPathResponse
     */
    public function setCategoryPath($categoryPath)
    {
        $this->categoryPath = $categoryPath;
        return $this;
    }
}
