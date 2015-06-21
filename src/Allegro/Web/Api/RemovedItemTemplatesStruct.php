<?php

/**
 * Class Allegro_Web_Api_RemovedItemTemplatesStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_RemovedItemTemplatesStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfInt $itemTemplateIds
     */
    protected $itemTemplateIds = null;

    /**
     * @var Allegro_Web_Api_ArrayOfInt $itemTemplateIncorrectIds
     */
    protected $itemTemplateIncorrectIds = null;

    /**
     * @param Allegro_Web_Api_ArrayOfInt $itemTemplateIds
     * @param Allegro_Web_Api_ArrayOfInt $itemTemplateIncorrectIds
     */
    public function __construct($itemTemplateIds, $itemTemplateIncorrectIds)
    {
        $this->itemTemplateIds          = $itemTemplateIds;
        $this->itemTemplateIncorrectIds = $itemTemplateIncorrectIds;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfInt
     */
    public function getItemTemplateIds()
    {
        return $this->itemTemplateIds;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfInt $itemTemplateIds
     * @return Allegro_Web_Api_RemovedItemTemplatesStruct
     */
    public function setItemTemplateIds($itemTemplateIds)
    {
        $this->itemTemplateIds = $itemTemplateIds;
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
     * @return Allegro_Web_Api_RemovedItemTemplatesStruct
     */
    public function setItemTemplateIncorrectIds($itemTemplateIncorrectIds)
    {
        $this->itemTemplateIncorrectIds = $itemTemplateIncorrectIds;
        return $this;
    }
}
