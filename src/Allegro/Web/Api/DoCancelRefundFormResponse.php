<?php

/**
 * Class Allegro_Web_Api_DoCancelRefundFormResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoCancelRefundFormResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var boolean $cancellationResult
     */
    protected $cancellationResult = null;

    /**
     * @param boolean $cancellationResult
     */
    public function __construct($cancellationResult)
    {
        $this->cancellationResult = $cancellationResult;
    }

    /**
     * @return boolean
     */
    public function getCancellationResult()
    {
        return $this->cancellationResult;
    }

    /**
     * @param boolean $cancellationResult
     * @return Allegro_Web_Api_DoCancelRefundFormResponse
     */
    public function setCancellationResult($cancellationResult)
    {
        $this->cancellationResult = $cancellationResult;
        return $this;
    }
}
