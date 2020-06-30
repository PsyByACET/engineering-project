<?php
    include('head.php'); 
    echo '<a href="list-positions.php" class="back-btn" style="margin-left: 20px"><img style="width: 80px; " src="img/back.svg" alt=""></a><br>';
    print_r($_GET['position']);
    $b = $_GET['position'];


    $pos_id = mysqli_query($db,"SELECT * FROM `positions` WHERE `position` = '$b'");
    while( $u = mysqli_fetch_assoc($pos_id)){
        echo $u['position_id'];
        $c = $u['position_id'];
    }
    
    

    
?>
            

<section class="list_doc_s">
    
    <table>
        <tr><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Больница</th></tr>
            <?php 
            $doc = mysqli_query($db,"SELECT * FROM `workers` WHERE `position` = '$c'");
            while( $uu = mysqli_fetch_assoc($doc)){
                echo '<tr> <td>' . $uu['last_name'] . '</td>
                <td>' . $uu['first_name'] . '</td>
                <td>' . $uu['middle_name'] . '</td>
                <td> 
                <form action="hos.php" method="get">
                <a href="#" onclick="parentNode.submit();">' . $uu['hospital'] . '</a>
                <input type="hidden" name="position" value="' . $uu['hospital'] . '"/>
            </form>
                </td>
                </tr>';
            }
            ?>
        
    </table>

</section>

<?php
    include('foot.php'); 
?>