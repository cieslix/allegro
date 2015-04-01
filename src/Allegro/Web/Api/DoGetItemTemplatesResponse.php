<?php

/**
 * Class Allegro_Web_Api_DoGetItemTemplatesResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetItemTemplatesResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ItemTemplatesStruct $itemTemplates
     */
    protected $itemTemplates = null;

    /**
     * @param Allegro_Web_Api_ItemTemplatesStruct $itemTemplates
     */
    public function __construct($itemTemplates)
    {
        $this->itemTemplates = $itemTemplates;
    }

    /**
     * @return Allegro_Web_Api_ItemTemplatesStruct
     */
    public function getItemTemplates()
    {
        return $this->itemTemplates;
    }

    /**
     * @param Allegro_Web_Api_ItemTemplatesStruct $itemTemplates
     * @return Allegro_Web_Api_DoGetItemTemplatesResponse
     */
    public function setItemTemplates($itemTemplates)
    {
        $this->itemTemplates = $itemTemplates;
        return $this;
    }
}
