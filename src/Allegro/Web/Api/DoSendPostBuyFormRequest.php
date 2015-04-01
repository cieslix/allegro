<?php

/**
 * Class Allegro_Web_Api_DoSendPostBuyFormRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSendPostBuyFormRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfNewpostbuyformsellerstruct $newPostBuyFormSeller
     */
    protected $newPostBuyFormSeller = null;

    /**
     * @var Allegro_Web_Api_NewPostBuyFormCommonStruct $newPostBuyFormCommon
     */
    protected $newPostBuyFormCommon = null;

    /**
     * @param string $sessionId
     * @param Allegro_Web_Api_ArrayOfNewpostbuyformsellerstruct $newPostBuyFormSeller
     * @param Allegro_Web_Api_NewPostBuyFormCommonStruct $newPostBuyFormCommon
     */
    public function __construct($sessionId, $newPostBuyFormSeller, $newPostBuyFormCommon)
    {
        $this->sessionId = $sessionId;
        $this->newPostBuyFormSeller = $newPostBuyFormSeller;
        $this->newPostBuyFormCommon = $newPostBuyFormCommon;
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
     * @return Allegro_Web_Api_DoSendPostBuyFormRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfNewpostbuyformsellerstruct
     */
    public function getNewPostBuyFormSeller()
    {
        return $this->newPostBuyFormSeller;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfNewpostbuyformsellerstruct $newPostBuyFormSeller
     * @return Allegro_Web_Api_DoSendPostBuyFormRequest
     */
    public function setNewPostBuyFormSeller($newPostBuyFormSeller)
    {
        $this->newPostBuyFormSeller = $newPostBuyFormSeller;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_NewPostBuyFormCommonStruct
     */
    public function getNewPostBuyFormCommon()
    {
        return $this->newPostBuyFormCommon;
    }

    /**
     * @param Allegro_Web_Api_NewPostBuyFormCommonStruct $newPostBuyFormCommon
     * @return Allegro_Web_Api_DoSendPostBuyFormRequest
     */
    public function setNewPostBuyFormCommon($newPostBuyFormCommon)
    {
        $this->newPostBuyFormCommon = $newPostBuyFormCommon;
        return $this;
    }
}
