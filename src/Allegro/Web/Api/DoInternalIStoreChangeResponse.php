<?php

/**
 * Class Allegro_Web_Api_DoInternalIStoreChangeResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoInternalIStoreChangeResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $result
     */
    protected $result = null;

    /**
     * @param int $result
     */
    public function __construct($result)
    {
        $this->result = $result;
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
     * @return Allegro_Web_Api_DoInternalIStoreChangeResponse
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
