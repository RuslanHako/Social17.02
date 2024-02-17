<?php 
session_start();//Инициализация сессии
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль Пользователя</title>
    <link rel="stylesheet" href="../css/profile-style.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
    <header>
        <h1>Профиль Пользователя</h1>
        <!-- Html-Код для кнопки выхода-->
        <form action="logout.php" method="post"></form>
        <button type="submit" name="logoutButton"  >Выйти</button>


    </header>
    <?php 
    include("../menu.php")?>
    <section id="profile-info"  > 

    <h2> ИНформация о пользователе</h2>
    <div id=" profile-picture-container">
        <img id="profile-picture" src="avatars/placeholder.png"
alt="avatars/placeholder.png">
    </div>

<!-- Втавляем имя пользователя из сессии-->
<p>ФИО:| <span class="info" id="user__name">

<?php echo isset($_SESSION['login'])? $_SESSION['login']:'';?>

</span></p>
<!-- Втавляем ВОзраст из сессии-->

<p>
    Возраст: <span class="info" id="user-age">
    <?php echo isset($_SESSION['age'])? $_SESSION['age']:'';?>
    </span>
</p>


<!-- Втавляем ВОзраст из сессии-->

<p>
    Дата создания Аккаунта: <span class="info" id="accaunt-creation-date">
    </span>
</p>
<p>Email: <span class="info" id="user-email"></span></p>
<p>О себе: <span class="info" id="user-info"></span></p>
<h3>Панель управления</h3>
<button id="edit-profile">Редактировать Профиль</button>
<button id="admin-chat">Написать администратуру </button>

<!-- Кнопка обновления картинки-->

<button id="update-picture">Обновить картинку </button>
<button id="delete-picture">Удаление картинки </button>

<!-- Элемент для загрузки новой картинки-->
<input type="file" id="fie-input" accept="image/*" style="display:none;">


    </section>
    <section id="user-posts">
<h2>Мои Посты</h2>
<!-- здесь будут отображаться ее созданные посты -->
<ul id="post-list">
<!-- пример поста-->
<li>
    <p> Текст поста</p>
    <p>Комментарии: <span class="comments-sount">5</span> </p>
</li>
</ul>

    </section>
    
    
</body>
</html>