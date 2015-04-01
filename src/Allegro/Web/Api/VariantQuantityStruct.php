<?php

/**
 * Class Allegro_Web_Api_VariantQuantityStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_VariantQuantityStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $mask
     */
    protected $mask = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @param int $mask
     * @param int $quantity
     */
    public function __construct($mask, $quantity)
    {
        $this->mask = $mask;
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * @param int $mask
     * @return Allegro_Web_Api_VariantQuantityStruct
     */
    public function setMask($mask)
    {
        $this->mask = $mask;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return Allegro_Web_Api_VariantQuantityStruct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
}
