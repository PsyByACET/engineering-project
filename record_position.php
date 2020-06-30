<?php
    include('head.php'); 
    echo '<a href="index.php" class="back-btn" style="margin-left: 20px;"><img style="width: 80px; " src="img/back.svg" alt=""></a><br>';
    $i=0;
?>
<?php 
    if($_COOKIE['user'] != ''):  
?>   
<section class="record_pos_s">

<?php
    echo '<h1>Выберите Специальность</h1>';
    $r = mysqli_query($db,"SELECT * FROM `positions`");
    while( $u = mysqli_fetch_assoc($r)){
        echo '<br>';
        echo '<form action="record-doctors.php" method="get">
                <input type="submit" class="btn my_list_button" name="position" value="' . $u['position'] . '">
            </form>';
    }
?>

</section>
<section class="del_record_s" id="rec">
    
    <?php 
    echo '<h1>Ваши записи на приём</h1>';
    $r = mysqli_query($db,"SELECT * FROM `records`");
    while( $u = mysqli_fetch_assoc($r)){
        $i++;
        echo '<div class="del_record_s__block">';
        echo 'Вы записаны на '.$u['date_record']. ' в ';
        echo $u['time_record']. ' <br>';
        echo $u['hospital']. ' <br>';
        echo 'К '.$u['position']. 'у<br>';
        echo '<form action="delete-record.php" method="get">
                <a href="#" onclick="parentNode.submit();">Удалить запись</a>
                <input type="hidden" name="record_id" value="'.$u['record_id'].'">
                <input type="hidden" name="time" value="'.$u['time_record'].'">
                <input type="hidden" name="date" value="'.$u['date_record'].'">
                <input type="hidden" name="id_time_r" value="'.$u['id_time_r'].'">
            </form></div>';
    }
    echo 'Всего записей - '.$i;
    ?>
    
</section>
<?php else: ?>
    <section class="record_pos_s">
        <div class="container">
            <h2>Вам нужно войти в свой аккаунт для записи на приём</h2>
        </div>
    </section>
<?php  endif; ?>
<?php

  echo $_COOKIE['D_date_record'];
  echo '<br>';
  echo $_COOKIE['D_time_record'];

    include('foot.php'); 
?>