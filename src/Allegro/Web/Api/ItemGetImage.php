<?php

/**
 * Class Allegro_Web_Api_ItemGetImage
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemGetImage extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itId
     */
    protected $itId = null;

    /**
     * @var int $itSellerId
     */
    protected $itSellerId = null;

    /**
     * @var int $itFotoCount
     */
    protected $itFotoCount = null;

    /**
     * @param int $itId
     * @param int $itSellerId
     * @param int $itFotoCount
     */
    public function __construct($itId, $itSellerId, $itFotoCount)
    {
        $this->itId        = $itId;
        $this->itSellerId  = $itSellerId;
        $this->itFotoCount = $itFotoCount;
    }

    /**
     * @return int
     */
    public function getItId()
    {
        return $this->itId;
    }

    /**
     * @param int $itId
     * @return Allegro_Web_Api_ItemGetImage
     */
    public function setItId($itId)
    {
        $this->itId = $itId;
        return $this;
    }

    /**
     * @return int
     */
    public function getItSellerId()
    {
        return $this->itSellerId;
    }

    /**
     * @param int $itSellerId
     * @return Allegro_Web_Api_ItemGetImage
     */
    public function setItSellerId($itSellerId)
    {
        $this->itSellerId = $itSellerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getItFotoCount()
    {
        return $this->itFotoCount;
    }

    /**
     * @param int $itFotoCount
     * @return Allegro_Web_Api_ItemGetImage
     */
    public function setItFotoCount($itFotoCount)
    {
        $this->itFotoCount = $itFotoCount;
        return $this;
    }
}
