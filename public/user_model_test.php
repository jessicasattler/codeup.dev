 <?php 

define ("DB_HOST" , "127.0.0.1");
define ("DB_NAME", "join_test_db");
define ("DB_USER", "vagrant");
define ("DB_PASS", "vagrant");

require_once __DIR__ . '/User.php';

// Create a new user using the User model.


$user = new User();
$user->name = 'Jared';
$user->email = 'jared@example.com';
$user->role = 3;

$user->save();

// Find the new user by its id
print_r($user::find(12));

// Update the found user to have new values.

$user3 = new User();
$user3->name = 'John';
$user3->email = 'john@example.com';
$user3->role = 4;
$user3->id = 3;
$user3->save();


// Verify the update executed in the DB.

// Create another new user.

$user2 = new User();
$user2->name = 'Jessi';
$user2->email = 'jessi@example.com';
$user2->role = 3;

$user2->save();
// Retrieve all users from the DB.

print_r($user->all());
// Add a method to delete a record in the Model class.

// Delete a user using the new method added to the base class

$user::delete(35);
