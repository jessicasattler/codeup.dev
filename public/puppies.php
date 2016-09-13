<?php

// talk to the database and get some data
// returns an array of associative arrays representing our database query
function getPuppies()
{
    return [
        ['name' => 'muffins', 'description' => 'muffins is so cute!'],
        ['name' => 'nibbler', 'description' => 'nibbler likes to nibble'],
        ['name' => 'muffins', 'description' => 'muffins is so cute!'],
        ['name' => 'buddy', 'description' => 'buddy likes to cuddle'],
        ['name' => 'Max', 'description' => 'Max is as cute as a button'],
        ['name' => 'spike', 'description' => 'spike likes to wrestle'],
    ];
}

// controller
function pageController()
{
    // model
    $puppies = getPuppies();

    $search = isset($_GET['search']) ? $_GET['search'] : '';

    // search if we have something to search for
    if (! empty($search)) {
        $filteredPuppies = [];
        foreach ($puppies as $puppy) {
            // see if out search term is in the puppy's name or description
            $matchFound = strpos($puppy['description'], $search) !== false || 
                          strpos($puppy['name'], $search) !== false;
            if ($matchFound) {
                $filteredPuppies[] = $puppy;
            }

        }

        // reset puppies so we only send out the filtered list
        $puppies = $filteredPuppies;
    }
    return [
        'puppies' => $puppies,
        'search'  => $search,
    ];
}

// pass data to the view
extract(pageController());

// view -+
//       |
//       V
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <style> .puppy { border: 1px solid black; }</style>
</head>
<body>
    <div class="container">
        <h1>
            Look at all these cute puppies!
            <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#login-modal">Log In</button>
        </h1>
        <form class="form">
            <div class="form-group">
                <label for="">Search</label>
                <input class="form-control" type="" name="search">
            </div>
        </form>
        <?php foreach($puppies as $puppy): ?>
            <div class="col-md-6 puppy">
                <h2><?= $puppy['name'] ?></h2>
                <p><?= $puppy['description'] ?></p>
            </div>
        <?php endforeach; ?>

        <?php if (empty($puppies)): ?>
            <h2 class="text-center">Sorry, no results found for <?= $search ?></h2>
        <?php endif; ?>
    </div>

    <!-- log in modal -->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Please Log In</h4>
                </div>
                <div class="modal-body">
                    <form class="form" action="" method="POST">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input name="username" class="form-control" type="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input name="password" type="password" class="form-control" type="">
                        </div>
                        <input class="form-control btn btn-primary" type="submit" value="Log In">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>