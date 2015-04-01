<?php

/**
 * Class Allegro_Web_Api_SellFormType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SellFormType extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $sellFormId
     */
    protected $sellFormId = null;

    /**
     * @var string $sellFormTitle
     */
    protected $sellFormTitle = null;

    /**
     * @var int $sellFormCat
     */
    protected $sellFormCat = null;

    /**
     * @var int $sellFormType
     */
    protected $sellFormType = null;

    /**
     * @var int $sellFormResType
     */
    protected $sellFormResType = null;

    /**
     * @var int $sellFormDefValue
     */
    protected $sellFormDefValue = null;

    /**
     * @var int $sellFormOpt
     */
    protected $sellFormOpt = null;

    /**
     * @var int $sellFormPos
     */
    protected $sellFormPos = null;

    /**
     * @var int $sellFormLength
     */
    protected $sellFormLength = null;

    /**
     * @var string $sellMinValue
     */
    protected $sellMinValue = null;

    /**
     * @var string $sellMaxValue
     */
    protected $sellMaxValue = null;

    /**
     * @var string $sellFormDesc
     */
    protected $sellFormDesc = null;

    /**
     * @var string $sellFormOptsValues
     */
    protected $sellFormOptsValues = null;

    /**
     * @var string $sellFormFieldDesc
     */
    protected $sellFormFieldDesc = null;

    /**
     * @var int $sellFormParamId
     */
    protected $sellFormParamId = null;

    /**
     * @var string $sellFormParamValues
     */
    protected $sellFormParamValues = null;

    /**
     * @var int $sellFormParentId
     */
    protected $sellFormParentId = null;

    /**
     * @var string $sellFormParentValue
     */
    protected $sellFormParentValue = null;

    /**
     * @var string $sellFormUnit
     */
    protected $sellFormUnit = null;

    /**
     * @var int $sellFormOptions
     */
    protected $sellFormOptions = null;

    /**
     * @param int $sellFormId
     * @param string $sellFormTitle
     * @param int $sellFormCat
     * @param int $sellFormType
     * @param int $sellFormResType
     * @param int $sellFormDefValue
     * @param int $sellFormOpt
     * @param int $sellFormPos
     * @param int $sellFormLength
     * @param string $sellMinValue
     * @param string $sellMaxValue
     * @param string $sellFormDesc
     * @param string $sellFormOptsValues
     * @param string $sellFormFieldDesc
     * @param int $sellFormParamId
     * @param string $sellFormParamValues
     * @param int $sellFormParentId
     * @param string $sellFormParentValue
     * @param string $sellFormUnit
     * @param int $sellFormOptions
     */
    public function __construct($sellFormId, $sellFormTitle, $sellFormCat, $sellFormType, $sellFormResType, $sellFormDefValue, $sellFormOpt, $sellFormPos, $sellFormLength, $sellMinValue, $sellMaxValue, $sellFormDesc, $sellFormOptsValues, $sellFormFieldDesc, $sellFormParamId, $sellFormParamValues, $sellFormParentId, $sellFormParentValue, $sellFormUnit, $sellFormOptions)
    {
        $this->sellFormId = $sellFormId;
        $this->sellFormTitle = $sellFormTitle;
        $this->sellFormCat = $sellFormCat;
        $this->sellFormType = $sellFormType;
        $this->sellFormResType = $sellFormResType;
        $this->sellFormDefValue = $sellFormDefValue;
        $this->sellFormOpt = $sellFormOpt;
        $this->sellFormPos = $sellFormPos;
        $this->sellFormLength = $sellFormLength;
        $this->sellMinValue = $sellMinValue;
        $this->sellMaxValue = $sellMaxValue;
        $this->sellFormDesc = $sellFormDesc;
        $this->sellFormOptsValues = $sellFormOptsValues;
        $this->sellFormFieldDesc = $sellFormFieldDesc;
        $this->sellFormParamId = $sellFormParamId;
        $this->sellFormParamValues = $sellFormParamValues;
        $this->sellFormParentId = $sellFormParentId;
        $this->sellFormParentValue = $sellFormParentValue;
        $this->sellFormUnit = $sellFormUnit;
        $this->sellFormOptions = $sellFormOptions;
    }

    /**
     * @return int
     */
    public function getSellFormId()
    {
        return $this->sellFormId;
    }

    /**
     * @param int $sellFormId
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormId($sellFormId)
    {
        $this->sellFormId = $sellFormId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellFormTitle()
    {
        return $this->sellFormTitle;
    }

    /**
     * @param string $sellFormTitle
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormTitle($sellFormTitle)
    {
        $this->sellFormTitle = $sellFormTitle;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellFormCat()
    {
        return $this->sellFormCat;
    }

    /**
     * @param int $sellFormCat
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormCat($sellFormCat)
    {
        $this->sellFormCat = $sellFormCat;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellFormType()
    {
        return $this->sellFormType;
    }

    /**
     * @param int $sellFormType
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormType($sellFormType)
    {
        $this->sellFormType = $sellFormType;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellFormResType()
    {
        return $this->sellFormResType;
    }

    /**
     * @param int $sellFormResType
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormResType($sellFormResType)
    {
        $this->sellFormResType = $sellFormResType;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellFormDefValue()
    {
        return $this->sellFormDefValue;
    }

    /**
     * @param int $sellFormDefValue
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormDefValue($sellFormDefValue)
    {
        $this->sellFormDefValue = $sellFormDefValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellFormOpt()
    {
        return $this->sellFormOpt;
    }

    /**
     * @param int $sellFormOpt
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormOpt($sellFormOpt)
    {
        $this->sellFormOpt = $sellFormOpt;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellFormPos()
    {
        return $this->sellFormPos;
    }

    /**
     * @param int $sellFormPos
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormPos($sellFormPos)
    {
        $this->sellFormPos = $sellFormPos;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellFormLength()
    {
        return $this->sellFormLength;
    }

    /**
     * @param int $sellFormLength
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormLength($sellFormLength)
    {
        $this->sellFormLength = $sellFormLength;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellMinValue()
    {
        return $this->sellMinValue;
    }

    /**
     * @param string $sellMinValue
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellMinValue($sellMinValue)
    {
        $this->sellMinValue = $sellMinValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellMaxValue()
    {
        return $this->sellMaxValue;
    }

    /**
     * @param string $sellMaxValue
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellMaxValue($sellMaxValue)
    {
        $this->sellMaxValue = $sellMaxValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellFormDesc()
    {
        return $this->sellFormDesc;
    }

    /**
     * @param string $sellFormDesc
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormDesc($sellFormDesc)
    {
        $this->sellFormDesc = $sellFormDesc;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellFormOptsValues()
    {
        return $this->sellFormOptsValues;
    }

    /**
     * @param string $sellFormOptsValues
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormOptsValues($sellFormOptsValues)
    {
        $this->sellFormOptsValues = $sellFormOptsValues;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellFormFieldDesc()
    {
        return $this->sellFormFieldDesc;
    }

    /**
     * @param string $sellFormFieldDesc
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormFieldDesc($sellFormFieldDesc)
    {
        $this->sellFormFieldDesc = $sellFormFieldDesc;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellFormParamId()
    {
        return $this->sellFormParamId;
    }

    /**
     * @param int $sellFormParamId
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormParamId($sellFormParamId)
    {
        $this->sellFormParamId = $sellFormParamId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellFormParamValues()
    {
        return $this->sellFormParamValues;
    }

    /**
     * @param string $sellFormParamValues
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormParamValues($sellFormParamValues)
    {
        $this->sellFormParamValues = $sellFormParamValues;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellFormParentId()
    {
        return $this->sellFormParentId;
    }

    /**
     * @param int $sellFormParentId
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormParentId($sellFormParentId)
    {
        $this->sellFormParentId = $sellFormParentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellFormParentValue()
    {
        return $this->sellFormParentValue;
    }

    /**
     * @param string $sellFormParentValue
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormParentValue($sellFormParentValue)
    {
        $this->sellFormParentValue = $sellFormParentValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellFormUnit()
    {
        return $this->sellFormUnit;
    }

    /**
     * @param string $sellFormUnit
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormUnit($sellFormUnit)
    {
        $this->sellFormUnit = $sellFormUnit;
        return $this;
    }

    /**
     * @return int
     */
    public function getSellFormOptions()
    {
        return $this->sellFormOptions;
    }

    /**
     * @param int $sellFormOptions
     * @return Allegro_Web_Api_SellFormType
     */
    public function setSellFormOptions($sellFormOptions)
    {
        $this->sellFormOptions = $sellFormOptions;
        return $this;
    }
}
