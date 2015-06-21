<?php

/**
 * Class Allegro_Web_Api_WaitFeedbackStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_WaitFeedbackStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $feItemId
     */
    protected $feItemId = null;

    /**
     * @var string $feItemName
     */
    protected $feItemName = null;

    /**
     * @var int $feToUserId
     */
    protected $feToUserId = null;

    /**
     * @var int $feOp
     */
    protected $feOp = null;

    /**
     * @var string $feAnsCommentType
     */
    protected $feAnsCommentType = null;

    /**
     * @var int $fePossibilityToAdd
     */
    protected $fePossibilityToAdd = null;

    /**
     * @param int    $feItemId
     * @param string $feItemName
     * @param int    $feToUserId
     * @param int    $feOp
     * @param string $feAnsCommentType
     * @param int    $fePossibilityToAdd
     */
    public function __construct($feItemId, $feItemName, $feToUserId, $feOp, $feAnsCommentType, $fePossibilityToAdd)
    {
        $this->feItemId           = $feItemId;
        $this->feItemName         = $feItemName;
        $this->feToUserId         = $feToUserId;
        $this->feOp               = $feOp;
        $this->feAnsCommentType   = $feAnsCommentType;
        $this->fePossibilityToAdd = $fePossibilityToAdd;
    }

    /**
     * @return int
     */
    public function getFeItemId()
    {
        return $this->feItemId;
    }

    /**
     * @param int $feItemId
     * @return Allegro_Web_Api_WaitFeedbackStruct
     */
    public function setFeItemId($feItemId)
    {
        $this->feItemId = $feItemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeItemName()
    {
        return $this->feItemName;
    }

    /**
     * @param string $feItemName
     * @return Allegro_Web_Api_WaitFeedbackStruct
     */
    public function setFeItemName($feItemName)
    {
        $this->feItemName = $feItemName;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeToUserId()
    {
        return $this->feToUserId;
    }

    /**
     * @param int $feToUserId
     * @return Allegro_Web_Api_WaitFeedbackStruct
     */
    public function setFeToUserId($feToUserId)
    {
        $this->feToUserId = $feToUserId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeOp()
    {
        return $this->feOp;
    }

    /**
     * @param int $feOp
     * @return Allegro_Web_Api_WaitFeedbackStruct
     */
    public function setFeOp($feOp)
    {
        $this->feOp = $feOp;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeAnsCommentType()
    {
        return $this->feAnsCommentType;
    }

    /**
     * @param string $feAnsCommentType
     * @return Allegro_Web_Api_WaitFeedbackStruct
     */
    public function setFeAnsCommentType($feAnsCommentType)
    {
        $this->feAnsCommentType = $feAnsCommentType;
        return $this;
    }

    /**
     * @return int
     */
    public function getFePossibilityToAdd()
    {
        return $this->fePossibilityToAdd;
    }

    /**
     * @param int $fePossibilityToAdd
     * @return Allegro_Web_Api_WaitFeedbackStruct
     */
    public function setFePossibilityToAdd($fePossibilityToAdd)
    {
        $this->fePossibilityToAdd = $fePossibilityToAdd;
        return $this;
    }
}
