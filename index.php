<?php
    include('head.php'); 
    setcookie('user_find', 0, time() + 3600, "/" );
    setcookie('card_find', 0, time() + 3600, "/" );
?>

    <section class="main-s">
        <div class="container">
            <div class="main-events">
                <div class="main-events__medical-staff main-events__block wow bounceInLeft">
                    <a href="list-positions.php">
                        <img src="img/hospital.svg" alt=""> <br>
                        Просмотреть медицинский персонал <br> и больницы
                    </a>
                </div>
                <div class="main-events__medical-card main-events__block wow bounceInLeft">
                    <a href="medical-card.php">
                        <img src="img/mec_card.svg" alt=""><br>
                        Просмотреть вашу медицинскую <br> карту
                    </a>
                </div>
                <div class="main-events__record main-events__block wow bounceInLeft">
                    <a href="record_position.php">
                        <img src="img/doctor.svg" alt=""><br>
                        записаться на приём
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php
    include('foot.php'); 
?>