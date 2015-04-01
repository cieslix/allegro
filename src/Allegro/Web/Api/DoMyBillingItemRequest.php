<?php

/**
 * Class Allegro_Web_Api_DoMyBillingItemRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoMyBillingItemRequest extends Allegro_Web_Api_Abstract
{
    const OPTION_SUMMARY_COST = 'S';
    const OPTION_DETAILED_COST = 'F';

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var string $option
     */
    protected $option = null;

    /**
     * @param string $sessionHandle
     * @param int $itemId
     * @param string $option
     */
    public function __construct($sessionHandle, $itemId, $option)
    {
        $this->sessionHandle = $sessionHandle;
        $this->itemId = $itemId;
        $this->option = $option;
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
     * @return Allegro_Web_Api_DoMyBillingItemRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return Allegro_Web_Api_DoMyBillingItemRequest
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param string $option
     * @return Allegro_Web_Api_DoMyBillingItemRequest
     */
    public function setOption($option)
    {
        $this->option = $option;
        return $this;
    }
}
