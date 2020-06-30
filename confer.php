<?php
    include('head.php');
    
    
    echo $_COOKIE['position'];
    echo '<br>';
    echo $_COOKIE['name_hospital'];
    echo '<br>';
    echo $_COOKIE['position_id'];
    echo '<br>';
    echo $_COOKIE['hospital_id'];
    echo '<br>';
    echo $_COOKIE['date'];
    echo '<br>';
    echo $_COOKIE['time'];
    $time = $_COOKIE['time'];
    echo '<br>';
    echo $_COOKIE['user_id'];
    echo 'вре1мя'.$_COOKIE['time21']; echo '<br>';
        echo 'вре2мя'.$_COOKIE['time22']; echo '<br>';
        echo 'вре3мя'.$_COOKIE['time23']; echo '<br>';
    ?>
    

<section>
    <form action="seve-in-db.php" method="get">
        <a href="#" class="btn btn-success" onclick="parentNode.submit();">Потвердить</a>
        <input type="hidden" name="time" value="<?php echo $time; ?>"/>
    </form>'
</section>

<?php
    include('foot.php'); 
?>