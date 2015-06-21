<?php

/**
 * Class Allegro_Web_Api_DoMyAccount2Request
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoMyAccount2Request extends Allegro_Web_Api_Abstract
{
    /**
     * available types for $accountType
     */
    const TYPE_BID         = 'bid';
    const TYPE_WON         = 'won';
    const TYPE_NOT_WON     = 'not_won';
    const TYPE_WATCH       = 'watch';
    const TYPE_WATCH_ENDED = 'watch_cl';
    const TYPE_SELL        = 'sell';
    const TYPE_SOLD        = 'sold';
    const TYPE_NOT_SOLD    = 'not_sold';
    const TYPE_SCHEDULED   = 'future';

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var string $accountType
     */
    protected $accountType = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $itemsArray
     */
    protected $itemsArray = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @param string                      $sessionHandle
     * @param string                      $accountType
     * @param int                         $offset
     * @param Allegro_Web_Api_ArrayOfLong $itemsArray
     * @param int                         $limit
     */
    public function __construct($sessionHandle, $accountType, $offset, $itemsArray, $limit)
    {
        $this->sessionHandle = $sessionHandle;
        $this->accountType   = $accountType;
        $this->offset        = $offset;
        $this->itemsArray    = $itemsArray;
        $this->limit         = $limit;
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
     * @return Allegro_Web_Api_DoMyAccount2Request
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
     * @return Allegro_Web_Api_DoMyAccount2Request
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return Allegro_Web_Api_DoMyAccount2Request
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
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
     * @return Allegro_Web_Api_DoMyAccount2Request
     */
    public function setItemsArray($itemsArray)
    {
        $this->itemsArray = $itemsArray;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return Allegro_Web_Api_DoMyAccount2Request
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }
}
