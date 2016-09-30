<?php 

//practice Throwing
//Must be 60 inches tall to go on roller coaster
function determineHeight($height){
	if(! is_numeric($height)){
		throw new Exception ('$height must be a number');
	}

	if($height < 60){
		throw new Exception ('$height must be over 60 inches, you can\t ride');
	}else{
		return "Enjoy the ride!";
	}
}

//echo determineHeight(70);

//practice using try and catch

function inverse($x) {
	return 1/$x;
}

try {
	echo inverse(5) . "\n";
	echo inverse(0) . "\n";
} catch (Exception $e) {
	echo 'Caught exception: '. $e->getMessage(). "\n";
}