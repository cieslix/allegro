<?php

/**
 * Class Allegro_Web_Api_DoGetSellFormFieldsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetSellFormFieldsResponse extends Allegro_Web_Api_Abstract
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
     * @param Allegro_Web_Api_ArrayOfSellformtype $sellFormFields
     * @param int $verKey
     * @param string $verStr
     */
    public function __construct($sellFormFields, $verKey, $verStr)
    {
        $this->sellFormFields = $sellFormFields;
        $this->verKey = $verKey;
        $this->verStr = $verStr;
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
     * @return Allegro_Web_Api_DoGetSellFormFieldsResponse
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
     * @return Allegro_Web_Api_DoGetSellFormFieldsResponse
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
     * @return Allegro_Web_Api_DoGetSellFormFieldsResponse
     */
    public function setVerStr($verStr)
    {
        $this->verStr = $verStr;
        return $this;
    }
}
