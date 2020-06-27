<?php
    include('head.php'); 
    $id_card = $_COOKIE['id_card'];
?>
<section class="med-s">
    <div class="container">
        <h1>Медкарта</h1>
        <h2>Ваша медкарта №<?php echo $_COOKIE['id_card'] ?></h2>
        <h3>Ваши болезни</h3> <br>
        <?php
            $diagnosis_f = $db->query("SELECT * FROM `medical_cards` WHERE `medical_card_id` = '$id_card'");
            while( $u = mysqli_fetch_assoc($diagnosis_f)){
                $diagnosis = $u['diagnosies'];  
                echo  $diagnosis;
            }
        ?>
        <h3>Ваша больница 
            <?php 
                $hos_f = $db->query("SELECT * FROM `medical_cards` WHERE `medical_card_id` = '$id_card'");
                while( $uu = mysqli_fetch_assoc($hos_f)){
                    echo '<form action="hos.php" method="get">
                            <input type="submit" name="position" value="' . $uu['hospital'] . '">
                        </form>';
                }
            ?>
        </h3>
    </div>
</section>

<?php
    include('foot.php'); 
?>