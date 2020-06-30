<?php
    include('head.php');
    echo '<a onclick="javascript:history.back(-2); return false;" class="back-btn" style="margin-left: 20px;"><img style="width: 80px; " src="img/back.svg" alt=""></a><br>';
    
    if($_COOKIE['time'] == 'time1'){
        $time = '9-20';
    }
    if($_COOKIE['time'] == 'time2'){
        $time = '10-20';
    }
    if($_COOKIE['time'] == 'time3'){
        $time = '13-40';
    }
        
    ?>
    

<section class="conf_s">
    <div class="conf_s__text">
        <h1>Потвердите запись</h1>
        <?php
            echo '<br>';
            echo '<span style="color: #09f;">Врач</span>';
            echo '<br>';
            echo $_COOKIE['position'];
            echo '<br>';
            echo '<br>';
            echo '<span style="color: #09f;">Больница</span>';
            echo '<br>';
            echo $_COOKIE['name_hospital'];
            echo '<br>';
            echo '<br>';
            echo '<span style="color: #09f;">Дата и время</span>';
            echo '<br>';
            echo $_COOKIE['date'].' '.$time;
            echo '<br>';
            echo '<br>';
        ?>
    </div>
    <form action="seve-in-db.php" method="get">
        <a href="#" class="btn my_button" onclick="parentNode.submit();">Потвердить</a>
        <input type="hidden" name="time" value="<?php echo $time; ?>"/>
    </form>
</section>

<?php
    include('foot.php'); 
?>