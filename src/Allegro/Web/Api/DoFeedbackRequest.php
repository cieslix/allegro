<?php

/**
 * Class Allegro_Web_Api_DoFeedbackRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoFeedbackRequest extends Allegro_Web_Api_Abstract
{
    const FEEDBACK_TYPE_POS = 'POS';
    const FEEDBACK_TYPE_NEG = 'NEG';
    const FEEDBACK_TYPE_NEU = 'NEU';

    const FEEDBACK_FOR_SELLER = 1;
    const FEEDBACK_FOR_BUYER  = 2;

    const USE_TEMPLATE_YES = 1;
    const USE_TEMPLATE_NO  = 0;

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $feItemId
     */
    protected $feItemId = null;

    /**
     * @var int $feUseCommentTemplate
     */
    protected $feUseCommentTemplate = null;

    /**
     * @var int $feToUserId
     */
    protected $feToUserId = null;

    /**
     * @var string $feComment
     */
    protected $feComment = null;

    /**
     * @var string $feCommentType
     */
    protected $feCommentType = null;

    /**
     * @var int $feOp
     */
    protected $feOp = null;

    /**
     * @var Allegro_Web_Api_ArrayOfSellratingestimationstruct $feRating
     */
    protected $feRating = null;

    /**
     * @param string                                            $sessionHandle
     * @param int                                               $feItemId
     * @param int                                               $feUseCommentTemplate
     * @param int                                               $feToUserId
     * @param string                                            $feComment
     * @param string                                            $feCommentType
     * @param int                                               $feOp
     * @param Allegro_Web_Api_ArrayOfSellratingestimationstruct $feRating
     */
    public function __construct($sessionHandle, $feItemId, $feUseCommentTemplate, $feToUserId, $feComment, $feCommentType, $feOp, $feRating)
    {
        $this->sessionHandle        = $sessionHandle;
        $this->feItemId             = $feItemId;
        $this->feUseCommentTemplate = $feUseCommentTemplate;
        $this->feToUserId           = $feToUserId;
        $this->feComment            = $feComment;
        $this->feCommentType        = $feCommentType;
        $this->feOp                 = $feOp;
        $this->feRating             = $feRating;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return Allegro_Web_Api_DoFeedbackRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
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
     * @return Allegro_Web_Api_DoFeedbackRequest
     */
    public function setFeItemId($feItemId)
    {
        $this->feItemId = $feItemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeUseCommentTemplate()
    {
        return $this->feUseCommentTemplate;
    }

    /**
     * @param int $feUseCommentTemplate
     * @return Allegro_Web_Api_DoFeedbackRequest
     */
    public function setFeUseCommentTemplate($feUseCommentTemplate)
    {
        $this->feUseCommentTemplate = $feUseCommentTemplate;
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
     * @return Allegro_Web_Api_DoFeedbackRequest
     */
    public function setFeToUserId($feToUserId)
    {
        $this->feToUserId = $feToUserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeComment()
    {
        return $this->feComment;
    }

    /**
     * @param string $feComment
     * @return Allegro_Web_Api_DoFeedbackRequest
     */
    public function setFeComment($feComment)
    {
        $this->feComment = $feComment;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeCommentType()
    {
        return $this->feCommentType;
    }

    /**
     * @param string $feCommentType
     * @return Allegro_Web_Api_DoFeedbackRequest
     */
    public function setFeCommentType($feCommentType)
    {
        $this->feCommentType = $feCommentType;
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
     * @return Allegro_Web_Api_DoFeedbackRequest
     */
    public function setFeOp($feOp)
    {
        $this->feOp = $feOp;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfSellratingestimationstruct
     */
    public function getFeRating()
    {
        return $this->feRating;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfSellratingestimationstruct $feRating
     * @return Allegro_Web_Api_DoFeedbackRequest
     */
    public function setFeRating($feRating)
    {
        $this->feRating = $feRating;
        return $this;
    }
}
