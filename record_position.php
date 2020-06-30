<?php
    include('head.php'); 
?>
<section>

<?php
    $r = mysqli_query($db,"SELECT * FROM `positions`");
    while( $u = mysqli_fetch_assoc($r)){
        echo '<br>';
        echo '<form action="record-doctors.php" method="get">
                <input type="submit" name="position" value="' . $u['position'] . '">
            </form>';
    }
?>

</section>
<section>
    <?php 
    $r = mysqli_query($db,"SELECT * FROM `records`");
    while( $u = mysqli_fetch_assoc($r)){
        echo $u['patient']. '  ';
        echo $u['id_time_r']. '  ';
        echo $u['id_time_r']. '  ';
        echo $u['date_record']. ' ';
        echo $u['time_record']. ' ';
        echo $u['hospital']. ' ';
        echo $u['position']. '<br>';
        echo '<form action="delete-record.php" method="get">
                <a href="#" onclick="parentNode.submit();">Удалить запись</a>
                <input type="hidden" name="record_id" value="'.$u['record_id'].'">
                <input type="hidden" name="time" value="'.$u['time_record'].'">
                <input type="hidden" name="date" value="'.$u['date_record'].'">
                <input type="hidden" name="id_time_r" value="'.$u['id_time_r'].'">
            </form>';
    }
    ?>
</section>
<?php

  echo $_COOKIE['D_date_record'];
  echo '<br>';
  echo $_COOKIE['D_time_record'];

    include('foot.php'); 
?>