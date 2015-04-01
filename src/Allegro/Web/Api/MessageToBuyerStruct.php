<?php

/**
 * Class Allegro_Web_Api_MessageToBuyerStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_MessageToBuyerStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $messageSellerId
     */
    protected $messageSellerId = null;

    /**
     * @var string $messageContent
     */
    protected $messageContent = null;

    /**
     * @param int $messageSellerId
     * @param string $messageContent
     */
    public function __construct($messageSellerId, $messageContent)
    {
        $this->messageSellerId = $messageSellerId;
        $this->messageContent = $messageContent;
    }

    /**
     * @return int
     */
    public function getMessageSellerId()
    {
        return $this->messageSellerId;
    }

    /**
     * @param int $messageSellerId
     * @return Allegro_Web_Api_MessageToBuyerStruct
     */
    public function setMessageSellerId($messageSellerId)
    {
        $this->messageSellerId = $messageSellerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessageContent()
    {
        return $this->messageContent;
    }

    /**
     * @param string $messageContent
     * @return Allegro_Web_Api_MessageToBuyerStruct
     */
    public function setMessageContent($messageContent)
    {
        $this->messageContent = $messageContent;
        return $this;
    }
}
