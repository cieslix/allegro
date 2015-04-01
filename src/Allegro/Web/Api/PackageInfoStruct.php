<?php

/**
 * Class Allegro_Web_Api_PackageInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PackageInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $operatorId
     */
    protected $operatorId = null;

    /**
     * @var string $packageId
     */
    protected $packageId = null;

    /**
     * @param int $operatorId
     * @param string $packageId
     */
    public function __construct($operatorId, $packageId)
    {
        $this->operatorId = $operatorId;
        $this->packageId = $packageId;
    }

    /**
     * @return int
     */
    public function getOperatorId()
    {
        return $this->operatorId;
    }

    /**
     * @param int $operatorId
     * @return Allegro_Web_Api_PackageInfoStruct
     */
    public function setOperatorId($operatorId)
    {
        $this->operatorId = $operatorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageId()
    {
        return $this->packageId;
    }

    /**
     * @param string $packageId
     * @return Allegro_Web_Api_PackageInfoStruct
     */
    public function setPackageId($packageId)
    {
        $this->packageId = $packageId;
        return $this;
    }
}
