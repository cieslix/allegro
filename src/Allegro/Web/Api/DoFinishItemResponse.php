<?php

/**
 * Class Allegro_Web_Api_DoFinishItemResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoFinishItemResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $finishValue
     */
    protected $finishValue = null;

    /**
     * @param int $finishValue
     */
    public function __construct($finishValue)
    {
        $this->finishValue = $finishValue;
    }

    /**
     * @return int
     */
    public function getFinishValue()
    {
        return $this->finishValue;
    }

    /**
     * @param int $finishValue
     * @return Allegro_Web_Api_DoFinishItemResponse
     */
    public function setFinishValue($finishValue)
    {
        $this->finishValue = $finishValue;
        return $this;
    }
}
