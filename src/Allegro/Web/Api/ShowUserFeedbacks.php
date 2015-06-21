<?php

/**
 * Class Allegro_Web_Api_ShowUserFeedbacks
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_ShowUserFeedbacks extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $userFLastWeek
     */
    protected $userFLastWeek = null;

    /**
     * @var int $userFLastMonth
     */
    protected $userFLastMonth = null;

    /**
     * @var int $userFAll
     */
    protected $userFAll = null;

    /**
     * @var int $userFSoldItems
     */
    protected $userFSoldItems = null;

    /**
     * @var int $userFBuyItems
     */
    protected $userFBuyItems = null;

    /**
     * @param int $userFLastWeek
     * @param int $userFLastMonth
     * @param int $userFAll
     * @param int $userFSoldItems
     * @param int $userFBuyItems
     */
    public function __construct($userFLastWeek, $userFLastMonth, $userFAll, $userFSoldItems, $userFBuyItems)
    {
        $this->userFLastWeek  = $userFLastWeek;
        $this->userFLastMonth = $userFLastMonth;
        $this->userFAll       = $userFAll;
        $this->userFSoldItems = $userFSoldItems;
        $this->userFBuyItems  = $userFBuyItems;
    }

    /**
     * @return int
     */
    public function getUserFLastWeek()
    {
        return $this->userFLastWeek;
    }

    /**
     * @param int $userFLastWeek
     * @return Allegro_Web_Api_ShowUserFeedbacks
     */
    public function setUserFLastWeek($userFLastWeek)
    {
        $this->userFLastWeek = $userFLastWeek;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserFLastMonth()
    {
        return $this->userFLastMonth;
    }

    /**
     * @param int $userFLastMonth
     * @return Allegro_Web_Api_ShowUserFeedbacks
     */
    public function setUserFLastMonth($userFLastMonth)
    {
        $this->userFLastMonth = $userFLastMonth;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserFAll()
    {
        return $this->userFAll;
    }

    /**
     * @param int $userFAll
     * @return Allegro_Web_Api_ShowUserFeedbacks
     */
    public function setUserFAll($userFAll)
    {
        $this->userFAll = $userFAll;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserFSoldItems()
    {
        return $this->userFSoldItems;
    }

    /**
     * @param int $userFSoldItems
     * @return Allegro_Web_Api_ShowUserFeedbacks
     */
    public function setUserFSoldItems($userFSoldItems)
    {
        $this->userFSoldItems = $userFSoldItems;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserFBuyItems()
    {
        return $this->userFBuyItems;
    }

    /**
     * @param int $userFBuyItems
     * @return Allegro_Web_Api_ShowUserFeedbacks
     */
    public function setUserFBuyItems($userFBuyItems)
    {
        $this->userFBuyItems = $userFBuyItems;
        return $this;
    }
}
