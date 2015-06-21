<?php

/**
 * Class Allegro_Web_Api_DoAddDescToItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoAddDescToItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfLong $arrayItemsAddId
     */
    protected $arrayItemsAddId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $arrayItemsDescToLong
     */
    protected $arrayItemsDescToLong = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $arrayItemsNotFound
     */
    protected $arrayItemsNotFound = null;

    /**
     * @param Allegro_Web_Api_ArrayOfLong $arrayItemsAddId
     * @param Allegro_Web_Api_ArrayOfLong $arrayItemsDescToLong
     * @param Allegro_Web_Api_ArrayOfLong $arrayItemsNotFound
     */
    public function __construct($arrayItemsAddId, $arrayItemsDescToLong, $arrayItemsNotFound)
    {
        $this->arrayItemsAddId      = $arrayItemsAddId;
        $this->arrayItemsDescToLong = $arrayItemsDescToLong;
        $this->arrayItemsNotFound   = $arrayItemsNotFound;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getArrayItemsAddId()
    {
        return $this->arrayItemsAddId;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $arrayItemsAddId
     * @return Allegro_Web_Api_DoAddDescToItemsResponse
     */
    public function setArrayItemsAddId($arrayItemsAddId)
    {
        $this->arrayItemsAddId = $arrayItemsAddId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getArrayItemsDescToLong()
    {
        return $this->arrayItemsDescToLong;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $arrayItemsDescToLong
     * @return Allegro_Web_Api_DoAddDescToItemsResponse
     */
    public function setArrayItemsDescToLong($arrayItemsDescToLong)
    {
        $this->arrayItemsDescToLong = $arrayItemsDescToLong;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getArrayItemsNotFound()
    {
        return $this->arrayItemsNotFound;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $arrayItemsNotFound
     * @return Allegro_Web_Api_DoAddDescToItemsResponse
     */
    public function setArrayItemsNotFound($arrayItemsNotFound)
    {
        $this->arrayItemsNotFound = $arrayItemsNotFound;
        return $this;
    }
}
