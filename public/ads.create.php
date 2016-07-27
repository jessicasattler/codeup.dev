<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create Your Ad</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/ecommercecss/ads.create.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<div= class="container">
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="/img/artee.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Welcome</a>
                    </li>
                    <li>
                        <a href="#">Login</a>
                    </li>
                    <li>
                        <a href="#">Listings</a>
                    </li>
                    <li>
                        <a href="#">Index</a>
                    </li>
                    <li>
                        <a href="#">Show</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">
         <div class="jumbotron">
            <h1>Sell Your Masterpieces!</h1> 
            <p>Get the best publicity and best offers for your work.</p> 
        </div>

    
    
        <form method="POST" action="/adlister.register.php">
            <div row>
                <div class="col-xs-4">
                    <p>
                        <label for="yourname">Name: </label>
                        <input id="username" name="username" type="text" placeholder="Pablo Picasso">

                    </p>
                    <p>
                        <label for="yourprice">Price: </label>
                        <input id="price" name="price" type="text" placeholder="$1,000">
                    </p>
                    <p>
                        <label for="description">Description of artwork:</label>
                      <textarea id="description" name="description" rows="7" cols="45"placeholder="My artwork features a combination of the styles of..."></textarea>

                        <br>
                    <p>
                        <label>Upload Image:</label>
                        <br>
                        <button id="picimage" class="button button-primary" type="button" name="upload">Choose File</button>
                        <label>No File Selected</label>
                        <br>
                        <br>
                        <button type="submit" name="submit" value="Register!">Register</button>
                    </p>
                    
                </div>
            </div>
        
        </form>



    
     </div> <!--for container -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <p>Copyright &copy; Muse 2016</p>
            </div>
        </footer>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</div>

</html>
