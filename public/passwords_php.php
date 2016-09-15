<?php

// what is a password hash?
//   - fancy cryptographic operation that is *irreversible*
//   - protects our users's passwords if they are ever leaked

// we cannot get a plaintext password from a password hash, but we can verify
// that some plaintext matches a hash
// http://php.net/manual/en/function.password-hash.php
// http://php.net/manual/en/function.password-verify.php

// How to use this

// hash a password
password_hash($password, PASSWORD_DEFAULT);
// verify a password matches a hash
password_verify($password, $hash);

// what this will eventually look like

// sign up page
// get this from the POST request
$myPassword = 'password123';
$hash = password_hash($myPassword, PASSWORD_DEFAULT);
// store the hash in the database

// verify that a string matches a hash
// login page
$attemptedPassword = $_POST['password'];
$hash = //get this from the db
$isMatch = password_verify($attemptedPassword, $hash)
