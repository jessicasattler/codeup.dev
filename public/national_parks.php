<?php 
	// <!-- Use require to include db_connect.php. -->
	
	define ("DB_HOST", "127.0.0.1");
	define ("DB_NAME", "parks_db");
	define ("DB_USER", "vagrant");
	define ("DB_PASS", "vagrant");
	define ("RPP",4);


function pageController(){
	require_once '../db_connect.php';
	require_once '../Input.php';

	$errors = [];
	$formInputs = array(
		"name"=>"",
		"location"=>"",
		"date"=>"",
		"area"=>"",
		"description"=>""
	); 
	// I created this array outside of the following if statement so that it is created no matter what.  This is important since it will be output in the page controller and as a result, must be defined no matter what.  I gave it blank values for each of the keys as a default

	if(!empty ($_POST)){


		$stmt = $dbc->prepare('INSERT INTO national_parks(name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

		$name = "";
		$location = "";
		$date = "";
		$area = "";
		$description = "";

		try {
			$name = Input::getString('name');
		}catch(OutOfRangeException $e){
			$errors["name"] = $e->getMessage();
		}catch(InvalidArgumentException $e){
			$erros["name"] = $e->getMessage();
		}catch(LengthException $e){
			$errors["name"] = $e->getMessage();
		}catch (DomainException $e){
			$errors["description"] = $e->getMessage();
		}

	
		try {
			$location = Input::getString('location');
		}catch(OutOfRangeException $e){
			$errors["location"] = $e->getMessage();
		}catch(InvalidArgumentException $e){
			$errors["location"] = $e->getMessage();
		}catch(LengthException $e){
			$errors["location"] = $e->getMessage();
		}catch (DomainException $e){
			$errors["description"] = $e->getMessage();
		}
		
		try {
			$date = Input::getDate('date');
		}catch (Exception $e){
			$errors["date"] = $e->getMessage();
		}		

		try{
			$area = Input::getNumber('area');
		}catch (Exception $e){
			$errors["area"] = $e->getMessage();
			$area = "";
		}catch (InvalidArgumentException $e){
			$errors["area"] = $e->getMessage();
		}catch (OutOfRangeException $e){
			$errors["area"] = $e->getMessage();
		}catch(DomainException $e){
			$errors["area"] = $e->getMessage();
		}catch(RangeException $e){
			$errors["area"] = $e->getMessage();
		}
		

		try{
			$description = Input::getString('description');
		}catch (OutOfRangeException $e){
			$errors["description"] = $e->getMessage();
		}catch (InvalidArgumentException $e){
			$errors["description"] = $e->getMessage();
		}catch (LengthException $e){
			$errors["description"] = $e->getMessage();
		}catch (DomainException $e){
			$errors["description"] = $e->getMessage();
		}

		$formInputs["name"] = Input::getString('name');
		$formInputs["location"] = $location;
		$formInputs["date"] = $date;
		$formInputs["area"] = $area;
		$formInputs["description"] = $description;

		// At this point, we set all the values of the $formInputs array to whatever value was entered by the user.  If the date or area inputs were invalid and the code above threw an error, these values would be set to a blank string.  In this way, we are preserving the valid inputs and setting the invalid ones (the one's the caused an error to be thrown) to an empty string ("")
	
			if(	
				$name != "" &&
				$location != "" &&
				$date  != "" &&
				$area != "" &&
				$description != ""



			){
				$stmt->bindValue(':name', $name, PDO::PARAM_STR);
				$stmt->bindValue(':location',$location,PDO::PARAM_STR);
				$stmt->bindValue(':date_established',$date,PDO::PARAM_STR);
				$stmt->bindValue(':area_in_acres', $area,PDO::PARAM_STR);
				$stmt->bindValue(':description', $description,PDO::PARAM_STR);

				$stmt->execute();

				$formInputs = [
					"name"=>"",
					"location"=>"",
					"date"=>"",
					"area"=>"",
					"description"=>""
				];
				//In the case that all the data was valid and the query was submitted to the database, we want the form entries to be blank, so we set all the values in $formInputs to be blank again 

			}else{
				echo "Please fill out all fields";
			}
		
	}

	//give us PDOStatement instance with all the information from national_parks table, $infoToGet is the command we want to pass to MySQL
	//we pass in the number '1' to the Input::get because the first time we want to go to national parks, we don't have a specific page, so we must set the default to go to page 1
	$pageNumber = Input::get('page','1');
	$offset = (intval($pageNumber) - 1) * RPP ;
	$stmt = $dbc->prepare('SELECT * FROM national_parks LIMIT :limit OFFSET :offset ');

	$stmt->bindValue(':limit', RPP, PDO::PARAM_INT);
	$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

	$stmt-> execute();

	//We store the information from the query method where we're getting back the PDOStatement so we return an instance of the PDOStatement class (different data type)

	//$dbc is like the mail man
	//$statement is the actual mail, we can open the mail, not the mail man
	// $statement = $dbc->query($stmt);



	//The FETCH_ASSOC returns a two dimensional associative array
	$allColumns = $stmt-> fetchAll(PDO::FETCH_ASSOC);

	function getParks($allColumns){
		echo "<table class='table'>";
		echo "<h2>National Parks</h2>";
		echo "<tr>
      			  <th>Name</th>
     			  <th>Location</th>
                  <th>Date Established</th>
     			 <th>Area in Acres</th>
     			 <th>Description</th>
    		 </tr>";
		foreach($allColumns as $park){
		
			echo "<tr><td>".$park['name']."</td><td>".$park['location']."</td><td>".$park['date_established']."</td><td>".$park['area_in_acres']."</td><td>".$park['description']."</td></tr>";
			echo "<br>";
		}
		echo "</table>";
	}

	function makeButtons($page){
		//if it's not page one, then include a "previous" button
		if ($page!= 1){
		echo "<button><a href='national_parks.php?page=".($page-1)."'>Previous</a></button>";

		}
		//make a button for all pages matching the different page numbers
		//the page number should not be hard coded
		for($i=1; $i<28; $i+=1){

			echo "<button><a href='national_parks.php?page=".$i."'>".$i."</a></button>";
		}
		//if the page number is not equal to 15, then include a "next" button
		//page number should not be hard coded
		if ($page!=28){
		echo "<button><a href='national_parks.php?page=".($page+1)."'>Next</a></button>";
		}
	}


	return ([
				'parks'=>$allColumns,
				'pageNum'=>$pageNumber,
				'errorsArray'=>$errors,
				'inputs'=>$formInputs
				//I have added the $formInputs array to be returned by the page controller so that we may access the inputs from the previous attempts to add a park
			]);

}
extract(pageController());
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>National Parks</title>
<!--  	bootstrap  -->
 	<link href="/css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body>
 	<!-- Add a form that allows national parks to be added to your database. Use prepared statements for all queries that contain dynamic data. -->




 	<?php getParks($parks); ?>
 	
 	<?php makeButtons(intval($pageNum)); ?>
 	<h4>Add a Park:</h4>
 	<ul> <!-- I added this unorder list tag in order to put the errors in an unordered list.  Note that the list doesn't close until after the foreach loop.  This means the </ul> tag occurs after each of the errors have been echo'd -->
 	<?php foreach ($errorsArray as $error){ ?>
 		<!-- Similarily, I changed the <h6> tags to <li> tags so that each error is a list item in the unordered list -->
 		<li><?php echo $error .PHP_EOL;} ?></li>
 	</ul>
 	<form method="POST">	
 		<div class="form-group">
 			<!-- <label for="formName">Name</label> -->
 			<input name = "name" type="text" class="form-control" id="formName" placeholder="Name", value = <?php echo '"'.$inputs['name'].'"'; ?> >
 		</div>
 		<div class="form-group">
 			<!-- <label for="formLocation">Location</label> -->
 			<input name = "location" type="text" class="form-control" id="formLocation" placeholder="Location", value = <?php echo '"'.$inputs['location'].'"'; ?> >
 		</div>
 		<div class="form-group">
 		<!-- 	<label for="formDate">Date</label> -->
 			<input name = "date" type="text" class="form-control" id="formDate" placeholder="Date", value = <?php echo '"'.$inputs['date'].'"'; ?> >
 		</div>
 		<div class="form-group">
 			<!-- <label for="formArea">Area</label> -->
 			<input name = "area" type="text" class="form-control" id="formArea" placeholder="Area", value = <?php echo '"'.$inputs['area'].'"'; ?>>
 		</div>
 		<div class="form-group">
 			<!-- <label for="formDescription">Description</label> -->
 			<input name = "description" type="text" class="form-control" id="formDescription" placeholder="Description", value = <?php echo '"'.$inputs['description'].'"'; ?>>
 		</div>

 		<!-- Let's take a quick look at what we did here.  To each of input tags (those are on lines 207, 211, 215, 219, 223), we have added a value attribute.  This attribute will set the value of the input box to whatever we make the attribute equal to. -->
 		<!-- In this case, we are making them equal to <?php echo '"'.$inputs['description'].'"'; ?>, or something like that.  So here we are echoing the value stored in the $inputs variable that we are given by the pageController function.  For instance, for the description input box, we are calling the value in the $inputs array with the key of $description -->
 		<!-- So in this way, we are setting the values of the input boxes to be equal to the values in those input boxes that were submitted.  As explained on line 76, if the date or area perameters through an error, then there value would be an empty string so the user would have another change to enter in value -->
 		<!-- As explained on line 103, if the inputs are correct and a query to the database is performed, then all the values of the array are set to empty strings, meaning that when they are called as the values of the input boxes, they will all be empty. -->
 		 <button type="submit" class="btn btn-primary">Submit</button>
 	</form>


 </body>
 </html>