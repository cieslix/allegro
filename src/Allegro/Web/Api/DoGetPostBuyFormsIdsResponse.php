<?php

/**
 * Class Allegro_Web_Api_DoGetPostBuyFormsIdsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoGetPostBuyFormsIdsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $formsCount
     */
    protected $formsCount = null;

    /**
     * @var Allegro_Web_Api_ArrayOfLong $formsIds
     */
    protected $formsIds = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFilterslisttype $filtersList
     */
    protected $filtersList = null;

    /**
     * @param int                                    $formsCount
     * @param Allegro_Web_Api_ArrayOfLong            $formsIds
     * @param Allegro_Web_Api_ArrayOfFilterslisttype $filtersList
     */
    public function __construct($formsCount, $formsIds, $filtersList)
    {
        $this->formsCount  = $formsCount;
        $this->formsIds    = $formsIds;
        $this->filtersList = $filtersList;
    }

    /**
     * @return int
     */
    public function getFormsCount()
    {
        return $this->formsCount;
    }

    /**
     * @param int $formsCount
     * @return Allegro_Web_Api_DoGetPostBuyFormsIdsResponse
     */
    public function setFormsCount($formsCount)
    {
        $this->formsCount = $formsCount;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getFormsIds()
    {
        return $this->formsIds;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $formsIds
     * @return Allegro_Web_Api_DoGetPostBuyFormsIdsResponse
     */
    public function setFormsIds($formsIds)
    {
        $this->formsIds = $formsIds;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFilterslisttype
     */
    public function getFiltersList()
    {
        return $this->filtersList;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFilterslisttype $filtersList
     * @return Allegro_Web_Api_DoGetPostBuyFormsIdsResponse
     */
    public function setFiltersList($filtersList)
    {
        $this->filtersList = $filtersList;
        return $this;
    }
}
