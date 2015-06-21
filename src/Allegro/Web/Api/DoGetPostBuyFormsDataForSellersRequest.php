<?php

/**
 * Class Allegro_Web_Api_DoGetPostBuyFormsDataForSellersRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetPostBuyFormsDataForSellersRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $transactionsIdsArray
     */
    protected $transactionsIdsArray = null;

    /**
     * @param string                      $sessionId
     * @param Allegro_Web_Api_ArrayOfLong $transactionsIdsArray
     */
    public function __construct($sessionId, $transactionsIdsArray)
    {
        $this->sessionId            = $sessionId;
        $this->transactionsIdsArray = $transactionsIdsArray;
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
     * @return Allegro_Web_Api_DoGetPostBuyFormsDataForSellersRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getTransactionsIdsArray()
    {
        return $this->transactionsIdsArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $transactionsIdsArray
     * @return Allegro_Web_Api_DoGetPostBuyFormsDataForSellersRequest
     */
    public function setTransactionsIdsArray($transactionsIdsArray)
    {
        $this->transactionsIdsArray = $transactionsIdsArray;
        return $this;
    }
}
