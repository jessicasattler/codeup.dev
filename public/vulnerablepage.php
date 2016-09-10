<?php
$items = array('Item One', 'Item Two', 'Item Three');
$allItems = array_merge($items, $_POST);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Alternative Syntax</title>
</head>
<body>
    <h1>List of Items</h1>
    <ul>
    <?php foreach ($allItems as $item): ?>
     <!-- adding the htmlspecialchars and the strip tags prevents the user from
     adding javascript that would do xss (cross site scripting) and deletes the tags so that they don't show up on our list when user submits --> 
        <li><?php echo htmlspecialchars(strip_tags($item)); ?></li>
    <?php endforeach; ?>
    </ul>

    <form method="POST">
        <input type="text" id="newitem" name="newitem" placeholder="Add new todo item">
        <input type="submit" value="add">
    </form>
</body>
</html>