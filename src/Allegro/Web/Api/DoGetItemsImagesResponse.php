<?php

/**
 * Class Allegro_Web_Api_DoGetItemsImagesResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetItemsImagesResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfItemimagesstruct $get_items_images_result
     */
    protected $get_items_images_result = null;

    /**
     * @param Allegro_Web_Api_ArrayOfItemimagesstruct $getItemsImagesResult
     */
    public function __construct($getItemsImagesResult)
    {
        $this->get_items_images_result = $getItemsImagesResult;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItemimagesstruct
     */
    public function getGetItemsImagesResult()
    {
        return $this->get_items_images_result;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItemimagesstruct $getItemsImagesResult
     * @return Allegro_Web_Api_DoGetItemsImagesResponse
     */
    public function setGetItemsImagesResult($getItemsImagesResult)
    {
        $this->get_items_images_result = $getItemsImagesResult;
        return $this;
    }
}
