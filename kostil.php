<?php
    include('head.php');
    $kek = $_GET['name_hospital'];
    //echo $kek;
    

    $d = mysqli_query($db,"SELECT * FROM `hospitals` WHERE `name_hospital` = '$kek'");
                while( $eee = mysqli_fetch_assoc($d)){
                    echo $eee['hospital_id'];
                    setcookie('hospital_id', $eee['hospital_id'], time() + 3600, "/" );
                        
                }

    setcookie('name_hospital', $_GET['name_hospital'], time() + 3600, "/" );
    setcookie('n', 0, time() + 3600, "/" );
    
    

    header('Location: record-time.php');
?>


