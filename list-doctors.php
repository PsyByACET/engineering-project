<?php
    include('head.php'); 
    print_r($_GET['position']);
    $b = $_GET['position'];


    $pos_id = mysqli_query($db,"SELECT * FROM `positions` WHERE `position` = '$b'");
    while( $u = mysqli_fetch_assoc($pos_id)){
        echo $u['position_id'];
        $c = $u['position_id'];
    }
    
    echo '<br>';

    
?>


<section>
    <table>
        <tr><th>Фамилия</th><th>Имя</th><th>Отчество</th></tr>
            <?php 
            $doc = mysqli_query($db,"SELECT * FROM `workers` WHERE `position` = '$c'");
            while( $uu = mysqli_fetch_assoc($doc)){
                echo '<tr> <td>' . $uu['last_name'] . '</td>
                <td><a href="#">' . $uu['first_name'] . '</a></td>
                <td>' . $uu['middle_name'] . '</td>
                <td> 
                    <form action="hos.php" method="get">
                        <input type="submit" name="position" value="' . $uu['hospital'] . '">
                    </form> 
                </td>
                <td>' . $uu['email'] . '</td>
                <td>' . $uu['number'] . '</td>
                </tr>';
            }
            ?>
        
    </table>

</section>

<?php
    include('foot.php'); 
?>