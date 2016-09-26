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

	//Update the query(s) in national_parks.php to use prepared statements, in particular for the limit and offset.

	//give us PDOStatement instance with all the information from national_parks table, $infoToGet is the command we want to pass to MySQL
	$pageNumber = Input::get('page');
	$offset = (intval($pageNumber) - 1) * RPP ;
	$infoToGet = 'SELECT * FROM national_parks LIMIT '.RPP.' OFFSET ' . $offset;

	//We store the information from the query method where we're getting back the PDOStatement so we return an instance of the PDOStatement class (different data type)

	//$dbc is like the mail man
	//$statement is the actual mail, we can open the mail, not the mail man
	$statement = $dbc->query($infoToGet);

	//The FETCH_ASSOC returns a two dimensional associative array
	$allColumns = $statement-> fetchAll(PDO::FETCH_ASSOC);

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
		
			echo "<tr><td>".$park['name']."</td><td>".$park['location']."</td><td>".$park['date_established']."</td><td>".$park['area_in_acres']."<td></tr>";
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

 	<?php getParks($parks); ?>
 	
 	<?php makeButtons(intval($pageNum)); ?>

 </body>
 </html>