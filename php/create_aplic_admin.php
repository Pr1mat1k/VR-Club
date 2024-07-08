<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    session_start();
    require_once 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получение данных из формы
        $id_user = $_SESSION['users']['id_user'];
        $fio = isset($_POST["fio"]) ? $_POST["fio"] : null;
        $phone = isset($_POST["phone"]) ? $_POST["phone"] : null;
        $visit = isset($_POST["visit"]) ? $_POST["visit"] : null;
        $kol_people = isset($_POST["kol_people"]) ? $_POST["kol_people"] : null;
        $date = isset($_POST["date"]) ? $_POST["date"] : null;
        $time = isset($_POST["time"]) ? $_POST["time"] : null;
    
        // Проверка, что все поля заполнены
        if ($fio && $phone && $visit && $kol_people && $date && $time) {
            // Создание заявки в базе данных
            $applications_create = mysqli_query($connect, "INSERT INTO `applications` (`user_id`, `fio`, `telephone`, 
            `visiting_id`, `quantity`, `data`, `time`, `status_id`) VALUES 
            ('$id_user', '$fio', '$phone', '$visit', '$kol_people', '$date', '$time', 1)");
    
            // Проверка успешности выполнения запроса
            if ($applications_create) {
                header('Location: ../admin_prof/profAdmin.php');
                exit();
            } else {
                echo "Ошибка при создании заявки: " . mysqli_error($connect);
            }
        } else {

            header('Location: ../admin_prof/profAdmin.php');
            exit();
        }
    } else {
        echo "Некорректный метод запроса";
    }








 


