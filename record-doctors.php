<?php
    include('head.php');
    
    print_r($_GET['position']);
    setcookie('position', $_GET['position'], time() + 3600, "/" );
    

    $b = $_GET['position'];


    $pos_id = mysqli_query($db,"SELECT * FROM `positions` WHERE `position` = '$b'");
    while( $u = mysqli_fetch_assoc($pos_id)){
        echo $u['position_id'];
        $c = $u['position_id'];
        setcookie('position_id', $c, time() + 3600, "/" );
    }
    
    echo '<br>';
?>

<section>
            <?php 

            $doc = mysqli_query($db,"SELECT * FROM `workers` WHERE `position` = '$c'");
            while( $uu = mysqli_fetch_assoc($doc)){
                $dp =$uu['hospital'];
                $d = mysqli_query($db,"SELECT * FROM `hospitals` WHERE `hospital_id` = '$dp'");
                while( $eee = mysqli_fetch_assoc($d)){
                    $dd = $eee['name_hospital'];
                    echo '<form action="kostil.php" method="get">
                        <input type="submit" name="name_hospital" value="' . $dd . '">
                        </form>';
                        
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