<?php 
require_once "public/Log.php";


class Auth
{
	// 	  Hashing is a process that takes a plain text value and converts it into a scrambled, predictable value, but which cannot be converted back to the original string. Add the following to your Auth class:
	//this value is the string 'password' but hashed
	public static $hash = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	//Auth::attempt() will take in a $username and $password. If the $username is guest and the $password matches the hashed password above then set the LOGGED_IN_USER session variable as before. Use the Log class to log an info message: "User $username logged in.". If either the username or password are incorrect then log an error: "User $username failed to log in!". You will need to use the PHP method password_verify() to check the password hash.

	public static function attempt($username, $password){
		//to use the log class, I had to create a new instance
		$copyLog = new Log();


		if( ($username === 'guest') && (password_verify($password ,self::$hash)) ){
			$_SESSION['logged_in_user'] = $username;
			$copyLog ->info("User {$username} logged in");
		}else{
			$copyLog->error("User {$username} failed to log in!");
		}

	}

	//Auth::check() will return a boolean whether or not a user is logged in.
	public static function check(){
		//we check if this isset because this is only set when the username is equal to guest and when the password is equal to hash
		if(isset($_SESSION['logged_in_user'])){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	//Auth::user() will return the username of the currently logged in user
	public static function user(){
		//we are callling the check method from inside this class
		if(self::check()){
			return ($_SESSION['logged_in_user']);
		}
	}	
	//Auth::logout() will end the session, just like we did in the sessions exercise.
	public static function logout(){
		// 	// clear $_SESSION array
    	session_unset();

     // delete session data on the server
    	session_destroy();

     // ensure client is sent a new session cookie
    	session_regenerate_id();

     // start a new session - session_destroy() ended our previous session so
    // if we want to store any new data in $_SESSION we must start a new one
    	session_start();
	}

}

 ?>