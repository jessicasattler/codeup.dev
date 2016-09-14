<?php
function redirect($location)
{
    header("Location: $location");
    exit;
}

function isUserAuthenticated()
{
    return isset($_SESSION['logged_in_user']);
}

function user()
{
    return $_SESSION['logged_in_user'];
}

function authenticate($username, $password)
{
    if ($username == 'guest' && $password == 'password') {
        $_SESSION['logged_in_user'] = $username;
        return true;
    }
    return false;
}

function isPost()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function input($key, $default = '')
{
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}

function clearSession()
{
    session_unset();
    session_regenerate_id(true);
}