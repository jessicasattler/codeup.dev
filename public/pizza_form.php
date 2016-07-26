<?php
    var_dump($_GET);
    var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- build an order form for a pizza, name it pizza_form.php. Use inputs you think are best!
    - quantity
    - crust style
    - size
    - toppings
    - delivery info including name, phone, address, credit card info, additional instructions
    - BONUS: show toppings with images -->
    <form method="POST" action="/pizza_form.php">
    <h2>Pizza Form</h2>
    <p>
    	<label for="quantity">Select quantity:</label>
    	<select id="quantity" name="quantity">
    		<option> 1 </option>
    		<option> 2 </option>
    		<option> 3 </option>
    		<option> 4 </option>
    	</select>
    	<button type="submit">Submit</button>
    </p>
    <p>
    	<label for="crust">Select crust style</label>
    	<select id="crust" name="crust">
    		<option>Thin Crust</option>
    		<option>Original Crust</option>
    		<option>Cheese-filled Crust</option>
    	</select>
    </p>
    <p>
    	<label for="size">Size</label>
    	<select id="size" name="size">
    		<option>Small</option>
    		<option>Medium</option>
    		<option>Large</option>
    	</select>
    </p>
    <p>
      <label for="toppings" >Toppings</label>
      <br>
      <label for="topping1"><input type="checkbox" id="topping1" name="toppings[]" value="pepperoni">Pepperoni<img src="/img/Pepperoni.jpg" width=200 height=150 alt="Pepperoni">
      </label>
      <br>
      <label for="topping2"><input type="checkbox" id="topping2" name="toppings[]" value="pepperoni">Sausage<img src="/img/sausage.jpg" height=150 width=200 alt="Sausage">
      </label>
      <br>
      <label for="topping3"><input type="checkbox" id="topping3" name="toppings[]" value="hawaiian">Hawaiian<img src="img/Hawaiian.jpg" alt="Hawaiian" width=200 height=150>
      </label>
        
      </label>

    </p>
    
    <h2>Delivery Options</h2>
    <p>
    	<label for="name">Name:</label>
    	<input type="text" id="first_name" name="first_name" value="" placeholder="First and Last Name">
   </p>
   <p>
   		<label for="phone">Phone Number: </label>
   		<input type="text" id="first_name" name="phone number" value="" placeholder="Type phone number">
   </p>
   <p>
   		<label for="address">Address:</label>
   		<input type="text" id="address" name="address" value="" placeholder="Address">
   </p>
   <p>
   		<label for="credit card information">Credit Card Information</label>
   		<input type="credit card information" id="credit card information" name="credit card information" value="" placeholder="Credit Card Information">
   </p>
   <p>
   		<label for="additional information">Additional Information</label>
   		<input type="additional information" id="additional information" name="additional information" value="" placeholder="Additional Information">
   </p>

    </form>

</body>
</html>