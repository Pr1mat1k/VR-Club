<?
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
    <form action="../php/regist.php" method="post" enctype="multipart/form-data" 
    name = "registration" class="registration_form" id ="form">
        <?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);

            if (isset($_SESSION['messages'])) {
                echo '<p class="msgs"> ' . $_SESSION['messages'] . ' </p>';
            }
            unset($_SESSION['messages']);
        ?>
        <h3>Регистрация</h3>
        <label for="email">Почта</label>
        <input type="text" name ="email_reg" placeholder="Введите электронную почту" id="email">
        <span id="email_texst"></span>

        <label for="password">Пароль</label>
        <input type="password" name ="password_reg" placeholder="Введит пароль" id="password">
        <span id="password_texst"></span>

        <label for="password_check">Подтверждение пароля</label>
        <input type="password" name ="password_check_reg" placeholder="Введит пароль повторно" id="password_check" disabled>
        <span id="password_check_texst"></span>

        <button class="btAvtor" id = "registrationeBt" onclick="registBt()" disabled>Зарегистрироваться</button>
        <a href="./entrance_form.php" class="link_to entrForm">Вход</a>
    </form>
</body>
</html>
