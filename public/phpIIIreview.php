<?php  
//Questions

// 1.Self keyword how to use it:
class Animal{

	public static $name = "a";

	public $color;

	//this function is run automatically (magically)
	public function __construct(){
		echo "Thae class animal was creted";
	}

	//to access a property inside of this class, we need to call self, include the $ when inside the class, outside the class don't include the $ . Self will only be inside the class

	public static function getName(){
		echo self::$name . " is the name of my animal";
	}

	public function getColor(){

	//we use the arrow for properties that are not static
	 	return $this->color;

	}


	public function __destruct(){

	}
}

require 

//static methods and properties

echo Animal::getName();

//non-static methods and properties

$animalObj = new Animal();
$animalObj->color;

$animalObj->getColor();

// 2. Constructors and dest
// 	constructor: the first function that runs when class is created 

// 	You don't need to use them but you can if you want to test something that will run automatically 

// 3. Public keyword on classes

// 4. Classes instances 

// 5. $this 
	
// 	to be able to a property or method inside of a class that is not static

// 6. Understanding the life cycle of code: try to get the overal idea of what we are trying to do, so write steps and follow your own steps to try to understand the procedure you need to follow in your code. For example, I have an html form to log in so create a file called Auth and then start a session. If we create functions, we can use those in other forms in the future. Create code you can work with in the future so that you don't have to do this again in the future. Write all the human steps and then write the code. Maybe use the UML (Universal Model Language) to know what the steps are of what the customer wants (google this). Also name your files that contain classes after the class name and make sure to capitalize that filename or put it in a folder named "classes" too

//7.query strings 
//whatever you put in the url starting with "q", takes that information you put in the google search bar like https://www.google.com/search?q=cats   (this is all GET request, POST is not visible for the user so that's why we would want use POST, anything that is sensitive information to put sensitive information to browser use POST) if you want to add anything to the query, add an ampersand and add what you want
//the ? separates the name of the function or file and the starting of the query string

//8.how cookies ties the session
//cookies are like our ticket or token for admission into a concert, you don't wnat sensitive data spending in this website so this a way to protect your data in a local file they give you, they won't share this with other people. They only live as long as the session is alive? Even when website has remember me checkbox they may forget you when they do updates to the website. THis is a local file stored in our broswer backup file that exists only in our computer, that's why we log into a bank account, we will have to do the longer authentication in each different device we use if we haven't registered it

//9.<input id= "username" name="username"> name attribute is required or else it won't work, it's not the same as the id
// $_POST['username'];
// $_GET['username'];
// $_REQUEST['username'];
//request does both what post and get do, but in the form you do have to only user either POST or GET, $_request is only for php so we can't put that in the html form either way

//how to handle requests on the back end
//



?>