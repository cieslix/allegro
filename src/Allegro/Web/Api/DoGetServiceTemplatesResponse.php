<?php

/**
 * Class Allegro_Web_Api_DoGetServiceTemplatesResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetServiceTemplatesResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfTemplateinfotype $templatesArray
     */
    protected $templatesArray = null;

    /**
     * @param Allegro_Web_Api_ArrayOfTemplateinfotype $templatesArray
     */
    public function __construct($templatesArray)
    {
        $this->templatesArray = $templatesArray;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfTemplateinfotype
     */
    public function getTemplatesArray()
    {
        return $this->templatesArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfTemplateinfotype $templatesArray
     * @return Allegro_Web_Api_DoGetServiceTemplatesResponse
     */
    public function setTemplatesArray($templatesArray)
    {
        $this->templatesArray = $templatesArray;
        return $this;
    }
}
