<?php

/**
 * Class Allegro_Web_Api_DoSendEmailToUserResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoSendEmailToUserResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $mailToUserReceiverId
     */
    protected $mailToUserReceiverId = null;

    /**
     * @var string $mailToUserResult
     */
    protected $mailToUserResult = null;

    /**
     * @param int $mailToUserReceiverId
     * @param string $mailToUserResult
     */
    public function __construct($mailToUserReceiverId, $mailToUserResult)
    {
        $this->mailToUserReceiverId = $mailToUserReceiverId;
        $this->mailToUserResult = $mailToUserResult;
    }

    /**
     * @return int
     */
    public function getMailToUserReceiverId()
    {
        return $this->mailToUserReceiverId;
    }

    /**
     * @param int $mailToUserReceiverId
     * @return Allegro_Web_Api_DoSendEmailToUserResponse
     */
    public function setMailToUserReceiverId($mailToUserReceiverId)
    {
        $this->mailToUserReceiverId = $mailToUserReceiverId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMailToUserResult()
    {
        return $this->mailToUserResult;
    }

    /**
     * @param string $mailToUserResult
     * @return Allegro_Web_Api_DoSendEmailToUserResponse
     */
    public function setMailToUserResult($mailToUserResult)
    {
        $this->mailToUserResult = $mailToUserResult;
        return $this;
    }
}
