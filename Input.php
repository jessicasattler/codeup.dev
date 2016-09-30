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

   // Update your getString() and getNumber() methods to each take two optional parameters: $min and $max. Update your methods in the following manner:
    // If $key is not a string, or $min & $max are not numbers, throw an InvalidArgumentException.
    // If the requested key is missing from the input, throw an OutOfRangeException
    // If the value is the wrong type, throw a DomainException
    // If a string is shorter than $min or longer than $max, throw a LengthException
    // If a number is less than $min or larger than $max, throw a RangeException

    public static function getString($key, $min, $max)
    {
        $value = self::get($key);

        if(! self::has($key)){
            // throw new Exception("Request does not contain key: '$key'");
            throw new OutOfRangeException("Request does not contain key :'$key'");
        }


        if(! is_string($value)){
            // throw new Exception("Value '$value' is not a string!");
            throw new InvalidArgumentException(" Value '$value' is not a string or a number!" );
        }

        if (strlen($value)>$min && strlen($value)<$max){
            throw new LengthException(" '$value' must be less than '$max' or '$value' must be longer than '$min' ");
        }



        return $value;

    }

    public static function getNumber($key,$min, $max)
    {
        // $value = self::get($key);

        if(! self::has($key)){
            // throw new Exception("Request does not contain key: '$key'");
            throw new OutOfRangeException("Request does not contain key :'$key'");
        }

        if(! is_numeric($key)){
            // throw new Exception("key '$key' is not a number!");
            throw new InvalidArgumentException(" key '$key' is not a string or a number!" );
        }

        if (($key)<($min)|| ($key)>($max)){
            throw new RangeException(" '$min' must be less than '$key' or '$max' must be longer than '$key' ");
        } 

        return $key;
    }

    //update the following to match the previous methods with the custom exceptions
    public static function getDate($key)
    {
        if(! self::has($key)){
            throw new Exception("Request does not contain key: '$key'");
        }

        $value = self::get($key);
        if (preg_match("^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$^",$value))
            {
                $d = DateTime::createFromFormat('Y-m-d', $value);
                if (!($d && $d->format('Y-m-d') === $value)){
                    throw new Exception("Value '$value' is not a valid date");
                }
        }else{
            throw new Exception("Value '$value' is not a date");
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
