<?php

/**
 * Class Allegro_Web_Api_UserBlackListAddResultStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_UserBlackListAddResultStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $addToBlackListResult
     */
    protected $addToBlackListResult = null;

    /**
     * @var string $addToBlackListErrCode
     */
    protected $addToBlackListErrCode = null;

    /**
     * @var string $addToBlackListErrMsg
     */
    protected $addToBlackListErrMsg = null;

    /**
     * @param int $userId
     * @param int $addToBlackListResult
     * @param string $addToBlackListErrCode
     * @param string $addToBlackListErrMsg
     */
    public function __construct($userId, $addToBlackListResult, $addToBlackListErrCode, $addToBlackListErrMsg)
    {
        $this->userId = $userId;
        $this->addToBlackListResult = $addToBlackListResult;
        $this->addToBlackListErrCode = $addToBlackListErrCode;
        $this->addToBlackListErrMsg = $addToBlackListErrMsg;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return Allegro_Web_Api_UserBlackListAddResultStruct
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAddToBlackListResult()
    {
        return $this->addToBlackListResult;
    }

    /**
     * @param int $addToBlackListResult
     * @return Allegro_Web_Api_UserBlackListAddResultStruct
     */
    public function setAddToBlackListResult($addToBlackListResult)
    {
        $this->addToBlackListResult = $addToBlackListResult;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddToBlackListErrCode()
    {
        return $this->addToBlackListErrCode;
    }

    /**
     * @param string $addToBlackListErrCode
     * @return Allegro_Web_Api_UserBlackListAddResultStruct
     */
    public function setAddToBlackListErrCode($addToBlackListErrCode)
    {
        $this->addToBlackListErrCode = $addToBlackListErrCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddToBlackListErrMsg()
    {
        return $this->addToBlackListErrMsg;
    }

    /**
     * @param string $addToBlackListErrMsg
     * @return Allegro_Web_Api_UserBlackListAddResultStruct
     */
    public function setAddToBlackListErrMsg($addToBlackListErrMsg)
    {
        $this->addToBlackListErrMsg = $addToBlackListErrMsg;
        return $this;
    }
}
