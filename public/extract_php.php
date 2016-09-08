<?php

// view-controller separation

// we've said to separate our concerns, now we will see a design pattern that
// will enforce this

// isolate our logic in a controller function, and just return out of the
// controller the data that we are going to display
// this enforces separation of concerns, makes our code easier to reason about

// extract function
//   - demo in the REPL
//   - refactor

function getANumber()
{
    return 42;
}

// function that will perform all of our logic
// returns an associative array that has just what we want to display in our
// view, i.e. just the end result of any logic we are doing
function pageController()
{
    // do some logic

    // a message
    $cohort = 'lassen';
    $message = "hello $cohort";
    $message.= '!';

    // a number
    $number = getANumber();

    // a list of names
    $staffNames = ['Zach', 'Fer', 'Ryan', 'Dan Riley'];
    $names = [];
    // remove zach
    foreach ($staffNames as $name) {
        if ($name == 'Zach') { continue; }
        $names[] = $name;
    }

    // just return the necessary variables
    return [
        'message' => $message,
        'number'  => $number,
        'names'   => $names,
    ];
}

$dataReturnedFromPageController = pageController();
extract($dataReturnedFromPageController);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

        <h1>Hello There</h1>

        <hr>

        <p>
            Here is our message: <?= $message ?>
        </p>

        <p>
            Here is our number: <?= $number ?>
        </p>

        <p>Here are some names</p>
        <ul>
            <?php foreach($names as $name): ?>
                <li><?= $name ?></li>
            <?php endforeach; ?>
        </ul>
    
    </div>

</body>
</html>
