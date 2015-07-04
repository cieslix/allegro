<?php

/**
 * Class Allegro_Web_Api_FieldsValue
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_FieldsValue extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $fid
     */
    protected $fid = null;

    /**
     * @var string $fvalueString
     */
    protected $fvalueString = null;

    /**
     * @var int $fvalueInt
     */
    protected $fvalueInt = null;

    /**
     * @var float $fvalueFloat
     */
    protected $fvalueFloat = null;

    /**
     * @var base64Binary $fvalueImage
     */
    protected $fvalueImage = null;

    /**
     * @var float $fvalueDatetime
     */
    protected $fvalueDatetime = null;

    /**
     * @var string $fvalueDate
     */
    protected $fvalueDate = null;

    /**
     * @var Allegro_Web_Api_RangeIntValueStruct $fvalueRangeInt
     */
    protected $fvalueRangeInt = null;

    /**
     * @var Allegro_Web_Api_RangeFloatValueStruct $fvalueRangeFloat
     */
    protected $fvalueRangeFloat = null;

    /**
     * @var Allegro_Web_Api_RangeDateValueStruct $fvalueRangeDate
     */
    protected $fvalueRangeDate = null;

    /**
     * @param int                                   $fid
     * @param string                                $fvalueString
     * @param int                                   $fvalueInt
     * @param float                                 $fvalueFloat
     * @param base64Binary                          $fvalueImage
     * @param float                                 $fvalueDatetime
     * @param string                                $fvalueDate
     * @param Allegro_Web_Api_RangeIntValueStruct   $fvalueRangeInt
     * @param Allegro_Web_Api_RangeFloatValueStruct $fvalueRangeFloat
     * @param Allegro_Web_Api_RangeDateValueStruct  $fvalueRangeDate
     */
    public function __construct($fid, $fvalueString = null, $fvalueInt = null, $fvalueFloat = null,
                                $fvalueImage = null, $fvalueDatetime = null, $fvalueDate = null,
                                $fvalueRangeInt = null, $fvalueRangeFloat = null, $fvalueRangeDate = null)
    {
        $this->fid              = $fid;
        $this->fvalueString     = $fvalueString;
        $this->fvalueInt        = $fvalueInt;
        $this->fvalueFloat      = $fvalueFloat;
        $this->fvalueImage      = $fvalueImage;
        $this->fvalueDatetime   = $fvalueDatetime;
        $this->fvalueDate       = $fvalueDate;
        $this->fvalueRangeInt   = $fvalueRangeInt;
        $this->fvalueRangeFloat = $fvalueRangeFloat;
        $this->fvalueRangeDate  = $fvalueRangeDate;
    }

    /**
     * @return int
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * @param int $fid
     * @return Allegro_Web_Api_FieldsValue
     */
    public function setFid($fid)
    {
        $this->fid = $fid;
        return $this;
    }

    /**
     * @return string
     */
    public function getFvalueString()
    {
        return $this->fvalueString;
    }

    /**
     * @param string $fvalueString
     * @return Allegro_Web_Api_FieldsValue
     */
    public function setFvalueString($fvalueString)
    {
        $this->fvalueString = $fvalueString;
        return $this;
    }

    /**
     * @return int
     */
    public function getFvalueInt()
    {
        return $this->fvalueInt;
    }

    /**
     * @param int $fvalueInt
     * @return Allegro_Web_Api_FieldsValue
     */
    public function setFvalueInt($fvalueInt)
    {
        $this->fvalueInt = $fvalueInt;
        return $this;
    }

    /**
     * @return float
     */
    public function getFvalueFloat()
    {
        return $this->fvalueFloat;
    }

    /**
     * @param float $fvalueFloat
     * @return Allegro_Web_Api_FieldsValue
     */
    public function setFvalueFloat($fvalueFloat)
    {
        $this->fvalueFloat = $fvalueFloat;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getFvalueImage()
    {
        return $this->fvalueImage;
    }

    /**
     * @param base64Binary $fvalueImage
     * @return Allegro_Web_Api_FieldsValue
     */
    public function setFvalueImage($fvalueImage)
    {
        $this->fvalueImage = $fvalueImage;
        return $this;
    }

    /**
     * @return float
     */
    public function getFvalueDatetime()
    {
        return $this->fvalueDatetime;
    }

    /**
     * @param float $fvalueDatetime
     * @return Allegro_Web_Api_FieldsValue
     */
    public function setFvalueDatetime($fvalueDatetime)
    {
        $this->fvalueDatetime = $fvalueDatetime;
        return $this;
    }

    /**
     * @return string
     */
    public function getFvalueDate()
    {
        return $this->fvalueDate;
    }

    /**
     * @param string $fvalueDate
     * @return Allegro_Web_Api_FieldsValue
     */
    public function setFvalueDate($fvalueDate)
    {
        $this->fvalueDate = $fvalueDate;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_RangeIntValueStruct
     */
    public function getFvalueRangeInt()
    {
        return $this->fvalueRangeInt;
    }

    /**
     * @param Allegro_Web_Api_RangeIntValueStruct $fvalueRangeInt
     * @return Allegro_Web_Api_FieldsValue
     */
    public function setFvalueRangeInt($fvalueRangeInt)
    {
        $this->fvalueRangeInt = $fvalueRangeInt;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_RangeFloatValueStruct
     */
    public function getFvalueRangeFloat()
    {
        return $this->fvalueRangeFloat;
    }

    /**
     * @param Allegro_Web_Api_RangeFloatValueStruct $fvalueRangeFloat
     * @return Allegro_Web_Api_FieldsValue
     */
    public function setFvalueRangeFloat($fvalueRangeFloat)
    {
        $this->fvalueRangeFloat = $fvalueRangeFloat;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_RangeDateValueStruct
     */
    public function getFvalueRangeDate()
    {
        return $this->fvalueRangeDate;
    }

    /**
     * @param Allegro_Web_Api_RangeDateValueStruct $fvalueRangeDate
     * @return Allegro_Web_Api_FieldsValue
     */
    public function setFvalueRangeDate($fvalueRangeDate)
    {
        $this->fvalueRangeDate = $fvalueRangeDate;
        return $this;
    }
}
