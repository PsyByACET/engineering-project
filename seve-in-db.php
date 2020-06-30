<?php
    include('db.php');

    $pos = $_COOKIE['position'];
    echo '<br>';
    $hos = $_COOKIE['name_hospital'];
    echo '<br>';
    $pos_id = $_COOKIE['position_id'];
    echo '<br>';
    $hos_id = $_COOKIE['hospital_id'];
    echo '<br>';
    $date = $_COOKIE['date'];
    echo '<br>';
    $time_con = $_GET['time'];
    $user_id = $_COOKIE['user_id'];
    echo $time.'<br>';
    echo $time;echo $time;echo $time;
    
    if($time_con == '9-20'){
        $time = 'time1';
    }
    if($time_con == '10-20'){
        $time = 'time2';
    }
    if($time == '13-40'){
        $time = 'time3';
    }
    
    echo $time_con;

    $id_time_r = mysqli_query($db,"SELECT * FROM `time_r` WHERE  `position` = '$pos_id' AND `hospital` = '$hos_id' AND `date` = '$date'");
    while( $u = mysqli_fetch_assoc($id_time_r)){
        $eh = $u['id'];  
    }

    mysqli_query($db,"INSERT INTO `records` (`record_id`, `id_time_r`, `patient`, `date_record`, `time_record`, `hospital`, `position`) VALUES (NULL, '$eh', '$user_id', '$date', '$time_con', '$hos', '$pos')");
    mysqli_query($db,"UPDATE `time_r` SET `$time` = '$user_id' WHERE  `hospital` = '$hos_id' AND `position`= '$pos_id' AND `date` = '$date'");
    
    

    header('Location: record_position.php#rec');
    
    
    
    