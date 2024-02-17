<?php
include("application/users.php")
?>
<?php
    include("menu.php")
    ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/log.css">
    <title>Регистрация</title>
</head>

<body>
    
    <div class="container">
        <form class="reg" action="registration.php" method="post">
            <h3> Регистрация</h3>


            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">ФИО</label>
                <input name="login" type="text" class="form-control" id="formGroupExampleInput">
            </div>





            <div class="mb-3">
                <label for="examplenputEmail1" class="form-label">Адрес электроной почты </label>
                <input name="email" type="email" class="form-control" id="examplenputEmail1" aria-activedescendant="emailHelp">
                <div id="emailHelp" class="form-text">Мы никогда и никому не передадим вашу почту</div>
            </div>


            <div class="mb-3">
                <label for="examplenputAge1" class="form-label">Возраст</label>
                <input name="age" type="text" class="form-control" id="examplenputAge1">

            </div>



            <div class="mb-3">
                <label for="examplenputPassword1" class="form-label"> Пароль </label>
                <input name="pass-second" type="password" class="form-control" id="examplenputPassword1">

            </div>

            <div class="mb-3">
                <label for="examplenputPassword2" class="form-label">Ввидите Пароль Повторно</label>
                <input name="pass-first" type="password" class="form-control" id="examplenputPassword2">

            </div>


            <button name="button-reg" type="submit" class="btn btn-primary">Отрпавить</button>
            <a href="auth.php"> Авторизоваться</a>
            <div class="fotm-text1">Если вы уже зарегистрировались, то нажмите на кнопку выше</div>


        </form>
    </div>
    <!-- Конец формы регистрации -->
</body>

</html>