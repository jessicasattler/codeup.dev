<?php
// start the session (or resume an existing one)
// this function must be called before trying to get or set any session data!
// clear session data in memory & on disk and send user a new session cookie
function clearSession()
{
    // clear $_SESSION array
    session_unset();

    // delete session data on the server and send the client a new cookie
    session_regenerate_id(true);
}

// start the session (or resume an existing one)
// this function must be called before trying to get or set any session data!
session_start();

if (isset($_POST['reset'])) {
    if ($_POST['reset'] == 'counter') {
        unset($_SESSION['view_count']);
    } elseif ($_POST['reset'] == 'session') {
        clearSession();
    }
}
// get the current session ID
$sessionId = session_id();

// initialize a view count variable
$viewCount = isset($_SESSION['view_count']) ? $_SESSION['view_count'] : 0;

// increment the counter
$viewCount++;

// finally, store the new value in the session
$_SESSION['view_count'] = $viewCount;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>
    <ul>
        <li>Session ID: <?= $sessionId; ?></li>
        <li>View Count: <?= $viewCount; ?></li>
    </ul>
   <form method="POST">
    	<button type="submit" name="reset" value="counter">Reset Counter</button>
    	<button type="submit" name="reset" value="session">Reset Session</button>
   </form>
</body>
</html>