<?php
    include('head.php'); 
    echo '<a href="index.php" class="back-btn" style="margin-left: 20px;"><img style="width: 80px; " src="img/back.svg" alt=""></a><br>';
?>

<section class="list_pos_s">


<?php
    echo '<h1>Выберите Специальность</h1>';
    $r = mysqli_query($db,"SELECT * FROM `positions`");
    while( $u = mysqli_fetch_assoc($r)){
        echo'<br>';
        echo '<form action="list-doctors.php" method="get">
                <input type="submit" class="btn my_list_button" name="position" value="' . $u['position'] . '">
            </form>';
    }
?>
</section>
<?php
    include('foot.php'); 
?>