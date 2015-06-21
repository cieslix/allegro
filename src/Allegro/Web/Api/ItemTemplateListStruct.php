<?php

/**
 * Class Allegro_Web_Api_ItemTemplateListStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemTemplateListStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemTemplateId
     */
    protected $itemTemplateId = null;

    /**
     * @var string $itemTemplateName
     */
    protected $itemTemplateName = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFieldsvalue $itemTemplateFields
     */
    protected $itemTemplateFields = null;

    /**
     * @param int                                $itemTemplateId
     * @param string                             $itemTemplateName
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $itemTemplateFields
     */
    public function __construct($itemTemplateId, $itemTemplateName, $itemTemplateFields)
    {
        $this->itemTemplateId     = $itemTemplateId;
        $this->itemTemplateName   = $itemTemplateName;
        $this->itemTemplateFields = $itemTemplateFields;
    }

    /**
     * @return int
     */
    public function getItemTemplateId()
    {
        return $this->itemTemplateId;
    }

    /**
     * @param int $itemTemplateId
     * @return Allegro_Web_Api_ItemTemplateListStruct
     */
    public function setItemTemplateId($itemTemplateId)
    {
        $this->itemTemplateId = $itemTemplateId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemTemplateName()
    {
        return $this->itemTemplateName;
    }

    /**
     * @param string $itemTemplateName
     * @return Allegro_Web_Api_ItemTemplateListStruct
     */
    public function setItemTemplateName($itemTemplateName)
    {
        $this->itemTemplateName = $itemTemplateName;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFieldsvalue
     */
    public function getItemTemplateFields()
    {
        return $this->itemTemplateFields;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $itemTemplateFields
     * @return Allegro_Web_Api_ItemTemplateListStruct
     */
    public function setItemTemplateFields($itemTemplateFields)
    {
        $this->itemTemplateFields = $itemTemplateFields;
        return $this;
    }
}
