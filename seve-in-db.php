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
    $time = $_GET['time'];
    $user_id = $_COOKIE['user_id'];
    echo $time.'<br>';
    
    if($time == 'time1'){
        $time_con = '9-20';
    }
    if($time == 'time2'){
        $time_con = '10-20';
    }
    if($time == 'time3'){
        $time_con = '13-40';
    }
    echo $time_con;

    $id_time_r = mysqli_query($db,"SELECT * FROM `time_r` WHERE  `position` = '$pos_id' AND `hospital` = '$hos_id' AND `date` = '$date'");
    while( $u = mysqli_fetch_assoc($id_time_r)){
        $eh = $u['id'];  
    }

    mysqli_query($db,"INSERT INTO `records` (`record_id`, `id_time_r`, `patient`, `date_record`, `time_record`, `hospital`, `position`) VALUES (NULL, '$eh', '$user_id', '$date', '$time_con', '$hos', '$pos')");
    mysqli_query($db,"UPDATE `time_r` SET `$time` = '$user_id' WHERE  `hospital` = '$hos_id' AND `position`= '$pos_id' AND `date` = '$date'");
    
    

    header('Location: record_position.php');
    
    
    
    