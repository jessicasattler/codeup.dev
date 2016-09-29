<?php 

class SomethingCool
{
	public $public_property = 'public';
	protected $protected_property = 'protected;'
	private $private_property = 'private';

	public function __get($name)
	{
		var_dump($name);
	}

	public function __set($name, $value)
	{

	}

	public functon setWidth($width)
	{
		$this->width
	}
	
}