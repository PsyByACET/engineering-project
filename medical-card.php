<?php
    include('head.php'); 
    $id_card = $_COOKIE['id_card'];
    echo '<a href="index.php" class="back-btn" style="margin-left: 20px;"><img style="width: 80px; " src="img/back.svg" alt=""></a><br>';
?>

<?php 
    if($_COOKIE['user'] != ''):  
?>                 
<section class="med_s">
    <div class="container">
        <h1>Медкарта</h1>
        <h2>Ваша медкарта №<?php echo $_COOKIE['id_card'] ?></h2><br>
        <h3 style="font-size: 3rem;">Ваши болезни</h3> 
        <?php
            $diagnosis_f = $db->query("SELECT * FROM `medical_cards` WHERE `medical_card_id` = '$id_card'");
            while( $u = mysqli_fetch_assoc($diagnosis_f)){
                $diagnosis = $u['diagnosies'];  
                echo  $diagnosis;
            }
        ?><br><br>
         <?php 
                $hos_f = $db->query("SELECT * FROM `medical_cards` WHERE `medical_card_id` = '$id_card'");
                while( $uu = mysqli_fetch_assoc($hos_f)){
                    echo '<h3>Ваша больница<form action="hos.php" method="get">
                            <input class="btn my_button" type="submit" name="position" value="' . $uu['hospital'] . '">
                        </form></h3>';
                }
            ?>
        
    </div>
</section>
<?php else: ?>
    <section class="med_s">
        <div class="container">
            <h2>Вам нужно войти в свой аккаунт для просмотра вашей медицинской карты</h2>
        </div>
    </section>
<?php  endif; ?>

<?php
    include('foot.php'); 
?>