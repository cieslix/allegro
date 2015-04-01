<?php

/**
 * Class Allegro_Web_Api_DoMyBillingItemResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoMyBillingItemResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfItembilling $entryFees
     */
    protected $entryFees = null;

    /**
     * @var Allegro_Web_Api_ArrayOfItembilling $endingFees
     */
    protected $endingFees = null;

    /**
     * @param Allegro_Web_Api_ArrayOfItembilling $entryFees
     * @param Allegro_Web_Api_ArrayOfItembilling $endingFees
     */
    public function __construct($entryFees, $endingFees)
    {
        $this->entryFees = $entryFees;
        $this->endingFees = $endingFees;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItembilling
     */
    public function getEntryFees()
    {
        return $this->entryFees;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItembilling $entryFees
     * @return Allegro_Web_Api_DoMyBillingItemResponse
     */
    public function setEntryFees($entryFees)
    {
        $this->entryFees = $entryFees;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItembilling
     */
    public function getEndingFees()
    {
        return $this->endingFees;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItembilling $endingFees
     * @return Allegro_Web_Api_DoMyBillingItemResponse
     */
    public function setEndingFees($endingFees)
    {
        $this->endingFees = $endingFees;
        return $this;
    }
}
