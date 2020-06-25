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
        
    </header>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1>Форма регистрации</h1>
                <form action="check_user.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="login"><br>
                    <input type="number" class="form-control" name="id_card" id="id_card" placeholder="id_card"> <br>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last_name"><br>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first_name"><br>
                    <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="middle_name"><br>
                    <input type="number" class="form-control" name="number" id="number" placeholder="number"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="password"><br>
                    <button class="btn btn-success">register</button>
                </form>
            </div>
            <div class="col">
                <h1>Форма Авторизации</h1>
                <form action="auth_user.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="login"><br>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="password"><br>
                    <button class="btn btn-success">auth</button>
                </form>
            </div>
        </div>
    <h3>Оставшиеся медицинские карты</h3>
    <?php
    $r = mysqli_query($db,"SELECT * FROM `medical_cards` WHERE `reg` = 0");
    while( $u = mysqli_fetch_assoc($r)){
        echo $u['medical_card_id'];
    }
    ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>