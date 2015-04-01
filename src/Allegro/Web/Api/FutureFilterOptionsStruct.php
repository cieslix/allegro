<?php

/**
 * Class Allegro_Web_Api_FutureFilterOptionsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_FutureFilterOptionsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $filterFormat
     */
    protected $filterFormat = null;

    /**
     * @param int $filterFormat
     */
    public function __construct($filterFormat)
    {
        $this->filterFormat = $filterFormat;
    }

    /**
     * @return int
     */
    public function getFilterFormat()
    {
        return $this->filterFormat;
    }

    /**
     * @param int $filterFormat
     * @return Allegro_Web_Api_FutureFilterOptionsStruct
     */
    public function setFilterFormat($filterFormat)
    {
        $this->filterFormat = $filterFormat;
        return $this;
    }
}
