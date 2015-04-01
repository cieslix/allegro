<?php

/**
 * Class Allegro_Web_Api_ItemReminderStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemReminderStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $reminderType
     */
    protected $reminderType = null;

    /**
     * @var int $reminderTime
     */
    protected $reminderTime = null;

    /**
     * @param int $reminderType
     * @param int $reminderTime
     */
    public function __construct($reminderType, $reminderTime)
    {
        $this->reminderType = $reminderType;
        $this->reminderTime = $reminderTime;
    }

    /**
     * @return int
     */
    public function getReminderType()
    {
        return $this->reminderType;
    }

    /**
     * @param int $reminderType
     * @return Allegro_Web_Api_ItemReminderStruct
     */
    public function setReminderType($reminderType)
    {
        $this->reminderType = $reminderType;
        return $this;
    }

    /**
     * @return int
     */
    public function getReminderTime()
    {
        return $this->reminderTime;
    }

    /**
     * @param int $reminderTime
     * @return Allegro_Web_Api_ItemReminderStruct
     */
    public function setReminderTime($reminderTime)
    {
        $this->reminderTime = $reminderTime;
        return $this;
    }
}
