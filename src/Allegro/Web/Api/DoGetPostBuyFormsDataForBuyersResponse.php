<?php

/**
 * Class Allegro_Web_Api_DoGetPostBuyFormsDataForBuyersResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetPostBuyFormsDataForBuyersResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfPostbuyformforbuyersdatastruct $postBuyFormDataForBuyers
     */
    protected $postBuyFormDataForBuyers = null;

    /**
     * @param Allegro_Web_Api_ArrayOfPostbuyformforbuyersdatastruct $postBuyFormDataForBuyers
     */
    public function __construct($postBuyFormDataForBuyers)
    {
        $this->postBuyFormDataForBuyers = $postBuyFormDataForBuyers;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPostbuyformforbuyersdatastruct
     */
    public function getPostBuyFormDataForBuyers()
    {
        return $this->postBuyFormDataForBuyers;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPostbuyformforbuyersdatastruct $postBuyFormDataForBuyers
     * @return Allegro_Web_Api_DoGetPostBuyFormsDataForBuyersResponse
     */
    public function setPostBuyFormDataForBuyers($postBuyFormDataForBuyers)
    {
        $this->postBuyFormDataForBuyers = $postBuyFormDataForBuyers;
        return $this;
    }
}
