<?php

/**
 * Class Allegro_Web_Api_StructSellFailed
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_StructSellFailed extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $sellItemId
     */
    protected $sellItemId = null;

    /**
     * @var string $sellFaultCode
     */
    protected $sellFaultCode = null;

    /**
     * @var string $sellFaultString
     */
    protected $sellFaultString = null;

    /**
     * @param int $sellItemId
     * @param string $sellFaultCode
     * @param string $sellFaultString
     */
    public function __construct($sellItemId, $sellFaultCode, $sellFaultString)
    {
        $this->sellItemId = $sellItemId;
        $this->sellFaultCode = $sellFaultCode;
        $this->sellFaultString = $sellFaultString;
    }

    /**
     * @return int
     */
    public function getSellItemId()
    {
        return $this->sellItemId;
    }

    /**
     * @param int $sellItemId
     * @return Allegro_Web_Api_StructSellFailed
     */
    public function setSellItemId($sellItemId)
    {
        $this->sellItemId = $sellItemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellFaultCode()
    {
        return $this->sellFaultCode;
    }

    /**
     * @param string $sellFaultCode
     * @return Allegro_Web_Api_StructSellFailed
     */
    public function setSellFaultCode($sellFaultCode)
    {
        $this->sellFaultCode = $sellFaultCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSellFaultString()
    {
        return $this->sellFaultString;
    }

    /**
     * @param string $sellFaultString
     * @return Allegro_Web_Api_StructSellFailed
     */
    public function setSellFaultString($sellFaultString)
    {
        $this->sellFaultString = $sellFaultString;
        return $this;
    }
}
