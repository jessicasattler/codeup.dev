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

	if (Input::has('name')){
		$stmt = $dbc->prepare('INSERT INTO national_parks(name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');
		$stmt->bindValue(':name',Input::get('name'), PDO::PARAM_STR);
		$stmt->bindValue(':location',Input::get('location'),PDO::PARAM_STR);
		$stmt->bindValue(':date_established', Input::get('date'),PDO::PARAM_STR);
		$stmt->bindValue(':area_in_acres', Input::get('area'),PDO::PARAM_STR);
		$stmt->bindValue(':description', Input::get('description'),PDO::PARAM_STR);

		$stmt->execute();

	}
	//Update the query(s) in national_parks.php to use prepared statements, in particular for the limit and offset.

	//give us PDOStatement instance with all the information from national_parks table, $infoToGet is the command we want to pass to MySQL
	$pageNumber = Input::get('page');
	$offset = (intval($pageNumber) - 1) * RPP ;
	// $infoToGet = 'SELECT * FROM national_parks LIMIT '.RPP.' OFFSET ' . $offset;
	$stmt = $dbc->prepare('SELECT * FROM national_parks LIMIT :limit OFFSET :offset ');

	$stmt->bindValue(':limit', RPP, PDO::PARAM_INT);
	$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

	$stmt->execute();

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
		for($i=1; $i<16; $i+=1){

			echo "<button><a href='national_parks.php?page=".$i."'>".$i."</a></button>";
		}
		//if the page number is not equal to 15, then include a "next" button
		if ($page!=15){
		echo "<button><a href='national_parks.php?page=".($page+1)."'>Next</a></button>";
		}
	}
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
 			<label for="formName">Name</label>
 			<input name = "name" type="text" class="form-control" id="formName" placeholder="Name">
 		</div>
 		<div class="form-group">
 			<label for="formLocation">Location</label>
 			<input name = "location" type="text" class="form-control" id="formLocation" placeholder="Location">
 		</div>
 		<div class="form-group">
 			<label for="formDate">Date</label>
 			<input name = "date" type="text" class="form-control" id="formDate" placeholder="Date">
 		</div>
 		<div class="form-group">
 			<label for="formArea">Area</label>
 			<input name = "area" type="text" class="form-control" id="formArea" placeholder="Area">
 		</div>
 		<div class="form-group">
 			<label for="formDescription">Description</label>
 			<input name = "description" type="text" class="form-control" id="formDescription" placeholder="Description">
 		</div>
 		 <button type="submit" class="btn btn-primary">Submit</button>
 	</form>

 </body>
 </html>