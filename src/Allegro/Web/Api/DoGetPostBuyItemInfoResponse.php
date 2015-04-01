<?php

/**
 * Class Allegro_Web_Api_DoGetPostBuyItemInfoResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetPostBuyItemInfoResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfPostbuyiteminfostruct $itemPostBuyFormInfo
     */
    protected $itemPostBuyFormInfo = null;

    /**
     * @param Allegro_Web_Api_ArrayOfPostbuyiteminfostruct $itemPostBuyFormInfo
     */
    public function __construct($itemPostBuyFormInfo)
    {
        $this->itemPostBuyFormInfo = $itemPostBuyFormInfo;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPostbuyiteminfostruct
     */
    public function getItemPostBuyFormInfo()
    {
        return $this->itemPostBuyFormInfo;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPostbuyiteminfostruct $itemPostBuyFormInfo
     * @return Allegro_Web_Api_DoGetPostBuyItemInfoResponse
     */
    public function setItemPostBuyFormInfo($itemPostBuyFormInfo)
    {
        $this->itemPostBuyFormInfo = $itemPostBuyFormInfo;
        return $this;
    }
}
