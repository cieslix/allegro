<?php

/**
 * Class Allegro_Web_Api_DoAddPackageInfoToPostBuyFormRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoAddPackageInfoToPostBuyFormRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $transactionId
     */
    protected $transactionId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfPackageinfostruct $packageInfo
     */
    protected $packageInfo = null;

    /**
     * @param string                                   $sessionId
     * @param int                                      $transactionId
     * @param Allegro_Web_Api_ArrayOfPackageinfostruct $packageInfo
     */
    public function __construct($sessionId, $transactionId, $packageInfo)
    {
        $this->sessionId     = $sessionId;
        $this->transactionId = $transactionId;
        $this->packageInfo   = $packageInfo;
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
     * @return Allegro_Web_Api_DoAddPackageInfoToPostBuyFormRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
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
     * @return Allegro_Web_Api_DoAddPackageInfoToPostBuyFormRequest
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfPackageinfostruct
     */
    public function getPackageInfo()
    {
        return $this->packageInfo;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfPackageinfostruct $packageInfo
     * @return Allegro_Web_Api_DoAddPackageInfoToPostBuyFormRequest
     */
    public function setPackageInfo($packageInfo)
    {
        $this->packageInfo = $packageInfo;
        return $this;
    }
}
