<?php

/**
 * Class Allegro_Web_Api_ItemTemplateCreateStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemTemplateCreateStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemTemplateOption
     */
    protected $itemTemplateOption = null;

    /**
     * @var string $itemTemplateName
     */
    protected $itemTemplateName = null;

    /**
     * @param int $itemTemplateOption
     * @param string $itemTemplateName
     */
    public function __construct($itemTemplateOption, $itemTemplateName)
    {
        $this->itemTemplateOption = $itemTemplateOption;
        $this->itemTemplateName = $itemTemplateName;
    }

    /**
     * @return int
     */
    public function getItemTemplateOption()
    {
        return $this->itemTemplateOption;
    }

    /**
     * @param int $itemTemplateOption
     * @return Allegro_Web_Api_ItemTemplateCreateStruct
     */
    public function setItemTemplateOption($itemTemplateOption)
    {
        $this->itemTemplateOption = $itemTemplateOption;
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
     * @return Allegro_Web_Api_ItemTemplateCreateStruct
     */
    public function setItemTemplateName($itemTemplateName)
    {
        $this->itemTemplateName = $itemTemplateName;
        return $this;
    }
}
