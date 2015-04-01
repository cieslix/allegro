<?php

/**
 * Class Allegro_Web_Api_CreatedItemTemplateStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_CreatedItemTemplateStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemTemplateId
     */
    protected $itemTemplateId = null;

    /**
     * @param int $itemTemplateId
     */
    public function __construct($itemTemplateId)
    {
        $this->itemTemplateId = $itemTemplateId;
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
     * @return Allegro_Web_Api_CreatedItemTemplateStruct
     */
    public function setItemTemplateId($itemTemplateId)
    {
        $this->itemTemplateId = $itemTemplateId;
        return $this;
    }
}
