<?php
    include('head.php'); 
    $num = $_GET['position'];
    $r = mysqli_query($db,"SELECT * FROM `hospitals` WHERE `hospital_id` = '$num'");
    while( $u = mysqli_fetch_assoc($r)){
        $name = $u['name_hospital'];
        $location = $u['location_hospital'];
        $fio = $u['main_doctor_fio'];
        $number_contact = $u['number_contact'];
    }
?>

<?php
echo '<section class="hos_s " style="background: url(img/'.$_GET['position'].'.jpg) no-repeat center top / cover; height: 100vh;">'
?>
    <div class="hos_s__name wow bounceInLeft">
        <?php
            echo $name;
        ?>
    </div>
</section>
<section class="contacts_s">
    <div class="contacts_s__fio contacts_s__block wow bounceInLeft">
        <?php
            echo '<span>Заведущий</span><br>';
            echo $fio;
        ?>
    </div>
    <div class="contacts_s__location contacts_s__block wow bounceInUp">
        <?php
            echo '<span>Адресс</span><br>';
            echo $location;
        ?>
    </div>
    <div class="contacts_s__number-contact contacts_s__block wow bounceInRight">
        <?php
            echo '<span>Регистратура</span><br>';
            echo $number_contact;
        ?>
    </div>
</section>
<?php
    include('foot.php'); 
?>