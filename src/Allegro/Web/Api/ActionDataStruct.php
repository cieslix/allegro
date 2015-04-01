<?php

/**
 * Class Allegro_Web_Api_ActionDataStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ActionDataStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $actionKey
     */
    protected $actionKey = null;

    /**
     * @var string $actionValue
     */
    protected $actionValue = null;

    /**
     * @param string $actionKey
     * @param string $actionValue
     */
    public function __construct($actionKey, $actionValue)
    {
        $this->actionKey = $actionKey;
        $this->actionValue = $actionValue;
    }

    /**
     * @return string
     */
    public function getActionKey()
    {
        return $this->actionKey;
    }

    /**
     * @param string $actionKey
     * @return Allegro_Web_Api_ActionDataStruct
     */
    public function setActionKey($actionKey)
    {
        $this->actionKey = $actionKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getActionValue()
    {
        return $this->actionValue;
    }

    /**
     * @param string $actionValue
     * @return Allegro_Web_Api_ActionDataStruct
     */
    public function setActionValue($actionValue)
    {
        $this->actionValue = $actionValue;
        return $this;
    }
}
