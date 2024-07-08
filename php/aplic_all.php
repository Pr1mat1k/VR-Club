<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    session_start();
    require_once 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $shipmentId = isset($_POST['data_id']) ? $_POST['data_id'] : null;
        $date_all = isset($_POST['date_all']) ? $_POST['date_all'] : null;
        $time_all = isset($_POST['time_all']) ? $_POST['time_all'] : null;
        $action = isset($_POST['btAcc']) ? $_POST['btAcc'] : (isset($_POST['btRej']) ? $_POST['btRej'] : null);
    
        if ($shipmentId && $action && ($action == '1' || $action == '2') && $date_all && $time_all) {

            // Преобразование действия в целое число
            $status = intval($action);
            // Подготовка и выполнение SQL-запроса
            $stmt = $connect->prepare("UPDATE `applications` SET `status_id` = ?, `data` = ?, `time` = ? WHERE `id_applications` = ?");
            $stmt->bind_param("issi", $status, $date_all, $time_all, $shipmentId);
    
            if ($stmt->execute()) {
                $stmt->close();
                header('Location: ../admin_prof/profAdmin.php');
                exit();
            } else {
                echo "Ошибка при обновлении заявки: " . $stmt->error;
            }
    
            $stmt->close();

        }elseif($shipmentId && $action && ($action == '1' || $action == '2') && $date_all){

            $status = intval($action);
            // Подготовка и выполнение SQL-запроса
            $stmt = $connect->prepare("UPDATE `applications` SET `status_id` = ?, `data` = ? WHERE `id_applications` = ?");
            $stmt->bind_param("isi", $status, $date_all, $shipmentId);
    
            if ($stmt->execute()) {
                $stmt->close();
                header('Location: ../admin_prof/profAdmin.php');
                exit();
            } else {
                echo "Ошибка при обновлении заявки: " . $stmt->error;
            }
    
            $stmt->close();

        }elseif($shipmentId && $action && ($action == '1' || $action == '2') && $time_all){

            $status = intval($action);
            // Подготовка и выполнение SQL-запроса
            $stmt = $connect->prepare("UPDATE `applications` SET `status_id` = ?, `time` = ? WHERE `id_applications` = ?");
            $stmt->bind_param("isi", $status, $time_all, $shipmentId);
    
            if ($stmt->execute()) {
                $stmt->close();
                header('Location: ../admin_prof/profAdmin.php');
                exit();
            } else {
                echo "Ошибка при обновлении заявки: " . $stmt->error;
            }
    
            $stmt->close();

        }elseif($shipmentId && $action && ($action == '1' || $action == '2')){

            $status = intval($action);
            // Подготовка и выполнение SQL-запроса
            $stmt = $connect->prepare("UPDATE `applications` SET `status_id` = ? WHERE `id_applications` = ?");
            $stmt->bind_param("ii", $status, $shipmentId);
    
            if ($stmt->execute()) {
                $stmt->close();
                header('Location: ../admin_prof/profAdmin.php');
                exit();
            } else {
                echo "Ошибка при обновлении заявки: " . $stmt->error;
            }
    
            $stmt->close();

        } else {
            echo "Некорректные данные";
        }
    } else {
        echo "Метод запроса не POST";
    }
