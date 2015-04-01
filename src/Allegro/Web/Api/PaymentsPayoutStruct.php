<?php

/**
 * Class Allegro_Web_Api_PaymentsPayoutStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PaymentsPayoutStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $payoutType
     */
    protected $payoutType = null;

    /**
     * @var Allegro_Web_Api_PayoutAutoSettingsStruct $payoutAutoSettings
     */
    protected $payoutAutoSettings = null;

    /**
     * @param int $payoutType
     * @param Allegro_Web_Api_PayoutAutoSettingsStruct $payoutAutoSettings
     */
    public function __construct($payoutType, $payoutAutoSettings)
    {
        $this->payoutType = $payoutType;
        $this->payoutAutoSettings = $payoutAutoSettings;
    }

    /**
     * @return int
     */
    public function getPayoutType()
    {
        return $this->payoutType;
    }

    /**
     * @param int $payoutType
     * @return Allegro_Web_Api_PaymentsPayoutStruct
     */
    public function setPayoutType($payoutType)
    {
        $this->payoutType = $payoutType;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_PayoutAutoSettingsStruct
     */
    public function getPayoutAutoSettings()
    {
        return $this->payoutAutoSettings;
    }

    /**
     * @param Allegro_Web_Api_PayoutAutoSettingsStruct $payoutAutoSettings
     * @return Allegro_Web_Api_PaymentsPayoutStruct
     */
    public function setPayoutAutoSettings($payoutAutoSettings)
    {
        $this->payoutAutoSettings = $payoutAutoSettings;
        return $this;
    }
}
