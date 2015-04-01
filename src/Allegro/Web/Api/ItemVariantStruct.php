<?php

/**
 * Class Allegro_Web_Api_ItemVariantStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ItemVariantStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @var Allegro_Web_Api_ArrayOfItemvariantattributestruct $attributes
     */
    protected $attributes = null;

    /**
     * @param string $id
     * @param int $quantity
     * @param Allegro_Web_Api_ArrayOfItemvariantattributestruct $attributes
     */
    public function __construct($id, $quantity, $attributes)
    {
        $this->id = $id;
        $this->quantity = $quantity;
        $this->attributes = $attributes;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Allegro_Web_Api_ItemVariantStruct
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return Allegro_Web_Api_ItemVariantStruct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItemvariantattributestruct
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItemvariantattributestruct $attributes
     * @return Allegro_Web_Api_ItemVariantStruct
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }
}
