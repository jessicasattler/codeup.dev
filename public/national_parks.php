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

	


	$stmt = $dbc->prepare('INSERT INTO national_parks(name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

	$name = Input::get('name');
	$location = Input::get('location');
	$date = Input::get('date');
	$area = Input::get('area');
	$description = Input::get('description');


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

		var_dump($date);
		$stmt->execute();
	}else{
		echo "Please fill out all fields";
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
		for($i=1; $i<25; $i+=1){

			echo "<button><a href='national_parks.php?page=".$i."'>".$i."</a></button>";
		}
		//if the page number is not equal to 15, then include a "next" button
		//page number should not be hard coded
		if ($page!=25){
		echo "<button><a href='national_parks.php?page=".($page+1)."'>Next</a></button>";
		}
	}

	// function formatDateForMySql($date){
	// 	return date_create($date)->format('Y-m-d');
	// }

	// function isValidDate($date){
	// 	return strtotime($date) !== false;
	// }

	// var_dump(isValidDate(5-7-43));
	// var_dump(formatDateForMySql('next Thursday'));

	// <!-- Make sure all users are not empty before you try to insert into your database	
 // 	Make sure we get back a date in numeric values using the date object and then look at area and make sure we get back area in numbers -->



	return ([
				'parks'=>$allColumns,
				'pageNum'=>$pageNumber
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
 	<h2>Add a Park:</h2>
 	<form method="POST">	
 		<div class="form-group">
 			<!-- <label for="formName">Name</label> -->
 			<input name = "name" type="text" class="form-control" id="formName" placeholder="Name">
 		</div>
 		<div class="form-group">
 			<!-- <label for="formLocation">Location</label> -->
 			<input name = "location" type="text" class="form-control" id="formLocation" placeholder="Location">
 		</div>
 		<div class="form-group">
 		<!-- 	<label for="formDate">Date</label> -->
 			<input name = "date" type="text" class="form-control" id="formDate" placeholder="Date">
 		</div>
 		<div class="form-group">
 			<!-- <label for="formArea">Area</label> -->
 			<input name = "area" type="text" class="form-control" id="formArea" placeholder="Area">
 		</div>
 		<div class="form-group">
 			<!-- <label for="formDescription">Description</label> -->
 			<input name = "description" type="text" class="form-control" id="formDescription" placeholder="Description">
 		</div>
 		 <button type="submit" class="btn btn-primary">Submit</button>
 	</form>


 </body>
 </html>