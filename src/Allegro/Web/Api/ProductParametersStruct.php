<?php

/**
 * Class Allegro_Web_Api_ProductParametersStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ProductParametersStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $productParameterName
     */
    protected $productParameterName = null;

    /**
     * @var Allegro_Web_Api_ArrayOfString $productParameterValues
     */
    protected $productParameterValues = null;

    /**
     * @var string $productParameterDescription
     */
    protected $productParameterDescription = null;

    /**
     * @param string $productParameterName
     * @param Allegro_Web_Api_ArrayOfString $productParameterValues
     * @param string $productParameterDescription
     */
    public function __construct($productParameterName, $productParameterValues, $productParameterDescription)
    {
        $this->productParameterName = $productParameterName;
        $this->productParameterValues = $productParameterValues;
        $this->productParameterDescription = $productParameterDescription;
    }

    /**
     * @return string
     */
    public function getProductParameterName()
    {
        return $this->productParameterName;
    }

    /**
     * @param string $productParameterName
     * @return Allegro_Web_Api_ProductParametersStruct
     */
    public function setProductParameterName($productParameterName)
    {
        $this->productParameterName = $productParameterName;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getProductParameterValues()
    {
        return $this->productParameterValues;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $productParameterValues
     * @return Allegro_Web_Api_ProductParametersStruct
     */
    public function setProductParameterValues($productParameterValues)
    {
        $this->productParameterValues = $productParameterValues;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductParameterDescription()
    {
        return $this->productParameterDescription;
    }

    /**
     * @param string $productParameterDescription
     * @return Allegro_Web_Api_ProductParametersStruct
     */
    public function setProductParameterDescription($productParameterDescription)
    {
        $this->productParameterDescription = $productParameterDescription;
        return $this;
    }
}
