<?php
    include('db.php');
    echo $_COOKIE['date'];
    echo $_GET['time'];
    setcookie('time', $_GET['time'], time() + 3600, "/" );
    

    header('Location: confer.php');
?>