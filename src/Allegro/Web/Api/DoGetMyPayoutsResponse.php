<?php

/**
 * Class Allegro_Web_Api_DoGetMyPayoutsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetMyPayoutsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfUserpayoutstruct $payTransPayout
     */
    protected $payTransPayout = null;

    /**
     * @param Allegro_Web_Api_ArrayOfUserpayoutstruct $payTransPayout
     */
    public function __construct($payTransPayout)
    {
        $this->payTransPayout = $payTransPayout;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfUserpayoutstruct
     */
    public function getPayTransPayout()
    {
        return $this->payTransPayout;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfUserpayoutstruct $payTransPayout
     * @return Allegro_Web_Api_DoGetMyPayoutsResponse
     */
    public function setPayTransPayout($payTransPayout)
    {
        $this->payTransPayout = $payTransPayout;
        return $this;
    }
}
