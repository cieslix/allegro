<?php

/**
 * Class Allegro_Web_Api_DoGetSellFormFieldsForCategoryResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSellFormFieldsForCategoryResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_SellFormFieldsForCategoryStruct $sellFormFieldsForCategory
     */
    protected $sellFormFieldsForCategory = null;

    /**
     * @param Allegro_Web_Api_SellFormFieldsForCategoryStruct $sellFormFieldsForCategory
     */
    public function __construct($sellFormFieldsForCategory)
    {
        $this->sellFormFieldsForCategory = $sellFormFieldsForCategory;
    }

    /**
     * @return Allegro_Web_Api_SellFormFieldsForCategoryStruct
     */
    public function getSellFormFieldsForCategory()
    {
        return $this->sellFormFieldsForCategory;
    }

    /**
     * @param Allegro_Web_Api_SellFormFieldsForCategoryStruct $sellFormFieldsForCategory
     * @return Allegro_Web_Api_DoGetSellFormFieldsForCategoryResponse
     */
    public function setSellFormFieldsForCategory($sellFormFieldsForCategory)
    {
        $this->sellFormFieldsForCategory = $sellFormFieldsForCategory;
        return $this;
    }
}
