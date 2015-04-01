<?php

/**
 * Class Allegro_Web_Api_DoGetTransactionsIDsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetTransactionsIDsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfLong $transactionsIdsArray
     */
    protected $transactionsIdsArray = null;

    /**
     * @param Allegro_Web_Api_ArrayOfLong $transactionsIdsArray
     */
    public function __construct($transactionsIdsArray)
    {
        $this->transactionsIdsArray = $transactionsIdsArray;
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
     * @return Allegro_Web_Api_DoGetTransactionsIDsResponse
     */
    public function setTransactionsIdsArray($transactionsIdsArray)
    {
        $this->transactionsIdsArray = $transactionsIdsArray;
        return $this;
    }
}
