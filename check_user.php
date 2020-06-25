<?php
    include('db.php');

    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRIPPED);
    $id_card = filter_var(trim($_POST['id_card']),FILTER_SANITIZE_STRIPPED);
    $last_name = filter_var(trim($_POST['last_name']),FILTER_SANITIZE_STRIPPED);
    $first_name = filter_var(trim($_POST['first_name']),FILTER_SANITIZE_STRIPPED);
    $middle_name = filter_var(trim($_POST['middle_name']),FILTER_SANITIZE_STRIPPED);
    $number = filter_var(trim($_POST['number']),FILTER_SANITIZE_STRIPPED);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRIPPED);
    
    echo $login;
    $pass = md5($pass. "sdazlljhsdx321s1dwws1");
    echo $pass;

    $db->query("INSERT INTO `patients` (`patient_id`, `medical_card`, `last_name`, `first_name`, `middle_name`, `number`, `login`, `password`) VALUES (NULL, '$id_card', '$last_name ', '$first_name ', '$middle_name', '$number', '$login', '$pass')");
    $db->query("UPDATE `medical_cards` SET `reg` = '1' WHERE `medical_card_id` = '$id_card';");
    $db->close();

    header('Location: register.php');