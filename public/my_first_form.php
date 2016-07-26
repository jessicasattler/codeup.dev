<?php
    var_dump($_GET);
    var_dump($_POST);
?>


<!DOCTYPE html>
<html>
<head>
	<title>My First HTML Form</title>

</head>
<body>
	<hr>
	<h2>User Login</h2>

	
	<label for="username">click me to focus the username field</label>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

	
	</p>
	<form method="POST" action="/my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="type username here">

	</p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="type password here">
    </p>
    	<input type="submit" name="submit" value="Log In!">
    <hr>
    </form>

    <form method="GET" action="https://duckduckgo.com/" target="_blank">
    	<label for="Search">Search DuckDuckGo</label>
    	<input id="Search" type="text" name="q" placeholder="type codeup!">
    	<button type="submit">Go!</button>
	</form>
	<hr>
	<h2>Compose an Email</h2>
	<form method="POST" action="/my_first_form.php">
	<p>
		<label for="To">To</label>
		<input  id="To" type="text" name="to" placeholder="Type the recipient's name here:">
	</p>
	<p>
		<label for="From">From</label>
		<input  id="From" type="text" name="from" placeholder="Type your sender's name here:">
	</p>
	<p>
		<label for="Subject">Subject</label>
		<input  id="Subject" type="text" name="subject body" placeholder="Type subject here.">
	</p>
		<input type="checkbox" id="copytofolder" name="copytofolder" value="yes" checked>
		<label for="copytofolder">Would you like to save a copy to your sent folder?</label>
	<p>

		<textarea id="email_body" name="email_body" rows="7" cols="45">Content Here</textarea>

		<br>
		<button type="submit">Send</button>
	</p>
	
	</form>

	<hr>
	<h2>Form Exercise</h2>
	<!-- Anchor tag link that searches Reddit for "javascript" and sorts by top -->
	<a href="https://www.reddit.com/search?q=javascript&sort=top" target="_blank">Reddit Javascript results sorted by top</a>

	<form method="GET" action="https://www.reddit.com/search" target="_blank"> <!-- to have it actually search -->

		<input type="text" name="q" placeholder="Search Reddit">
		<input type="hidden" name="sort" value="top">
		<button type="submit">Search Reddit</button>
    	

	</form>

	<h2>Multiple Choice Test</h2>
	<!-- Add two or more question and answer sets using radio buttons. Experiment with the naming so that you understand how radio buttons are grouped. -->
	<form method="POST" action="/my_first_form.php">
	<p>
		What is your favorite hobby?
	</p>

	<label>
		<input type="radio" name="q1" value="watching movies">
		Watching movies
	</label>
	<label>
		<input type="radio" name="q1" value="listening to music">
		Listening to music
	</label>
	<label>
		<input type="radio" name="q1" value="reading books">
		Reading books
	</label>
	<p>
		How many cellphones have you owned?
	</p>
	<label>
		<input type="radio" name="q2" value="one">
		One
	</label>
	<label>
		<input type="radio" name="q2" value="two">
		Two
	</label>
	<br>
	<label
		for="car">What car brands do you like?
	</label>
	<select id="car" name="car[]" multiple>
		<option value="1">Ford</option>
		<option value="0">Toyota</option>
	</select>
	<button type="submit">Submit</button>


	<!-- Add a question that has multiple answers using grouped checkboxes. Try submitting the form to your browser to see how the inputs work. -->
	<p>
		What soda brands do you enjoy drinking?
	</p>
	<label>
		<input type="checkbox" id="os1" name="os[]" value="Orange">Orange
	</label>
	<label>
		<input type="checkbox" id="os2" name="os[]" value="Mountain Dew"> Mountain Dew
	</label>
	<!-- <label> --><input type="checkbox" id="os3" name="os[]"
	value="Coca Cola">Coca Cola
	<!-- </label> -->
	</form>
	<h2>Select Testing</h2>
	<!-- Create a basic select input that asks the user a yes or no question. Try defaulting the answer to yes, and then to no. Try submitting the form to your browser and view the results. -->
	<form method="POST" action="/my_first_form.php"> 
	<label for="relationshipstatus">Are you married?
	</label>
	<select id="relationshipstatus" name="relationship">
		<option value="1">Yes</option>
		<option value="0" selected>No</option>
	</select>
	<button type="submit">Submit</button>

	

	</form>
	
</body>
</html>