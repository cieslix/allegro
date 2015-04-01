<?php

/**
 * Class Allegro_Web_Api_DoChangeItemFieldsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoChangeItemFieldsRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFieldsvalue $fieldsToModify
     */
    protected $fieldsToModify = null;

    /**
     * @var Allegro_Web_Api_ArrayOfInt $fieldsToRemove
     */
    protected $fieldsToRemove = null;

    /**
     * @var int $previewOnly
     */
    protected $previewOnly = null;

    /**
     * @var Allegro_Web_Api_ArrayOfVariantstruct $variants
     */
    protected $variants = null;

    /**
     * @param string $sessionId
     * @param int $itemId
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $fieldsToModify
     * @param Allegro_Web_Api_ArrayOfInt $fieldsToRemove
     * @param int $previewOnly
     * @param Allegro_Web_Api_ArrayOfVariantstruct $variants
     */
    public function __construct($sessionId, $itemId, $fieldsToModify, $fieldsToRemove, $previewOnly, $variants)
    {
        $this->sessionId = $sessionId;
        $this->itemId = $itemId;
        $this->fieldsToModify = $fieldsToModify;
        $this->fieldsToRemove = $fieldsToRemove;
        $this->previewOnly = $previewOnly;
        $this->variants = $variants;
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
     * @return Allegro_Web_Api_DoChangeItemFieldsRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return Allegro_Web_Api_DoChangeItemFieldsRequest
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFieldsvalue
     */
    public function getFieldsToModify()
    {
        return $this->fieldsToModify;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFieldsvalue $fieldsToModify
     * @return Allegro_Web_Api_DoChangeItemFieldsRequest
     */
    public function setFieldsToModify($fieldsToModify)
    {
        $this->fieldsToModify = $fieldsToModify;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfInt
     */
    public function getFieldsToRemove()
    {
        return $this->fieldsToRemove;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfInt $fieldsToRemove
     * @return Allegro_Web_Api_DoChangeItemFieldsRequest
     */
    public function setFieldsToRemove($fieldsToRemove)
    {
        $this->fieldsToRemove = $fieldsToRemove;
        return $this;
    }

    /**
     * @return int
     */
    public function getPreviewOnly()
    {
        return $this->previewOnly;
    }

    /**
     * @param int $previewOnly
     * @return Allegro_Web_Api_DoChangeItemFieldsRequest
     */
    public function setPreviewOnly($previewOnly)
    {
        $this->previewOnly = $previewOnly;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfVariantstruct
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfVariantstruct $variants
     * @return Allegro_Web_Api_DoChangeItemFieldsRequest
     */
    public function setVariants($variants)
    {
        $this->variants = $variants;
        return $this;
    }
}
