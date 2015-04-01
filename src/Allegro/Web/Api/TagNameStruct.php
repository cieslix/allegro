<?php

/**
 * Class Allegro_Web_Api_TagNameStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_TagNameStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $tagName
     */
    protected $tagName = null;

    /**
     * @param string $tagName
     */
    public function __construct($tagName)
    {
        $this->tagName = $tagName;
    }

    /**
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * @param string $tagName
     * @return Allegro_Web_Api_TagNameStruct
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
        return $this;
    }
}
