<?php
    include('db.php');

    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRIPPED);

    $id_card_f = $db->query("SELECT * FROM `patients` WHERE `login` = '$login'");
        while( $u = mysqli_fetch_assoc($id_card_f)){
            $id_card = $u['medical_card'];  
        }

    $name_user_f = $db->query("SELECT * FROM `patients` WHERE `login` = '$login'");
        while( $uu = mysqli_fetch_assoc($name_user_f)){
            $name_user = $uu['last_name'] .' '. $uu['first_name'] .' '. $uu['middle_name'];
            echo $name_user;
            
        }

    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRIPPED);
    
    $pass = md5($pass. "sdazlljhsdx321s1dwws1");

    $countt = $db->query("SELECT * FROM `patients` WHERE `login` = '$login' AND `password` = '$pass'");
    $user = $countt->fetch_assoc();

    if(count($user) == 0) {
        echo "пользователь не найден";
        exit();
    }

    setcookie('user', $user['login'], time() + 3600, "/" );
    setcookie('id_card', $id_card, time() + 3600, "/" );
    setcookie('name_user', $name_user, time() + 3600, "/" );

    $db->close();

    header('Location: index.php');