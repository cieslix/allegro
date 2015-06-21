<?php

/**
 * Class Allegro_Web_Api_DoFinishItemsResponse
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoFinishItemsResponse extends Allegro_Web_Api_Abstract
{
    /**
     * @var Allegro_Web_Api_ArrayOfLong $finishItemsSucceed
     */
    protected $finishItemsSucceed = null;

    /**
     * @var Allegro_Web_Api_ArrayOfFinishfailurestruct $finishItemsFailed
     */
    protected $finishItemsFailed = null;

    /**
     * @param Allegro_Web_Api_ArrayOfLong                $finishItemsSucceed
     * @param Allegro_Web_Api_ArrayOfFinishfailurestruct $finishItemsFailed
     */
    public function __construct($finishItemsSucceed, $finishItemsFailed)
    {
        $this->finishItemsSucceed = $finishItemsSucceed;
        $this->finishItemsFailed  = $finishItemsFailed;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfLong
     */
    public function getFinishItemsSucceed()
    {
        return $this->finishItemsSucceed;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfLong $finishItemsSucceed
     * @return Allegro_Web_Api_DoFinishItemsResponse
     */
    public function setFinishItemsSucceed($finishItemsSucceed)
    {
        $this->finishItemsSucceed = $finishItemsSucceed;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfFinishfailurestruct
     */
    public function getFinishItemsFailed()
    {
        return $this->finishItemsFailed;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfFinishfailurestruct $finishItemsFailed
     * @return Allegro_Web_Api_DoFinishItemsResponse
     */
    public function setFinishItemsFailed($finishItemsFailed)
    {
        $this->finishItemsFailed = $finishItemsFailed;
        return $this;
    }
}
