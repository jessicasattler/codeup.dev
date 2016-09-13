<?php 
$favoriteFoods = ['Brownies', 'Pound Cake','Doughnuts'];

 ?>
<!-- practice with a foreach loop -->
<!-- the following is short for doing the php echo, what is inside the foreach loop-->
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Codeup!</title>
 </head>
 <body>
 	<h1>My Favorite Foods</h1>
 	<ol>
 	<?php foreach ($favoriteFoods as $favoriteFood){ ?>
 		<li><?= $favoriteFood; ?></li>
 	<?php } ?>
 	</ol>
 </body>
 </html>

<!--  <!-- summary :
 	<?= 'Hello Codeup'; ?>   is short for <?php echo 'Hello Codeup'; ?>
 	and
 	<ul>
 	<?php foreach ($items as $item): ?>
    <li><?= $item; ?></li>
<?php endforeach; ?>          

	</ul>					
								is short for a foreach loop with normal php tags-->