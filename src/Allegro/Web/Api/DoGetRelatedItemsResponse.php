<?php

/**
 * Class Allegro_Web_Api_DoGetRelatedItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetRelatedItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_RelatedItemsStruct $relatedItems
     */
    protected $relatedItems = null;

    /**
     * @param Allegro_Web_Api_RelatedItemsStruct $relatedItems
     */
    public function __construct($relatedItems)
    {
        $this->relatedItems = $relatedItems;
    }

    /**
     * @return Allegro_Web_Api_RelatedItemsStruct
     */
    public function getRelatedItems()
    {
        return $this->relatedItems;
    }

    /**
     * @param Allegro_Web_Api_RelatedItemsStruct $relatedItems
     * @return Allegro_Web_Api_DoGetRelatedItemsResponse
     */
    public function setRelatedItems($relatedItems)
    {
        $this->relatedItems = $relatedItems;
        return $this;
    }
}
