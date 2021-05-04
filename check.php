<?php

if (empty($_SESSION['email'])) {
    $_SESSION['alert'] = "You need to logged in to access this page.";
    header("Location:login.php");
}
?>