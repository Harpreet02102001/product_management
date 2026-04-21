<?php

class Validator
{
    // validation for string/ productCode
    public static function productCode($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    // validation for productName
    public static function productName($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    // validation for unitMeasure field
    public static function unitMeasure($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    // validation for category field
    public static function category($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    // validation for the price field
    public static function price($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    // validation for tax field
    public static function tax($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    //validation for hsnCode
    public static function hsnCode($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    public static function shelfLife($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }


    //------------------------------------ validations for  user form----------------------------------------------
    // ------------------------------------validation for  name fields---------------------------------------------
    public static function name($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    // validation for mail field
    public static function mail($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    // validation for loginId
    public static function loginId($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    // validation for mobileNo
    public static function mobileNo($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    // validation for department 
    public static function department($value, $min  = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    // validation for role
    public static function role($value, $min  = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    // validation for password
    public static function password($value, $min  = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
    // validation for status
    public static function status($value, $min  = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }
}
    

    // public static function email($value)
    // {
        //     return filter_var($value, FILTER_VALIDATE_EMAIL);
        // }