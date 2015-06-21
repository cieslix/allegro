<?php

/**
 * Class Allegro_Web_Api_SellFormFieldsForCategoryStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SellFormFieldsForCategoryStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfSellformtype $sellFormFieldsList
     */
    protected $sellFormFieldsList = null;

    /**
     * @var int $sellFormFieldsVersionKey
     */
    protected $sellFormFieldsVersionKey = null;

    /**
     * @var string $sellFormFieldsComponentValue
     */
    protected $sellFormFieldsComponentValue = null;

    /**
     * @param Allegro_Web_Api_ArrayOfSellformtype $sellFormFieldsList
     * @param int                                 $sellFormFieldsVersionKey
     * @param string                              $sellFormFieldsComponentValue
     */
    public function __construct($sellFormFieldsList, $sellFormFieldsVersionKey, $sellFormFieldsComponentValue)
    {
        $this->sellFormFieldsList           = $sellFormFieldsList;
        $this->sellFormFieldsVersionKey     = $sellFormFieldsVersionKey;
        $this->sellFormFieldsComponentValue = $sellFormFieldsComponentValue;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSellformtype
     */
    public function getSellFormFieldsList()
    {
        return $this->sellFormFieldsList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSellformtype $sellFormFieldsList
     * @return Allegro_Web_Api_SellFormFieldsForCategoryStruct
     */
    public function setSellFormFieldsList($sellFormFieldsList)
    {
        $this->sellFormFieldsList = $sellFormFieldsList;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellFormFieldsVersionKey()
    {
        return $this->sellFormFieldsVersionKey;
    }

    /**
     * @param int $sellFormFieldsVersionKey
     * @return Allegro_Web_Api_SellFormFieldsForCategoryStruct
     */
    public function setSellFormFieldsVersionKey($sellFormFieldsVersionKey)
    {
        $this->sellFormFieldsVersionKey = $sellFormFieldsVersionKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellFormFieldsComponentValue()
    {
        return $this->sellFormFieldsComponentValue;
    }

    /**
     * @param string $sellFormFieldsComponentValue
     * @return Allegro_Web_Api_SellFormFieldsForCategoryStruct
     */
    public function setSellFormFieldsComponentValue($sellFormFieldsComponentValue)
    {
        $this->sellFormFieldsComponentValue = $sellFormFieldsComponentValue;
        return $this;
    }
}
