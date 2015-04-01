<?php

/**
 * Class Allegro_Web_Api_FilledPostBuyFormsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_FilledPostBuyFormsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfLong $transactionIds
     */
    protected $transactionIds = null;

    /**
     * @param Allegro_Web_Api_ArrayOfLong $transactionIds
     */
    public function __construct($transactionIds)
    {
        $this->transactionIds = $transactionIds;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getTransactionIds()
    {
        return $this->transactionIds;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $transactionIds
     * @return Allegro_Web_Api_FilledPostBuyFormsStruct
     */
    public function setTransactionIds($transactionIds)
    {
        $this->transactionIds = $transactionIds;
        return $this;
    }
}
