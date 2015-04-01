<?php

/**
 * Class Allegro_Web_Api_DoCancelTransactionResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoCancelTransactionResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $cancellationResult
     */
    protected $cancellationResult = null;

    /**
     * @param int $cancellationResult
     */
    public function __construct($cancellationResult)
    {
        $this->cancellationResult = $cancellationResult;
    }

    /**
     * @return int
     */
    public function getCancellationResult()
    {
        return $this->cancellationResult;
    }

    /**
     * @param int $cancellationResult
     * @return Allegro_Web_Api_DoCancelTransactionResponse
     */
    public function setCancellationResult($cancellationResult)
    {
        $this->cancellationResult = $cancellationResult;
        return $this;
    }
}
