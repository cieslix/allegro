<?php

/**
 * Class Allegro_Web_Api_CategoryTreeType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_CategoryTreeType extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $categoryId
     */
    protected $categoryId = null;

    /**
     * @var string $categoryName
     */
    protected $categoryName = null;

    /**
     * @var int $categoryParentId
     */
    protected $categoryParentId = null;

    /**
     * @var int $categoryItemsCount
     */
    protected $categoryItemsCount = null;

    /**
     * @param int $categoryId
     * @param string $categoryName
     * @param int $categoryParentId
     * @param int $categoryItemsCount
     */
    public function __construct($categoryId, $categoryName, $categoryParentId, $categoryItemsCount)
    {
        $this->categoryId = $categoryId;
        $this->categoryName = $categoryName;
        $this->categoryParentId = $categoryParentId;
        $this->categoryItemsCount = $categoryItemsCount;
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
     * @return Allegro_Web_Api_CategoryTreeType
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return Allegro_Web_Api_CategoryTreeType
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryParentId()
    {
        return $this->categoryParentId;
    }

    /**
     * @param int $categoryParentId
     * @return Allegro_Web_Api_CategoryTreeType
     */
    public function setCategoryParentId($categoryParentId)
    {
        $this->categoryParentId = $categoryParentId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryItemsCount()
    {
        return $this->categoryItemsCount;
    }

    /**
     * @param int $categoryItemsCount
     * @return Allegro_Web_Api_CategoryTreeType
     */
    public function setCategoryItemsCount($categoryItemsCount)
    {
        $this->categoryItemsCount = $categoryItemsCount;
        return $this;
    }
}
