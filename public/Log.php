<?php 
// Log.php contains a class called Log that will be the wrapper for your logger functions. Filenames for classes should match their class name.

//this is the blueprint to an apartment for example
//log_test.php is the specific apartment for example, for a red apartment

//Visibility:
//limit the visibility of the $handle and $filename properties.
//using setters, ensure that the filename is a string
class Log{
	private $filename;
	private $handle;
	public $datetime;

	public function __construct($prefix = 'log'){
		
		// //Open the $filename for appending and assign the file pointer to the property $handle

		$this->datetime = date("Y-m-d");
		$this->filename = "$prefix-{$this->datetime}.log";
		// $this->setFilename($filename);
		$this->handle = fopen($this->filename, "a");
		// $this->setHandle($handle);
	}

	//new
	protected function setFilename($filename)
	{
		$this->filename = strval($filename);
	}

	protected function setHandle($handle)
	{
		$this->handle = strval($handle);
	}

	// protected function getFilename()
	// {
	// 	return $this->$prefix-{$this->datetime}.log;
	// }

	// protected function getHandle()
	// {
	// 	return $this->fopen($this->filename, "a");
	// }

		//Add a destructor to close $handle when the class is destroyed.
	public function __destruct()
	{
		fclose($this->handle);
	}
	// A method called logMessage() that will take in a log level and message as before. It will open the file stored in $filename for appending, output the message in the same format as before, and then close the handle

	public function logMessage($logLevel,$message){

		// Methods info() and error() that will take in a message and forward it on to logMessage() along with the relevant log level.
		$string = "{$this->datetime} $logLevel $message".PHP_EOL;
		fwrite($this->handle, $string);

	}
	public function error($message){
		//to access the methods inside of our class while we are in the class, then use the "$this" keyword 
		$this->logMessage('ERROR', $message);
	}

	public function info($message){
		//to access the methods inside of our class while we are in the class, then use the "$this" keyword
		$this->logMessage('INFO', $message);

	}
	//we don't want the methods to be called until we call them in the copies (instances)

	// constructor:
	// takes in a parameter called $prefix. If nothing is passed to the constructor, the $prefix should default to 'log'.


}
 ?>
