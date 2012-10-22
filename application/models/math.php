<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Math extends CI_Model
{

    public function addBasic()
    {
        return 1 + 1;
    }

    public function add($value1, $value2)
    {
        return $value1 + $value2;
    }

    public function subtract($value1, $value2)
    {
        return $value1 - $value2;
    }

    public function multiply($value1, $value2)
    {
        return $value1 * $value2;
    }

    public function divide($value1, $value2)
    {
        return $value1 / $value2;
    }

}