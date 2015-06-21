<?php

/**
 * Class Allegro_Web_Api_DoCheckItemDescriptionRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoCheckItemDescriptionRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var string $descriptionContent
     */
    protected $descriptionContent = null;

    /**
     * @param string $sessionId
     * @param string $descriptionContent
     */
    public function __construct($sessionId, $descriptionContent)
    {
        $this->sessionId          = $sessionId;
        $this->descriptionContent = $descriptionContent;
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
     * @return Allegro_Web_Api_DoCheckItemDescriptionRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionContent()
    {
        return $this->descriptionContent;
    }

    /**
     * @param string $descriptionContent
     * @return Allegro_Web_Api_DoCheckItemDescriptionRequest
     */
    public function setDescriptionContent($descriptionContent)
    {
        $this->descriptionContent = $descriptionContent;
        return $this;
    }
}
