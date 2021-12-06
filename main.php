<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first"; 
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);   
        header('location: login.php');
    }

?>

<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name="viweport" content="width=device-with, ">
    </head>

</html>