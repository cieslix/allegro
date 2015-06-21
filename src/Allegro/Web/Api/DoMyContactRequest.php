<?php

/**
 * Class Allegro_Web_Api_DoMyContactRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoMyContactRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $auctionIdList
     */
    protected $auctionIdList = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var int $desc
     */
    protected $desc = null;

    /**
     * @param string                      $sessionHandle
     * @param Allegro_Web_Api_ArrayOfLong $auctionIdList
     * @param int                         $offset
     * @param int                         $desc
     */
    public function __construct($sessionHandle, $auctionIdList, $offset, $desc)
    {
        $this->sessionHandle = $sessionHandle;
        $this->auctionIdList = $auctionIdList;
        $this->offset        = $offset;
        $this->desc          = $desc;
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
     * @return Allegro_Web_Api_DoMyContactRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getAuctionIdList()
    {
        return $this->auctionIdList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $auctionIdList
     * @return Allegro_Web_Api_DoMyContactRequest
     */
    public function setAuctionIdList($auctionIdList)
    {
        $this->auctionIdList = $auctionIdList;
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
     * @return Allegro_Web_Api_DoMyContactRequest
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param int $desc
     * @return Allegro_Web_Api_DoMyContactRequest
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
        return $this;
    }
}
