<?php

/**
 * Class Allegro_Web_Api_DoMyAccountItemsCountRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoMyAccountItemsCountRequest extends Allegro_Web_Api_Abstract
{
    const ACCOUNT_TYPE_TAB_BID = 'bid';
    const ACCOUNT_TYPE_TAB_WON = 'won';
    const ACCOUNT_TYPE_TAB_NOT_WON = 'not_won';
    const ACCOUNT_TYPE_TAB_WATCH = 'watch';
    const ACCOUNT_TYPE_TAB_WATCHED = 'watch_cl';
    const ACCOUNT_TYPE_TAB_SELL = 'sell';
    const ACCOUNT_TYPE_TAB_SOLD = 'sold';
    const ACCOUNT_TYPE_TAB_NOT_SOLD = 'not_sold';
    const ACCOUNT_TYPE_TAB_SCHEDULED = 'future';

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var string $accountType
     */
    protected $accountType = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $itemsArray
     */
    protected $itemsArray = null;

    /**
     * @param string $sessionHandle
     * @param string $accountType
     * @param Allegro_Web_Api_ArrayOfLong $itemsArray
     */
    public function __construct($sessionHandle, $accountType, $itemsArray)
    {
        $this->sessionHandle = $sessionHandle;
        $this->accountType = $accountType;
        $this->itemsArray = $itemsArray;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return Allegro_Web_Api_DoMyAccountItemsCountRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return Allegro_Web_Api_DoMyAccountItemsCountRequest
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getItemsArray()
    {
        return $this->itemsArray;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $itemsArray
     * @return Allegro_Web_Api_DoMyAccountItemsCountRequest
     */
    public function setItemsArray($itemsArray)
    {
        $this->itemsArray = $itemsArray;
        return $this;
    }
}
