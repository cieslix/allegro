<?php

/**
 * Class Allegro_Web_Api_PostBuyFormStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PostBuyFormStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $transactionId
     */
    protected $transactionId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $transactionPackageIds
     */
    protected $transactionPackageIds = null;

    /**
     * @var Allegro_Web_Api_TransactionPayByLinkStruct $transactionPayByLink
     */
    protected $transactionPayByLink = null;

    /**
     * @param int                                        $transactionId
     * @param Allegro_Web_Api_ArrayOfLong                $transactionPackageIds
     * @param Allegro_Web_Api_TransactionPayByLinkStruct $transactionPayByLink
     */
    public function __construct($transactionId, $transactionPackageIds, $transactionPayByLink)
    {
        $this->transactionId         = $transactionId;
        $this->transactionPackageIds = $transactionPackageIds;
        $this->transactionPayByLink  = $transactionPayByLink;
    }

    /**
     * @return int
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param int $transactionId
     * @return Allegro_Web_Api_PostBuyFormStruct
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getTransactionPackageIds()
    {
        return $this->transactionPackageIds;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $transactionPackageIds
     * @return Allegro_Web_Api_PostBuyFormStruct
     */
    public function setTransactionPackageIds($transactionPackageIds)
    {
        $this->transactionPackageIds = $transactionPackageIds;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_TransactionPayByLinkStruct
     */
    public function getTransactionPayByLink()
    {
        return $this->transactionPayByLink;
    }

    /**
     * @param Allegro_Web_Api_TransactionPayByLinkStruct $transactionPayByLink
     * @return Allegro_Web_Api_PostBuyFormStruct
     */
    public function setTransactionPayByLink($transactionPayByLink)
    {
        $this->transactionPayByLink = $transactionPayByLink;
        return $this;
    }
}
