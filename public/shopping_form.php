<?php
    var_dump($_GET);
    var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping Form</title>
</head>
<body>

	<!-- - build a file called shopping_form.php for searching for clothes/jeans or for shopping other items. Use the most appropriate inputs.
    minimum price, max price (maybe range input would be good here)
    description
    size
    color
    pattern
    cut/fit -->

    <form method="GET" action="/shopping_form.php">
    <p>
    	<label for="shirts">Shirt Size</label>
    	<input type="number" name="quantity" min="1" max="5">
   	</p>
   	<p>
   	<h4>What shirt colors do you like?</h4>
   		<label><input type="checkbox" id="description1" name="color[]" value="pink"> Pink
   		</label>
   		<label><input type="checkbox" id="description2"
   		name="color[]" value="blue"> Blue
   		</label>
   		<label><input type="checkbox" id="description3" name="color[]" value="purple"> Purple
   		</label>

   	</p>
    </form>
</body>
</html>