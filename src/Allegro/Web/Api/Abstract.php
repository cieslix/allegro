<?php

/**
 * Class Allegro_Web_Object_Abstract
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
abstract class Allegro_Web_Api_Abstract extends stdClass implements Countable, ArrayAccess
{
    /**
     * @param string $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->{$this->_toCamelCase($offset)});
    }

    /**
     * @param string $string
     * @return string
     */
    protected function _toCamelCase($string)
    {
        return preg_replace_callback('/\_+./', function ($match) use ($string) {
            return str_replace('_', '', strtoupper($match[0]));
        }, $string);
    }

    /**
     * @param string $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->{$this->_toCamelCase($offset)};
    }

    /**
     * @param string $offset
     * @param mixed  $value
     * @return $this
     */
    public function offsetSet($offset, $value)
    {
        $this->{$this->_toCamelCase($offset)} = $value;
        return $this;
    }

    /**
     * @param string $offset
     * @return $this
     */
    public function offsetUnset($offset)
    {
        unset($this->{$this->_toCamelCase($offset)});
        return $this;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count(get_object_vars($this));
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $array = get_object_vars($this);
        foreach ($array as $key => $value) {
            $newKey         = $this->_toUnderscore($key);
            $array[$newKey] = $value;
            unset($array[$key]);
        }
        return $array;
    }

    /**
     * @param string $string
     * @return string
     */
    protected function _toUnderscore($string)
    {
        return preg_replace_callback('/[A-Z]/', function ($match) use ($string) {
            return sprintf("_%s", strtolower($match[0]));
        }, $string);
    }
}
