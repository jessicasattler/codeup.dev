<?php 

class Student
{
	public $name;
	public $grades;

	public function sayHello()


	{
		return 'Hello from  '. $this->name . '!';
	}

	public function getGradeAverage()
	{
		if (count($this->grades) == 0){
			return 0;
		}
	}

	$sum = 0;
	foreach ($this -> grades as $grade){
		$sum += $grade;
	}

	return $sum / count($this->grades);
}

$billy = new Student();
$billy-> name = 'billy';
$billy-> favoriteLanguage = 'PHP';

var_dump($billy);

$billy->grades = [90,89,78];
//we can treat the following as a push to the grades aray, in this case we're pushing 82
$billy->grades[] = 82;

echo "Billy's average is {$billy->getGradeAverage()}" . PHP_EOL;

class Car
{
	public $make;
	public $model;
	public $color;
	public $vin;
	public $acceleration;
	public $topSpeed;

	public function drive($direction, $speed){

	}
	public function honk(){
		return 'honk, honk';

	}
	public function honkLoudly(){
		return 'HONK, HONK!';
	}

	public function accelerate($time){
		$this->speed += $this-> acceleration * $time;
	}

	public getDescription(){
		return "Make: {$this->make}. Model: {$this -> model}";
	}
}
$honda = new Car();
$honda->make = 'honda';


$lassensCars = [];

$michaelsCar = new Car();
$michaelsCar->make = 'acura';
$michaelsCar->model = 'integra';
$lassensCar[] = $michaelsCar;

$dansCar = new Car();
$dansCar->make = 'GMC';
$dansCar->model = 'sierra';


 ?>