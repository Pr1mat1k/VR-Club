<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    session_start();
    require_once 'connect.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Удаление всех переменных сессии
        $_SESSION = array();

        // Если нужно уничтожить сессию полностью, также удаляем cookie сессии
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Наконец, уничтожаем сессию
        session_destroy();

        // Перенаправление на гостевой режим или обновление текущей страницы
        header("Location: ../main.php");
        exit;
    }