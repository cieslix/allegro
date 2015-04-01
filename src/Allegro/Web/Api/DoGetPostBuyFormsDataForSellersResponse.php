<?php

/**
 * Class Allegro_Web_Api_DoGetPostBuyFormsDataForSellersResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetPostBuyFormsDataForSellersResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfPostbuyformdatastruct $postBuyFormData
     */
    protected $postBuyFormData = null;

    /**
     * @param Allegro_Web_Api_ArrayOfPostbuyformdatastruct $postBuyFormData
     */
    public function __construct($postBuyFormData)
    {
        $this->postBuyFormData = $postBuyFormData;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPostbuyformdatastruct
     */
    public function getPostBuyFormData()
    {
        return $this->postBuyFormData;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPostbuyformdatastruct $postBuyFormData
     * @return Allegro_Web_Api_DoGetPostBuyFormsDataForSellersResponse
     */
    public function setPostBuyFormData($postBuyFormData)
    {
        $this->postBuyFormData = $postBuyFormData;
        return $this;
    }
}
