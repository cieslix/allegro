<?php

/**
 * Class Allegro_Web_Api_ProductParametersGroupStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ProductParametersGroupStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $productParametersGroupName
     */
    protected $productParametersGroupName = null;

    /**
     * @var Allegro_Web_Api_ArrayOfProductparametersstruct $productParametersList
     */
    protected $productParametersList = null;

    /**
     * @param string                                         $productParametersGroupName
     * @param Allegro_Web_Api_ArrayOfProductparametersstruct $productParametersList
     */
    public function __construct($productParametersGroupName, $productParametersList)
    {
        $this->productParametersGroupName = $productParametersGroupName;
        $this->productParametersList      = $productParametersList;
    }

    /**
     * @return string
     */
    public function getProductParametersGroupName()
    {
        return $this->productParametersGroupName;
    }

    /**
     * @param string $productParametersGroupName
     * @return Allegro_Web_Api_ProductParametersGroupStruct
     */
    public function setProductParametersGroupName($productParametersGroupName)
    {
        $this->productParametersGroupName = $productParametersGroupName;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfProductparametersstruct
     */
    public function getProductParametersList()
    {
        return $this->productParametersList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfProductparametersstruct $productParametersList
     * @return Allegro_Web_Api_ProductParametersGroupStruct
     */
    public function setProductParametersList($productParametersList)
    {
        $this->productParametersList = $productParametersList;
        return $this;
    }
}
