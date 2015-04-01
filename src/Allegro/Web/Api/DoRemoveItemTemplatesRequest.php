<?php

/**
 * Class Allegro_Web_Api_DoRemoveItemTemplatesRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoRemoveItemTemplatesRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfInt $itemTemplateIds
     */
    protected $itemTemplateIds = null;

    /**
     * @param string $sessionId
     * @param Allegro_Web_Api_ArrayOfInt $itemTemplateIds
     */
    public function __construct($sessionId, $itemTemplateIds)
    {
        $this->sessionId = $sessionId;
        $this->itemTemplateIds = $itemTemplateIds;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return Allegro_Web_Api_DoRemoveItemTemplatesRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
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
     * @return Allegro_Web_Api_DoRemoveItemTemplatesRequest
     */
    public function setItemTemplateIds($itemTemplateIds)
    {
        $this->itemTemplateIds = $itemTemplateIds;
        return $this;
    }
}
