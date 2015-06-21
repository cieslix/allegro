<?php

/**
 * Class Allegro_Web_Api_PostBuyFormPackageInfoStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_PostBuyFormPackageInfoStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfString $packageIdsAdded
     */
    protected $packageIdsAdded = null;

    /**
     * @var Allegro_Web_Api_ArrayOfString $packageIdsNotAddedIncorrectOperatorId
     */
    protected $packageIdsNotAddedIncorrectOperatorId = null;

    /**
     * @var Allegro_Web_Api_ArrayOfString $packageIdsNotAddedIncorrectPackageId
     */
    protected $packageIdsNotAddedIncorrectPackageId = null;

    /**
     * @param Allegro_Web_Api_ArrayOfString $packageIdsAdded
     * @param Allegro_Web_Api_ArrayOfString $packageIdsNotAddedIncorrectOperatorId
     * @param Allegro_Web_Api_ArrayOfString $packageIdsNotAddedIncorrectPackageId
     */
    public function __construct($packageIdsAdded, $packageIdsNotAddedIncorrectOperatorId, $packageIdsNotAddedIncorrectPackageId)
    {
        $this->packageIdsAdded                       = $packageIdsAdded;
        $this->packageIdsNotAddedIncorrectOperatorId = $packageIdsNotAddedIncorrectOperatorId;
        $this->packageIdsNotAddedIncorrectPackageId  = $packageIdsNotAddedIncorrectPackageId;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getPackageIdsAdded()
    {
        return $this->packageIdsAdded;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $packageIdsAdded
     * @return Allegro_Web_Api_PostBuyFormPackageInfoStruct
     */
    public function setPackageIdsAdded($packageIdsAdded)
    {
        $this->packageIdsAdded = $packageIdsAdded;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getPackageIdsNotAddedIncorrectOperatorId()
    {
        return $this->packageIdsNotAddedIncorrectOperatorId;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $packageIdsNotAddedIncorrectOperatorId
     * @return Allegro_Web_Api_PostBuyFormPackageInfoStruct
     */
    public function setPackageIdsNotAddedIncorrectOperatorId($packageIdsNotAddedIncorrectOperatorId)
    {
        $this->packageIdsNotAddedIncorrectOperatorId = $packageIdsNotAddedIncorrectOperatorId;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getPackageIdsNotAddedIncorrectPackageId()
    {
        return $this->packageIdsNotAddedIncorrectPackageId;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $packageIdsNotAddedIncorrectPackageId
     * @return Allegro_Web_Api_PostBuyFormPackageInfoStruct
     */
    public function setPackageIdsNotAddedIncorrectPackageId($packageIdsNotAddedIncorrectPackageId)
    {
        $this->packageIdsNotAddedIncorrectPackageId = $packageIdsNotAddedIncorrectPackageId;
        return $this;
    }
}
