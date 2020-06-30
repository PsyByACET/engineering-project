<?php
    include('head.php');
    echo '<a href="record-doctors.php?position='. $_COOKIE['position'].'" class="back-btn" style="margin-left: 20px;"><img style="width: 80px; " src="img/back.svg" alt=""></a><br>';
    

    $hos_id = $_COOKIE['hospital_id'];
    $pos_id = $_COOKIE['position_id'];

    

    

    

?>

<section class="record_time_s">

<?php
    echo $_COOKIE['position'];
    echo '<br>';
    echo $_COOKIE['name_hospital'];
    echo '<br>';
    $d = mysqli_query($db,"SELECT * FROM `time_r` WHERE `hospital` = '$hos_id' AND `position` = '$pos_id'");
    while( $eee = mysqli_fetch_assoc($d)){
        echo '<form action="get-date.php" method="get">
                <a href="#" class="btn my_button" onclick="parentNode.submit();">'.$eee['date'].'</a>
                <input type="hidden" name="get" value="'.$eee['date'].'"/>
            </form>'; 
        
         
    }
        $t11 = $_COOKIE['time11'];
        $t12 = $_COOKIE['time12'];
        $t13 = $_COOKIE['time13'];
        $t21 = $_COOKIE['time21'];
        $t22 = $_COOKIE['time22'];
        $t23 = $_COOKIE['time23'];
        $t31 = $_COOKIE['time31'];
        $t32 = $_COOKIE['time32'];
        $t33 = $_COOKIE['time33'];

    if($_COOKIE['n'] == 1):
?>

</section>

<section class="record_time_s">

<?php
    $p_date = $_COOKIE['date'];
    echo $p_date . '<br>';


    if($t11 == 0 && $p_date == '2020-07-03'):
        echo  '<form action="kostil2.php" method="get">
                <a href="#" class="btn my_button" onclick="parentNode.submit();">9-20</a>
                <input type="hidden" name="time" value="time1"/>
            </form> '; endif;
        if($t12 == 0 && $p_date == '2020-07-03'):
        echo  '<form action="kostil2.php" method="get">
                <a href="#" class="btn my_button" onclick="parentNode.submit();">10-20</a>
                <input type="hidden" name="time" value="time2"/>
            </form> '; endif;
        if($t13 == 0 && $p_date == '2020-07-03'):
        echo  '<form action="kostil2.php" method="get">
                <a href="#" class="btn my_button" onclick="parentNode.submit();">13-40</a>
                <input type="hidden" name="time" value="time3"/>
            </form> '; endif;


        if($t21 == 0 && $p_date == '2020-07-08'):
        echo '<form action="kostil2.php" method="get">
            <a href="#" class="btn my_button" onclick="parentNode.submit();">9-20</a>
            <input type="hidden" name="time" value="time1"/>
        </form>'; endif;
        if($t22 == 0 && $p_date == '2020-07-08'):
            echo '<form action="kostil2.php" method="get">
                <a href="#" class="btn my_button" onclick="parentNode.submit();">10-20</a>
                <input type="hidden" name="time" value="time2"/>
            </form>'; endif;
        if($t23 == 0 && $p_date == '2020-07-08'):
            echo '<form action="kostil2.php" method="get">
                <a href="#" class="btn my_button" onclick="parentNode.submit();">13-40</a>
                <input type="hidden" name="time" value="time3"/>
            </form>'; endif;

            
        if($t31 == 0 && $p_date == '2020-07-14'):
        echo '<form action="kostil2.php" method="get">
            <a href="#" class="btn my_button" onclick="parentNode.submit();">9-20</a>
            <input type="hidden" name="time" value="time1"/>
        </form>'; endif; 
        if($t32 == 0 && $p_date == '2020-07-14'):
            echo '<form action="kostil2.php" method="get">
                <a href="#" class="btn my_button" onclick="parentNode.submit();">10-20</a>
                <input type="hidden" name="time" value="time2"/>
            </form>'; endif;
        if($t33 == 0 && $p_date == '2020-07-14'):
            echo '<form action="kostil2.php" method="get">
                <a href="#" class="btn my_button" onclick="parentNode.submit();">13-40</a>
                <input type="hidden" name="time" value="time3"/>
            </form>'; endif; 



    $d = mysqli_query($db,"SELECT * FROM `time_r` WHERE `hospital` = '$hos_id' AND `position` = '$pos_id' AND `date` = '$p_date'");
    while( $eee = mysqli_fetch_assoc($d)){
        
            
    }
endif;
?>

</section>

<?php
    include('foot.php'); 
?>