<?php
include("application/users.php")
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/log.css">
    <title>Авторизация</title>
</head>

<body>
    <?php
    include("menu.php")
    ?>
    <div class="container">
        <form class="reg" action="auth.php" method="post">
            <h3> Авторизация</h3>
            <!-- Адрес электроной почты -->
            <div class="mb-3">
                <label for="examplenputEmail1" class="form-label">Адрес электроной почты </label>
                <p></p>
                <input name="email" type="email" class="form-control" id="examplenputEmail1" aria-activedescendant="emailHelp">
                <div class="form-text" id="emailHelp">Мы никогда и никому не передадим вашу почту</div>
            </div>



            <!-- Пароль-->
            <div class="mb-3">
                <label for="examplenputPassword1" class="form-label">Пароль </label>
                <p></p>
                <input name="password" type="password" class="form-control" id="examplenputPassword1">
            </div>


            <!-- Кнопка для регистрации-->
            <button name="button-log" type="submit" class="btn btn-primary">Войти</button>
            <a href="registration.php"> Зарегистрироваться</a>
            <div class="fotm-text1">Если еще не зарегистрировались</div>


        </form>
    </div>
    <!-- Конец формы регистрации -->
</body>

</html>