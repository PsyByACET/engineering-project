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
    $user_id = $_COOKIE['user_id'];
    echo $time.'<br>';

    if($time == 'time1'){
        $time_con = '9-20';
    }
    if($time == 'time2'){
        $time_con = '10-20';
    }
    if($time == 'time3'){
        $time_con = '13-40' . '<br>';
    }
    echo $time_con;
    
    //echo $_POST['img'];
    //echo $_GET['get'];
    setcookie('date', $_GET['get'], time() + 3600, "/" );
    setcookie('n', 1, time() + 3600, "/" );

    $d = mysqli_query($db,"SELECT * FROM `time_r` WHERE `hospital` = '$hos_id' AND `position` = '$pos_id' AND `date` = '2020-07-03'");
    while( $eee = mysqli_fetch_assoc($d)){
        print_r($eee);
        setcookie('time11', $eee['time1'], time() + 3600, "/" );
        setcookie('time12', $eee['time2'], time() + 3600, "/" );
        setcookie('time13', $eee['time3'], time() + 3600, "/" );
        echo 'вре1мя'.$_COOKIE['time11']; echo '<br>';
        echo 'вре2мя'.$_COOKIE['time12']; echo '<br>';
        echo 'вре3мя'.$_COOKIE['time13']; echo '<br>';
         
    }
    $d = mysqli_query($db,"SELECT * FROM `time_r` WHERE `hospital` = '$hos_id' AND `position` = '$pos_id' AND `date` = '2020-07-08' ");
    while( $eee = mysqli_fetch_assoc($d)){
        
        setcookie('time21', $eee['time1'], time() + 3600, "/" );
        setcookie('time22', $eee['time2'], time() + 3600, "/" );
        setcookie('time23', $eee['time3'], time() + 3600, "/" );
        echo 'вре1мя'.$_COOKIE['time21']; echo '<br>';
        echo 'вре2мя'.$_COOKIE['time22']; echo '<br>';
        echo 'вре3мя'.$_COOKIE['time23']; echo '<br>';
         
    }
    $d = mysqli_query($db,"SELECT * FROM `time_r` WHERE `hospital` = '$hos_id' AND `position` = '$pos_id' AND `date` = '2020-07-14' ");
    while( $eee = mysqli_fetch_assoc($d)){
        
        setcookie('time31', $eee['time1'], time() + 3600, "/" );
        setcookie('time32', $eee['time2'], time() + 3600, "/" );
        setcookie('time33', $eee['time3'], time() + 3600, "/" );
        echo 'вре1мя'.$_COOKIE['time31']; echo '<br>';
        echo 'вре2мя'.$_COOKIE['time32']; echo '<br>';
        echo 'вре3мя'.$_COOKIE['time33']; echo '<br>';
         
    }

    header('Location: record-time.php');
?>