<?php

// static methods and properties

// what is a static property or method?
//   - contrast to instance properties and methods
//   - something that belongs to the class, not the instance
//   - eg. a person has a first name and last name, People have a scientific
//     name
// practical usage
//   - keep track of created objects
//   - collection of helper utilities or values where it doesn't make sense to
//     create an object
// how to access static properties and methods
//   - :: operator
//   - PAAMAYIM_NEKUDOTAYIM

// example - javascript's math object in php

class Math
{
    public static $e = 2.718281828;
    public static $pi = 3.14;

    public static function absoluteValue($n)
    {
        if ($n < 0) {
            return $n * -1;
        }
        return $n;
    }

    public static function truncate($n)
    {
        return (int) $n;
    }
}

echo 'Pi is ' . Math::$pi . PHP_EOL;
echo 'The absolute value of -3 is ' . Math::absoluteValue(-3) . PHP_EOL;

// static keyword - used for declaring a method or property static
//
// self keyword
//   - like this but in reference to the class, not the object
// syntax 
//   - self::$property
//   - self::method()
// watch the placement of the `$`! Different than $this

// car example with mix of instance and static

class Car
{
    public static $carsCreated = 0;
    public $make;
    public $model;
    public $owner;

    public function __construct($make, $model, $owner)
    {
        $this->make = $make;
        $this->model = $model;
        $this->owner = $owner;
        self::$carsCreated += 1;
    }

    public function getInfo()
    {
        return "This car is a {$this->make} {$this->model}, and it's owner is {$this->owner}\n";
    }

    public static function getTotalCars()
    {
        return self::$carsCreated;
    }
}

$cars = [
    new Car('honda', 'civic', 'zach'),
    new Car('acura', 'integra', 'michael'),
    new Car('GMC', 'sierra', 'dan'),
];

foreach ($cars as $car) {
    echo $car->getInfo() . PHP_EOL;
}

// how many cars have we created?
echo 'We have created ' . Car::getTotalCars() . PHP_EOL;
