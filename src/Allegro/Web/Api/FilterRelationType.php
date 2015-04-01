<?php

/**
 * Class Allegro_Web_Api_FilterRelationType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_FilterRelationType extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfString $relationAnd
     */
    protected $relationAnd = null;

    /**
     * @var Allegro_Web_Api_ArrayOfString $relationOr
     */
    protected $relationOr = null;

    /**
     * @var Allegro_Web_Api_ArrayOfString $relationExclude
     */
    protected $relationExclude = null;

    /**
     * @param Allegro_Web_Api_ArrayOfString $relationAnd
     * @param Allegro_Web_Api_ArrayOfString $relationOr
     * @param Allegro_Web_Api_ArrayOfString $relationExclude
     */
    public function __construct($relationAnd, $relationOr, $relationExclude)
    {
        $this->relationAnd = $relationAnd;
        $this->relationOr = $relationOr;
        $this->relationExclude = $relationExclude;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getRelationAnd()
    {
        return $this->relationAnd;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $relationAnd
     * @return Allegro_Web_Api_FilterRelationType
     */
    public function setRelationAnd($relationAnd)
    {
        $this->relationAnd = $relationAnd;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getRelationOr()
    {
        return $this->relationOr;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $relationOr
     * @return Allegro_Web_Api_FilterRelationType
     */
    public function setRelationOr($relationOr)
    {
        $this->relationOr = $relationOr;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfString
     */
    public function getRelationExclude()
    {
        return $this->relationExclude;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfString $relationExclude
     * @return Allegro_Web_Api_FilterRelationType
     */
    public function setRelationExclude($relationExclude)
    {
        $this->relationExclude = $relationExclude;
        return $this;
    }
}
