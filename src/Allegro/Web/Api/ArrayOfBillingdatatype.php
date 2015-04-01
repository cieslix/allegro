<?php

/**
 * Class Allegro_Web_Api_ArrayOfBillingdatatype
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ArrayOfBillingdatatype extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_BillingDataType[] $item
     */
    protected $item = null;

    /**
     * @param Allegro_Web_Api_BillingDataType[] $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @return Allegro_Web_Api_BillingDataType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param Allegro_Web_Api_BillingDataType[] $item
     * @return Allegro_Web_Api_ArrayOfBillingdatatype
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }
}
