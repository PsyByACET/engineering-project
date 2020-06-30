<?php
    include('head.php');
    echo '<a href="record_position.php" class="back-btn" style="margin-left: 20px;"><img style="width: 80px; " src="img/back.svg" alt=""></a><br>';
    
    setcookie('position', $_GET['position'], time() + 3600, "/" );
    

    $b = $_GET['position'];


    $pos_id = mysqli_query($db,"SELECT * FROM `positions` WHERE `position` = '$b'");
    while( $u = mysqli_fetch_assoc($pos_id)){
        $c = $u['position_id'];
        setcookie('position_id', $c, time() + 3600, "/" );
    }
    
?>

<section class="record_doc_s">
            <?php 
            echo '<h1>'. $_GET['position'] . '</h1><br>';
           
            $doc = mysqli_query($db,"SELECT * FROM `workers` WHERE `position` = '$c'");
            while( $uu = mysqli_fetch_assoc($doc)){
                $dp =$uu['hospital'];
                $d = mysqli_query($db,"SELECT * FROM `hospitals` WHERE `hospital_id` = '$dp'");
                while( $eee = mysqli_fetch_assoc($d)){
                    $dd = $eee['name_hospital'];
                    echo '<form action="kostil.php" method="get">
                        <input type="submit" class="btn my_list_button" name="name_hospital" value="' . $dd . '">
                        </form><br>';
                        
                }  
            }
            ?>
        
    </table>
    
</section>
<h2>

</h2>
<?php
    include('foot.php'); 
?>