<?php

/**
 * Class Allegro_Web_Api_DoGetSellFormFieldsLimitResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSellFormFieldsLimitResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfSellformtype $sellFormFields
     */
    protected $sellFormFields = null;

    /**
     * @var int $verKey
     */
    protected $verKey = null;

    /**
     * @var string $verStr
     */
    protected $verStr = null;

    /**
     * @var int $formFieldsCount
     */
    protected $formFieldsCount = null;

    /**
     * @param Allegro_Web_Api_ArrayOfSellformtype $sellFormFields
     * @param int $verKey
     * @param string $verStr
     * @param int $formFieldsCount
     */
    public function __construct($sellFormFields, $verKey, $verStr, $formFieldsCount)
    {
        $this->sellFormFields = $sellFormFields;
        $this->verKey = $verKey;
        $this->verStr = $verStr;
        $this->formFieldsCount = $formFieldsCount;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSellformtype
     */
    public function getSellFormFields()
    {
        return $this->sellFormFields;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSellformtype $sellFormFields
     * @return Allegro_Web_Api_DoGetSellFormFieldsLimitResponse
     */
    public function setSellFormFields($sellFormFields)
    {
        $this->sellFormFields = $sellFormFields;
        return $this;
    }

    /**
     * @return int
     */
    public function getVerKey()
    {
        return $this->verKey;
    }

    /**
     * @param int $verKey
     * @return Allegro_Web_Api_DoGetSellFormFieldsLimitResponse
     */
    public function setVerKey($verKey)
    {
        $this->verKey = $verKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getVerStr()
    {
        return $this->verStr;
    }

    /**
     * @param string $verStr
     * @return Allegro_Web_Api_DoGetSellFormFieldsLimitResponse
     */
    public function setVerStr($verStr)
    {
        $this->verStr = $verStr;
        return $this;
    }

    /**
     * @return int
     */
    public function getFormFieldsCount()
    {
        return $this->formFieldsCount;
    }

    /**
     * @param int $formFieldsCount
     * @return Allegro_Web_Api_DoGetSellFormFieldsLimitResponse
     */
    public function setFormFieldsCount($formFieldsCount)
    {
        $this->formFieldsCount = $formFieldsCount;
        return $this;
    }
}
