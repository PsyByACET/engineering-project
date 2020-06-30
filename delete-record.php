<?php
    include('db.php'); 
    $record_id = $_GET['record_id'];
    echo '<br>';
    $date = $_GET['date'];
    echo '<br>';
    $time = $_GET['time'];

    if($time == '9-20') {
        $time = 'time1';
    }

    if($time == '10-20') {
        $time = 'time2';
    }

    if($time == '13-40') {
        $time = 'time3';
    }
    
    echo '<br>';
    $id_time_r = $_GET['id_time_r'];
  


        
    mysqli_query($db,"DELETE FROM `records` WHERE `record_id` = '$record_id'");
    mysqli_query($db,"UPDATE `time_r` SET `$time` = '0' WHERE `id` = '$id_time_r' AND `date` = '$date'");

    $r = mysqli_query($db,"SELECT * FROM `records`");
    while( $u = mysqli_fetch_assoc($r)){
        


    }
    header('Location: record_position.php#rec');

?>