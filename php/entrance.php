<?php
    session_start();

    require_once 'connect.php';

    $email = $_POST['email'];
    $password = md5($_POST['password']);


    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email_user` = '$email' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $users = mysqli_fetch_assoc($check_user);

        $_SESSION['users'] = [
            "id_user" => $users['id_user'],
            "email" => $users['email_user'],
            "password" => $users['password'],
            "role_user" => $users['role_user'],
        ];

        if($users['role_user'] == 1){
            header('Location: ../admin_prof/profAdmin.php');
            exit();
        }else{
            header('Location: ../main.php');
            exit();
        }


        

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';

        header('Location: ../entrance_form/entrance_form.php');
        exit();
    }
?>