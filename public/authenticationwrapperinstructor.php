<?php

class Auth
{

    public static $password = '$2y$10$tdUUvfUsj1IcQIHsBtfoZuYlBk9Bl4fpILbqzGdJdksaIJtr17WBK';
    public static $username = 'guest';

    /**
     *  Checks if a username and password combination is valid
     *
     *  @param string $username the username to check
     *  @param string $password the password to check
     *  @return bool true or false depending on whether the attemt succeeded
     **/
    public static function attempt($username, $password)
    {
        $logger = new Log();

        $validUsername = strtolower($username) == self::$username;
        $validPassword = password_verify($password, self::$password);

        if ($validUsername && $validPassword) {
            $logger->info("$username logged in.");
            return true;
        }

        $logger->info("$username failed to log in.");
        return false;
    }

    /**
     * Logs a user into the application
     *
     * @param string $username username to log into the application
     **/
    public static function login($username)
    {
        $_SESSION['logged_in_user'] = $username;
    }

    /**
     * checks whether a user is logged in
     *
     * @return bool true if user is logged in, false otherwise
     **/
    public static function check()
    {
        return isset($_SESSION['logged_in_user']);
    }

    /**
     * returns the logged in user
     *
     * @return string the username of the logged in user
     **/
    public static function user()
    {
        return self::check() ? $_SESSION['logged_in_user'] : null;
    }

    public static function logout()
    {
        session_unset();
        session_regenerate_id(true);
    }

    /**
     * send a header Location: to a specified url and kill the script
     *
     * @param string $url the url to redirect to
     **/
    public static function redirect($url)
    {
        header("Location: $url");
        die;
    }

}