<?php
    include('head.php'); 
?>

    <section class="s-r">
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    
                    <h1>Форма регистрации</h1>
                    <form action="check_user.php" method="post">
                        <input type="text" required class="form-control" maxlength="18" name="login" id="login" placeholder="Логин 
                        <?php 
                            if($_COOKIE['user_find'] == 1) {
                                echo 'данный логин уже используется';
                            }
                        ?>"><br>
                        <input type="number" required class="form-control" name="id_card" id="id_card" placeholder="Номер медицинской карты
                        <?php 
                            if($_COOKIE['card_find'] == 1) {
                                echo 'данная карта уже используется';
                            }
                        ?>"> <br>
                        <input type="text" required class="form-control" maxlength="18" name="last_name" id="last_name" placeholder="Фамилия"><br>
                        <input type="text" required class="form-control" maxlength="18" name="first_name" id="first_name" placeholder="Имя"><br>
                        <input type="text" required class="form-control" maxlength="18" name="middle_name" id="middle_name" placeholder="Отчество"><br>
                        <input type="tel" required class="form-control" name="number" id="number" pattern="89[0-9]{9}" placeholder="Номер телефона в формате 89ххххххххх"><br>
                        <input type="password" required class="form-control" name="pass" maxlength="18" id="pass" placeholder="Пароль"><br>
                        <button class="btn my_button">Зарегистрироваться</button>
                    </form>
                </div>
                <div class="col">
                    <h1>Форма Авторизации</h1>
                    <form action="auth_user.php" method="post">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль"><br>

                        <button class="btn my_button">Вход</button>
                    </form>
                    <h1>Войти как админ</h1>
                    <form action="auth_admin.php" method="post">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль"><br>

                        <button class="btn my_button">Вход</button>
                    </form>
                </div>
            </div>
        <h3>Оставшиеся медицинские карты</h3>
        <?php
        $r = mysqli_query($db,"SELECT * FROM `medical_cards` WHERE `reg` = 0");
        while( $u = mysqli_fetch_assoc($r)){
            echo $u['medical_card_id']. ' ';
        }
        ?>
        </div>
    </section>

<?php
    include('foot.php'); 
?>