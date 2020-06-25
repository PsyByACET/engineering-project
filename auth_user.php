<?php
    include('db.php');

    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRIPPED);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRIPPED);
    
    echo $login;
    $pass = md5($pass. "sdazlljhsdx321s1dwws1");
    echo $pass;

    $countt = $db->query("SELECT * FROM `patients` WHERE `login` = '$login' AND `password` = '$pass'");
    $user = $countt->fetch_assoc();

    if(count($user) == 0) {
        echo "пользователь не найден";
        exit();
    }
    print_r($user);

    setcookie('user', $user['login'], time() + 3600, "/" );

    $db->close();

    header('Location: index.php');