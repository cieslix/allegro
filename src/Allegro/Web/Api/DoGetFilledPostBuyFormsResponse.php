<?php

/**
 * Class Allegro_Web_Api_DoGetFilledPostBuyFormsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetFilledPostBuyFormsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_FilledPostBuyFormsStruct $filledPostBuyForms
     */
    protected $filledPostBuyForms = null;

    /**
     * @param Allegro_Web_Api_FilledPostBuyFormsStruct $filledPostBuyForms
     */
    public function __construct($filledPostBuyForms)
    {
        $this->filledPostBuyForms = $filledPostBuyForms;
    }

    /**
     * @return Allegro_Web_Api_FilledPostBuyFormsStruct
     */
    public function getFilledPostBuyForms()
    {
        return $this->filledPostBuyForms;
    }

    /**
     * @param Allegro_Web_Api_FilledPostBuyFormsStruct $filledPostBuyForms
     * @return Allegro_Web_Api_DoGetFilledPostBuyFormsResponse
     */
    public function setFilledPostBuyForms($filledPostBuyForms)
    {
        $this->filledPostBuyForms = $filledPostBuyForms;
        return $this;
    }
}
