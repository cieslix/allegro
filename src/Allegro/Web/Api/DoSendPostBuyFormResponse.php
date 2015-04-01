<?php

/**
 * Class Allegro_Web_Api_DoSendPostBuyFormResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSendPostBuyFormResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_PostBuyFormStruct $postBuyForm
     */
    protected $postBuyForm = null;

    /**
     * @param Allegro_Web_Api_PostBuyFormStruct $postBuyForm
     */
    public function __construct($postBuyForm)
    {
        $this->postBuyForm = $postBuyForm;
    }

    /**
     * @return Allegro_Web_Api_PostBuyFormStruct
     */
    public function getPostBuyForm()
    {
        return $this->postBuyForm;
    }

    /**
     * @param Allegro_Web_Api_PostBuyFormStruct $postBuyForm
     * @return Allegro_Web_Api_DoSendPostBuyFormResponse
     */
    public function setPostBuyForm($postBuyForm)
    {
        $this->postBuyForm = $postBuyForm;
        return $this;
    }
}
