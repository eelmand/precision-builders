<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
session_destroy();

echo "<p>You have been successfully logged out!</p>";
sleep(1);
header("Location: ../login.html"); /* Redirect browser */
exit();

?>

