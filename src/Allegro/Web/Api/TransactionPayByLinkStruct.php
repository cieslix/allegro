<?php

/**
 * Class Allegro_Web_Api_TransactionPayByLinkStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_TransactionPayByLinkStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $actionHttpMethod
     */
    protected $actionHttpMethod = null;

    /**
     * @var string $actionUrl
     */
    protected $actionUrl = null;

    /**
     * @var Allegro_Web_Api_ArrayOfActiondatastruct $actionData
     */
    protected $actionData = null;

    /**
     * @param string $actionHttpMethod
     * @param string $actionUrl
     * @param Allegro_Web_Api_ArrayOfActiondatastruct $actionData
     */
    public function __construct($actionHttpMethod, $actionUrl, $actionData)
    {
        $this->actionHttpMethod = $actionHttpMethod;
        $this->actionUrl = $actionUrl;
        $this->actionData = $actionData;
    }

    /**
     * @return string
     */
    public function getActionHttpMethod()
    {
        return $this->actionHttpMethod;
    }

    /**
     * @param string $actionHttpMethod
     * @return Allegro_Web_Api_TransactionPayByLinkStruct
     */
    public function setActionHttpMethod($actionHttpMethod)
    {
        $this->actionHttpMethod = $actionHttpMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getActionUrl()
    {
        return $this->actionUrl;
    }

    /**
     * @param string $actionUrl
     * @return Allegro_Web_Api_TransactionPayByLinkStruct
     */
    public function setActionUrl($actionUrl)
    {
        $this->actionUrl = $actionUrl;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfActiondatastruct
     */
    public function getActionData()
    {
        return $this->actionData;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfActiondatastruct $actionData
     * @return Allegro_Web_Api_TransactionPayByLinkStruct
     */
    public function setActionData($actionData)
    {
        $this->actionData = $actionData;
        return $this;
    }
}
