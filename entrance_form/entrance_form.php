<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/ent_form.css">
    <title>VR CLUB</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../img/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/icon/favicon-16x16.png">
    <link rel="manifest" href="../img/icon/site.webmanifest">
    <link rel="mask-icon" href="../img/icon/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
    <script src="../js/jquery.maskedinput.min.js" defer></script>
    <script src="../js/form_avtor.js" defer></script>

</head>
<body>
    <form action="../php/entrance.php" enctype="multipart/form-data" class="entrance_form" method="post">
        <h3>Войти</h3>
        <?php
            // Собщение об ошибке
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);

        ?>
        <label for="email_entrance" >Почта</label>
        <input type="text" name ="email" placeholder="Введите электронную почту" id="email">
        <span id="email_texst"></span>

        <label for="password_entrance">Пароль</label>
        <input type="password" name ="password" placeholder="Введит пароль" id="password">
        <span id="password_texst"></span>

        <button class="btAvtor" id = "entranceBt" >Войти</button>
        <a href="./registration_form.php" class="link_to regForm">Зарегистрироваться</a>
    </form>
</body>
</html>
