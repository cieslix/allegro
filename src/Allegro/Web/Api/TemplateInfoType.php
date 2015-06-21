<?php

/**
 * Class Allegro_Web_Api_TemplateInfoType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_TemplateInfoType extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $templateId
     */
    protected $templateId = null;

    /**
     * @var string $templateName
     */
    protected $templateName = null;

    /**
     * @var base64Binary $templateThumb
     */
    protected $templateThumb = null;

    /**
     * @var base64Binary $templateDescImages
     */
    protected $templateDescImages = null;

    /**
     * @param int          $templateId
     * @param string       $templateName
     * @param base64Binary $templateThumb
     * @param base64Binary $templateDescImages
     */
    public function __construct($templateId, $templateName, $templateThumb, $templateDescImages)
    {
        $this->templateId         = $templateId;
        $this->templateName       = $templateName;
        $this->templateThumb      = $templateThumb;
        $this->templateDescImages = $templateDescImages;
    }

    /**
     * @return int
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param int $templateId
     * @return Allegro_Web_Api_TemplateInfoType
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * @param string $templateName
     * @return Allegro_Web_Api_TemplateInfoType
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getTemplateThumb()
    {
        return $this->templateThumb;
    }

    /**
     * @param base64Binary $templateThumb
     * @return Allegro_Web_Api_TemplateInfoType
     */
    public function setTemplateThumb($templateThumb)
    {
        $this->templateThumb = $templateThumb;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getTemplateDescImages()
    {
        return $this->templateDescImages;
    }

    /**
     * @param base64Binary $templateDescImages
     * @return Allegro_Web_Api_TemplateInfoType
     */
    public function setTemplateDescImages($templateDescImages)
    {
        $this->templateDescImages = $templateDescImages;
        return $this;
    }
}
