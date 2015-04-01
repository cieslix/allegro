<?php

/**
 * Class Allegro_Web_Api_BlackListResStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_BlackListResStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $result
     */
    protected $result = null;

    /**
     * @param int $userId
     * @param int $result
     */
    public function __construct($userId, $result)
    {
        $this->userId = $userId;
        $this->result = $result;
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
     * @return Allegro_Web_Api_BlackListResStruct
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param int $result
     * @return Allegro_Web_Api_BlackListResStruct
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
