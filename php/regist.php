<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    session_start();
    require_once 'connect.php';


    if(isset($_POST['email_reg']) || isset($_POST['password_reg'])){
        $email_reg = $_POST['email_reg'];
        $password_reg = md5($_POST['password_reg']);
        $password_check_reg = md5($_POST['password_check_reg']);
        $role = 2;

        if ($password_reg == $password_check_reg) {

        
            $check_user = mysqli_query($connect, "INSERT INTO `users` (`email_user`, `password`, `role_user`) VALUES ('$email_reg', '$password_reg', '$role')");
            
            
            $_SESSION['messages'] = 'Регистрация прошла успешно!';
            
            header('Location: ../entrance_form/registration_form.php');
            exit();
        
        } else {

            $_SESSION['message'] = 'Такой пользоваетль уже есть';
            header('Location: ../entrance_form/registration_form.php');
            exit();
            
        }

    }





?>
