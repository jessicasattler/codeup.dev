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

    public static function getString($key,$min = 1, $max = 30)
    {

        if(! self::has($key)){
            // throw new Exception("Request does not contain key: '$key'");
            throw new OutOfRangeException("Request does not contain key :'$key'");
        }


        $value = self::get($key);

        if(! is_string($value) || ! is_numeric($value)){
            // throw new Exception("Value '$value' is not a string!");
            throw new InvalidArgumentException(" Value '$value' is not a string or a number!" );
        }

        if (strlen($value)<strlen($min)|| strlen($value)>strlen($max)){
            throw new LengthException(" '$value1' must be less than '$value' or '$value2' must be longer than '$value' ");
        }



        return $value;

    }

    public static function getNumber($key,$min = 1, $max = 30)
    {
        if(! self::has($key)){
            // throw new Exception("Request does not contain key: '$key'");
            throw new OutOfRangeException("Request does not contain key :'$key'");
        }

        $value = self::get($key);

        if(! is_numeric($value)){
            // throw new Exception("Value '$value' is not a number!");
            throw new InvalidArgumentException(" Value '$value' is not a string or a number!" );
        }

        if (($value)<($min)|| ($value)>($max)){
            throw new RangeException(" '$value1' must be less than '$value' or '$value2' must be longer than '$value' ");
        } 

        return $value;
    }

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
