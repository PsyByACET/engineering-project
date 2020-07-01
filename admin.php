<?php
    include('head.php');
?>
<section class="del_record_s" id="rec">
    
    <?php 
    echo '<h1>Записи на приём</h1>';
    $r = mysqli_query($db,"SELECT * FROM `records`");
    while( $u = mysqli_fetch_assoc($r)){
        $i++;
        echo '<div class="del_record_s__block">';
        echo 'Клиент под id '.$u['patient'].'<br>';
        echo 'записан на '.$u['date_record']. ' в ';
        echo $u['time_record']. ' <br>';
        echo $u['hospital']. ' <br>';
        echo 'К '.$u['position']. 'у<br>';
        echo '<form action="delete-record-admin.php" method="get">
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
<?php
    include('foot.php');
?>