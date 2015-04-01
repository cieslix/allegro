<?php

/**
 * Class Allegro_Web_Api_DoGetItemFieldsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetItemFieldsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfFieldsvalue $itemFields
     */
    protected $itemFields = null;

    /**
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $itemFields
     */
    public function __construct($itemFields)
    {
        $this->itemFields = $itemFields;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFieldsvalue
     */
    public function getItemFields()
    {
        return $this->itemFields;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $itemFields
     * @return Allegro_Web_Api_DoGetItemFieldsResponse
     */
    public function setItemFields($itemFields)
    {
        $this->itemFields = $itemFields;
        return $this;
    }
}
