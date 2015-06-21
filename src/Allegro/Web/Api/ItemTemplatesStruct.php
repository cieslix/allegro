<?php

/**
 * Class Allegro_Web_Api_ItemTemplatesStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemTemplatesStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfItemtemplateliststruct $itemTemplateList
     */
    protected $itemTemplateList = null;

    /**
     * @var Allegro_Web_Api_ArrayOfInt $itemTemplateIncorrectIds
     */
    protected $itemTemplateIncorrectIds = null;

    /**
     * @param Allegro_Web_Api_ArrayOfItemtemplateliststruct $itemTemplateList
     * @param Allegro_Web_Api_ArrayOfInt                    $itemTemplateIncorrectIds
     */
    public function __construct($itemTemplateList, $itemTemplateIncorrectIds)
    {
        $this->itemTemplateList         = $itemTemplateList;
        $this->itemTemplateIncorrectIds = $itemTemplateIncorrectIds;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItemtemplateliststruct
     */
    public function getItemTemplateList()
    {
        return $this->itemTemplateList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItemtemplateliststruct $itemTemplateList
     * @return Allegro_Web_Api_ItemTemplatesStruct
     */
    public function setItemTemplateList($itemTemplateList)
    {
        $this->itemTemplateList = $itemTemplateList;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfInt
     */
    public function getItemTemplateIncorrectIds()
    {
        return $this->itemTemplateIncorrectIds;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfInt $itemTemplateIncorrectIds
     * @return Allegro_Web_Api_ItemTemplatesStruct
     */
    public function setItemTemplateIncorrectIds($itemTemplateIncorrectIds)
    {
        $this->itemTemplateIncorrectIds = $itemTemplateIncorrectIds;
        return $this;
    }
}
