<?php

// model
$pizzas = [
    [
        'toppings' => ['pepperoni', 'green peppers', 'onions'],
        'crust'    => 'stuffed',
        'delivery' => true,
        'price'    => 1295,
    ],
    [
        'toppings' => ['onion', 'salami'],
        'crust'    => 'pretzel',
        'delivery' => false,
        'price'    => 1195,
    ],
    [
        'toppings' => ['pineapple', 'ham'],
        'crust'    => 'regular',
        'delivery' => true,
        'special instructions' => 'extra crispy crust',
        'price'    => 995,
    ]
];

// controller
$pizzasForDelivery = [];

foreach ($pizzas as $pizza) {
    $pizza['price'] /= 100;
    if ($pizza['delivery']) {
        $pizzasForDelivery[] = $pizza;
    }
}

// view
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
            <h2>Pizzas for Delivery</h2>
            <?php foreach ($pizzasForDelivery as $index => $pizza): ?>
                <div class="col-md-6">
                    <h3>Order No. <?= ($index + 1); ?></h3>
                    <div class="pizza">
                        <p>Toppings</p>
                        <ul>
                            <?php foreach($pizza['toppings'] as $topping):  ?>
                                <li><?= $topping ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <p>Crust: <?= $pizza['crust'] ?></p>
                        <p>Price: $<?= $pizza['price'] ?></p>
                        <?php if (isset($pizza['special instructions'])):  ?>
                            <p>Special Prep: <?= $pizza['special instructions'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</body>
</html>