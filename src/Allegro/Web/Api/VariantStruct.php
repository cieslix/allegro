<?php

/**
 * Class Allegro_Web_Api_VariantStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_VariantStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $fid
     */
    protected $fid = null;

    /**
     * @var Allegro_Web_Api_ArrayOfVariantquantitystruct $quantities
     */
    protected $quantities = null;

    /**
     * @param int $fid
     * @param Allegro_Web_Api_ArrayOfVariantquantitystruct $quantities
     */
    public function __construct($fid, $quantities)
    {
        $this->fid = $fid;
        $this->quantities = $quantities;
    }

    /**
     * @return int
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * @param int $fid
     * @return Allegro_Web_Api_VariantStruct
     */
    public function setFid($fid)
    {
        $this->fid = $fid;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfVariantquantitystruct
     */
    public function getQuantities()
    {
        return $this->quantities;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfVariantquantitystruct $quantities
     * @return Allegro_Web_Api_VariantStruct
     */
    public function setQuantities($quantities)
    {
        $this->quantities = $quantities;
        return $this;
    }
}
