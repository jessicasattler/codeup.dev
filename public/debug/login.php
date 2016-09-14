<?php
require_once "functions.php";
function pageController() {
    $data = ['message' => '', 'title' => 'Login'];
    if (isUserAuthenticated()) {
        redirect('authorized.php');
    }
    if (!isPost()) {
        return $data;
    }
    if (authenticate(input('username'), input('password'))) {
        redirect('authorized.php');
    }
    $data['message'] = 'Your username or password are incorrect...';
    return $data;
}

session_start();
var_dump($_SESSION);
extract(pageController());
?>
<!DOCTYPE html>
<html>
    <?php include 'header.php' ?>
    <body>
        <div class="container">
            <h1>Login</h1>
            <h2><?= $message ?></h2>
            <form method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input
                        type="text"
                        class="form-control"
                        name="username"
                        id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        name="password"
                        id="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"
        ></script>
    </body>
</html>