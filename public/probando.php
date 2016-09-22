<?php  
function pageController()
    {
        $data = [];

        $data['message'] = 'Hello Kings';


 

    }
    extract(pageController());

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

<?= $message; ?>
 
 </body>
 </html>