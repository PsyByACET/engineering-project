<?php
    include('db.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>

    <header>
        <div class="container">
            <div class="head">
                <a href="index.php">main</a>
                <div class="head_login">
                <?php 
                    if($_COOKIE['user'] == ''):
                ?>
                <a class="reg" href="register.php">voiti</a>
                <?php else: ?>
                    <span><?=$_COOKIE['user'] ?></span><span><?=$_COOKIE['name_user'] ?></span><br>
                    <a href="exit.php">exit</a>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </header>