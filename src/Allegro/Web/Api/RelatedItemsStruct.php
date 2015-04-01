<?php

/**
 * Class Allegro_Web_Api_RelatedItemsStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_RelatedItemsStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfRelateditemstruct $relatedItemsInfo
     */
    protected $relatedItemsInfo = null;

    /**
     * @var float $relatedItemsAmount
     */
    protected $relatedItemsAmount = null;

    /**
     * @param Allegro_Web_Api_ArrayOfRelateditemstruct $relatedItemsInfo
     * @param float $relatedItemsAmount
     */
    public function __construct($relatedItemsInfo, $relatedItemsAmount)
    {
        $this->relatedItemsInfo = $relatedItemsInfo;
        $this->relatedItemsAmount = $relatedItemsAmount;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfRelateditemstruct
     */
    public function getRelatedItemsInfo()
    {
        return $this->relatedItemsInfo;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfRelateditemstruct $relatedItemsInfo
     * @return Allegro_Web_Api_RelatedItemsStruct
     */
    public function setRelatedItemsInfo($relatedItemsInfo)
    {
        $this->relatedItemsInfo = $relatedItemsInfo;
        return $this;
    }

    /**
     * @return float
     */
    public function getRelatedItemsAmount()
    {
        return $this->relatedItemsAmount;
    }

    /**
     * @param float $relatedItemsAmount
     * @return Allegro_Web_Api_RelatedItemsStruct
     */
    public function setRelatedItemsAmount($relatedItemsAmount)
    {
        $this->relatedItemsAmount = $relatedItemsAmount;
        return $this;
    }
}
