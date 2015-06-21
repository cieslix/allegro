<?php

/**
 * Class Allegro_Web_Api_UserBlackListStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_UserBlackListStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var string $userBlackListNote
     */
    protected $userBlackListNote = null;

    /**
     * @param int    $userId
     * @param string $userBlackListNote
     */
    public function __construct($userId, $userBlackListNote)
    {
        $this->userId            = $userId;
        $this->userBlackListNote = $userBlackListNote;
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
     * @return Allegro_Web_Api_UserBlackListStruct
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserBlackListNote()
    {
        return $this->userBlackListNote;
    }

    /**
     * @param string $userBlackListNote
     * @return Allegro_Web_Api_UserBlackListStruct
     */
    public function setUserBlackListNote($userBlackListNote)
    {
        $this->userBlackListNote = $userBlackListNote;
        return $this;
    }
}
