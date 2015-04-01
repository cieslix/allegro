<?php

/**
 * Class Allegro_Web_Api_DoCreateItemTemplateResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoCreateItemTemplateResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_CreatedItemTemplateStruct $createdItemTemplate
     */
    protected $createdItemTemplate = null;

    /**
     * @param Allegro_Web_Api_CreatedItemTemplateStruct $createdItemTemplate
     */
    public function __construct($createdItemTemplate)
    {
        $this->createdItemTemplate = $createdItemTemplate;
    }

    /**
     * @return Allegro_Web_Api_CreatedItemTemplateStruct
     */
    public function getCreatedItemTemplate()
    {
        return $this->createdItemTemplate;
    }

    /**
     * @param Allegro_Web_Api_CreatedItemTemplateStruct $createdItemTemplate
     * @return Allegro_Web_Api_DoCreateItemTemplateResponse
     */
    public function setCreatedItemTemplate($createdItemTemplate)
    {
        $this->createdItemTemplate = $createdItemTemplate;
        return $this;
    }
}
