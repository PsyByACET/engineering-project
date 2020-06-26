<?php
    include('head.php'); 
?>

<section>


<?php
    $r = mysqli_query($db,"SELECT * FROM `positions`");
    while( $u = mysqli_fetch_assoc($r)){
        echo $u['position'] . '<br>';
        echo '<form action="list-doctors.php" method="get">
                <input type="submit" name="position" value="' . $u['position'] . '">
            </form>';
    }
?>
</section>
<?php
    include('foot.php'); 
?>