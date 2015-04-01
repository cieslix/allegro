<?php

/**
 * Class Allegro_Web_Api_DoRemoveItemTemplatesResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoRemoveItemTemplatesResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_RemovedItemTemplatesStruct $removedItemTemplates
     */
    protected $removedItemTemplates = null;

    /**
     * @param Allegro_Web_Api_RemovedItemTemplatesStruct $removedItemTemplates
     */
    public function __construct($removedItemTemplates)
    {
        $this->removedItemTemplates = $removedItemTemplates;
    }

    /**
     * @return Allegro_Web_Api_RemovedItemTemplatesStruct
     */
    public function getRemovedItemTemplates()
    {
        return $this->removedItemTemplates;
    }

    /**
     * @param Allegro_Web_Api_RemovedItemTemplatesStruct $removedItemTemplates
     * @return Allegro_Web_Api_DoRemoveItemTemplatesResponse
     */
    public function setRemovedItemTemplates($removedItemTemplates)
    {
        $this->removedItemTemplates = $removedItemTemplates;
        return $this;
    }
}
