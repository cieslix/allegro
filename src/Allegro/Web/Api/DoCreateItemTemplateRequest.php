<?php

/**
 * Class Allegro_Web_Api_DoCreateItemTemplateRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoCreateItemTemplateRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var string $itemTemplateName
     */
    protected $itemTemplateName = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFieldsvalue $itemTemplateFields
     */
    protected $itemTemplateFields = null;

    /**
     * @param string                             $sessionId
     * @param string                             $itemTemplateName
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $itemTemplateFields
     */
    public function __construct($sessionId, $itemTemplateName, $itemTemplateFields)
    {
        $this->sessionId          = $sessionId;
        $this->itemTemplateName   = $itemTemplateName;
        $this->itemTemplateFields = $itemTemplateFields;
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
     * @return Allegro_Web_Api_DoCreateItemTemplateRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemTemplateName()
    {
        return $this->itemTemplateName;
    }

    /**
     * @param string $itemTemplateName
     * @return Allegro_Web_Api_DoCreateItemTemplateRequest
     */
    public function setItemTemplateName($itemTemplateName)
    {
        $this->itemTemplateName = $itemTemplateName;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFieldsvalue
     */
    public function getItemTemplateFields()
    {
        return $this->itemTemplateFields;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $itemTemplateFields
     * @return Allegro_Web_Api_DoCreateItemTemplateRequest
     */
    public function setItemTemplateFields($itemTemplateFields)
    {
        $this->itemTemplateFields = $itemTemplateFields;
        return $this;
    }
}
