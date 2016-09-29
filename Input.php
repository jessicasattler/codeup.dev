<?php

class Input
{
    /**
     * Check if a given value was passed in the request
        
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        // TODO: Fill in this function
        if(isset($_REQUEST[$key])){
            return true;
        }else{
            return false;
        }

    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = '')
    {
        // TODO: Fill in this function
        if (self::has($key)){
            return $_REQUEST[$key];
        }else{
            return $default;
        }
    }

    // Each of these methods should use the get() method internally to retrieve the value from $_POST or $_GET. If the values does not exist, or match the expected type, throw an exception.
    public static function getString($key)
    {
        if(! self::has($key)){
            throw new Exception("Request does not contain key: '$key'");
        }
        $value = self::get($key);

        if(! is_string($value)){
            throw new Exception("Value '$value' is not a string!");
        }

        return $value;

    }

    public static function getNumber($key)
    {
        if(! self::has($key)){
            throw new Exception("Request does not contain key: '$key'");
        }

        $value = self::get($key);

        if(! is_numeric($value)){
            throw new Exception("Value '$value' is not a number!");
        }

        return $value;
    }

    //or zach's way
    //public static function get($key, $default = null){
    // return self::has($key)?$_REQUEST[$key] : $default;
//  }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}

}
