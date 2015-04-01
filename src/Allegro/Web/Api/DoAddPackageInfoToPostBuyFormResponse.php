<?php

/**
 * Class Allegro_Web_Api_DoAddPackageInfoToPostBuyFormResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoAddPackageInfoToPostBuyFormResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_PostBuyFormPackageInfoStruct $postBuyFormPackageInfo
     */
    protected $postBuyFormPackageInfo = null;

    /**
     * @param Allegro_Web_Api_PostBuyFormPackageInfoStruct $postBuyFormPackageInfo
     */
    public function __construct($postBuyFormPackageInfo)
    {
        $this->postBuyFormPackageInfo = $postBuyFormPackageInfo;
    }

    /**
     * @return Allegro_Web_Api_PostBuyFormPackageInfoStruct
     */
    public function getPostBuyFormPackageInfo()
    {
        return $this->postBuyFormPackageInfo;
    }

    /**
     * @param Allegro_Web_Api_PostBuyFormPackageInfoStruct $postBuyFormPackageInfo
     * @return Allegro_Web_Api_DoAddPackageInfoToPostBuyFormResponse
     */
    public function setPostBuyFormPackageInfo($postBuyFormPackageInfo)
    {
        $this->postBuyFormPackageInfo = $postBuyFormPackageInfo;
        return $this;
    }
}
