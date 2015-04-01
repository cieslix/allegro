<?php

/**
 * Class Allegro_Web_Api_ProductStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ProductStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $productId
     */
    protected $productId = null;

    /**
     * @var string $productName
     */
    protected $productName = null;

    /**
     * @var string $productDescription
     */
    protected $productDescription = null;

    /**
     * @var Allegro_Web_Api_ArrayOfString $productImagesList
     */
    protected $productImagesList = null;

    /**
     * @var Allegro_Web_Api_ArrayOfProductparametersgroupstruct $productParametersGroupList
     */
    protected $productParametersGroupList = null;

    /**
     * @param int $productId
     * @param string $productName
     * @param string $productDescription
     * @param Allegro_Web_Api_ArrayOfString $productImagesList
     * @param Allegro_Web_Api_ArrayOfProductparametersgroupstruct $productParametersGroupList
     */
    public function __construct($productId, $productName, $productDescription, $productImagesList, $productParametersGroupList)
    {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->productDescription = $productDescription;
        $this->productImagesList = $productImagesList;
        $this->productParametersGroupList = $productParametersGroupList;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return Allegro_Web_Api_ProductStruct
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     * @return Allegro_Web_Api_ProductStruct
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * @param string $productDescription
     * @return Allegro_Web_Api_ProductStruct
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getProductImagesList()
    {
        return $this->productImagesList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $productImagesList
     * @return Allegro_Web_Api_ProductStruct
     */
    public function setProductImagesList($productImagesList)
    {
        $this->productImagesList = $productImagesList;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfProductparametersgroupstruct
     */
    public function getProductParametersGroupList()
    {
        return $this->productParametersGroupList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfProductparametersgroupstruct $productParametersGroupList
     * @return Allegro_Web_Api_ProductStruct
     */
    public function setProductParametersGroupList($productParametersGroupList)
    {
        $this->productParametersGroupList = $productParametersGroupList;
        return $this;
    }
}
