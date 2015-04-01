<?php

/**
 * Class Allegro_Web_Api_CategoriesListType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_CategoriesListType extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfCategorytreetype $categoriesTree
     */
    protected $categoriesTree = null;

    /**
     * @var Allegro_Web_Api_ArrayOfCategorypathtype $categoriesPath
     */
    protected $categoriesPath = null;

    /**
     * @param Allegro_Web_Api_ArrayOfCategorytreetype $categoriesTree
     * @param Allegro_Web_Api_ArrayOfCategorypathtype $categoriesPath
     */
    public function __construct($categoriesTree, $categoriesPath)
    {
        $this->categoriesTree = $categoriesTree;
        $this->categoriesPath = $categoriesPath;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfCategorytreetype
     */
    public function getCategoriesTree()
    {
        return $this->categoriesTree;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfCategorytreetype $categoriesTree
     * @return Allegro_Web_Api_CategoriesListType
     */
    public function setCategoriesTree($categoriesTree)
    {
        $this->categoriesTree = $categoriesTree;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfCategorypathtype
     */
    public function getCategoriesPath()
    {
        return $this->categoriesPath;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfCategorypathtype $categoriesPath
     * @return Allegro_Web_Api_CategoriesListType
     */
    public function setCategoriesPath($categoriesPath)
    {
        $this->categoriesPath = $categoriesPath;
        return $this;
    }
}
