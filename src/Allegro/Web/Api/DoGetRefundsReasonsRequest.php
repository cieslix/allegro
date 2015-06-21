<?php

/**
 * Class Allegro_Web_Api_DoGetRefundsReasonsRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetRefundsReasonsRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $dealId
     */
    protected $dealId = null;

    /**
     * @param string $sessionId
     * @param int    $dealId
     */
    public function __construct($sessionId, $dealId)
    {
        $this->sessionId = $sessionId;
        $this->dealId    = $dealId;
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
     * @return Allegro_Web_Api_DoGetRefundsReasonsRequest
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDealId()
    {
        return $this->dealId;
    }

    /**
     * @param int $dealId
     * @return Allegro_Web_Api_DoGetRefundsReasonsRequest
     */
    public function setDealId($dealId)
    {
        $this->dealId = $dealId;
        return $this;
    }
}
