<?
    session_start();
    $connection = mysqli_connect('localhost','root','','vr_club');

    if (!isset($_SESSION['users']) || $_SESSION['users']['role_user'] != 1) {
        header('Location: ../entrance_form/entrance_form.php');
        exit();
    }

    $email = $_SESSION['users']['email']; 

    $applic = mysqli_query($connection, "SELECT `email_user`, `fio`, `telephone`, `name_visiting`, 
    `quantity`, `data`, `time`, `name_status` FROM `applications`, `users`, 
    `visiting`, `status` WHERE `users`.`id_user` = `applications`.`user_id` 
    AND `visiting`.`id_visiting` = `applications`.`visiting_id` 
    AND `status`.`id_status` = `applications`.`status_id` 
    AND (`status_id` = 1 OR `status_id` = 2)");

    $applics = mysqli_fetch_all($applic, MYSQLI_ASSOC);

    $shipment = mysqli_query($connection, "SELECT `id_applications` AS `id`, `email_user`, `fio`, `telephone`, `name_visiting`, `quantity`, `data`, `time`, `status_id` FROM `applications`, `users`, `visiting` 
    WHERE `users`.`id_user` = `applications`.`user_id` AND `visiting`.`id_visiting` = `applications`.`visiting_id`
    AND `status_id` = 3 ");

    $shipments = mysqli_fetch_all($shipment, MYSQLI_ASSOC);


    

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">        
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_admin_all.css">
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
    <script src="../js/Adminprof.js" defer></script>
</head>
<body>
    <header class="header">

        <div class="container">
            
            <div class="header__title">
                <a href="./profAdmin.php"><img src="/img/Logo.png" alt="Logo" class="Logo"></a>
                <div class="header__title-flex">
                    <div class="roleAdmin">Администратор:</div>
                    <div class="nameAdmin"><?php echo htmlspecialchars($email); ?></div>
                    <form method="POST" action="../php/exit.php">
                        <button class="buttonExit">Выйти</button>
                    </form> 
                </div>
            </div>

        </div>

    </header>


    <section class="applications_info">
        <div class="info">
            <div class="container">
                <div class="selection-applications_info">
                    <div class="style_applications all-applications">
                        <a id="applications_all">Все заявки</a>
                    </div>

                    <div class="style_applications all-applications-true">
                        <a id="applications_processed">Обработанные заявки</a>
                    </div>
                    
                    <div class="create-applications">
                        <button class="buttonCreate">Создать заявку</button>
                    </div>

                    <div class="selection-applications-date" hidden>
                        <div class="nameSelection">Найти по дате</div>

                        <div class="selection-date">
                            <div class="selection-date-info">
                                <input type="text" id="date_true" class="txtInputSelection-date" placeholder="Введите дату">
                            </div>
                            <div>
                                <button class="buttonFind">
                                    <img src="/img/Profiles/AdminImg/Search.png" alt="Search_logo" class="Search"> 
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="modal" method="post" action="../php/create_aplic_admin.php"  hidden>
                    <div class="modal_application">
                        <div class="modal_bt_close">
                            <button class="bt_close">&#10006;</button>
                        </div>
                        <h1 class="createApp">Создание заявки</h1>
                        <div class="about_sequence_reg">
                            <div class="about_flex_sequence_reg">
                                <div class="about__flex-item-sequence_reg">
                                    <input type="text" name="fio" id="fio_name" class="txtInputs Name" placeholder="Введите ваше ФИО">
                                    <span id = "fio_texst"></span>
                                </div>
                                <div class="about__flex-item-sequence_reg">
                                    <input id="phone" name ="phone" type="text" class="txtInputs Tel" placeholder="Введите ваш телефон">
                                    <span id = "phone_texst"></span>
                                </div>

                                <div class="about__flex-item-sequence_reg">
                                    <select name="visit" id="type_visit">
                                      <option value="" disabled selected >Выберите тип посещения</option>
                                      <option value="1">Обычное посещение</option>
                                      <option value="2">День рождение</option>
                                      <option value="3">Мероприятие</option>
                                    </select>
                                    <span id = "visit_texst"></span>
                                </div>

                                <div class="about__flex-item-sequence_reg">
                                    <input id="people" name = "kol_people" type="text" class="txtInputs people" placeholder="Количество человек до 20">
                                    <span id = "kol_people_texst"></span>
                                </div>

                                <div class="about__flex-item-sequence_reg">
                                    <input id="date" name = "date" type="text" class="txtInputs people" placeholder="Введите дату">
                                    <span id = "date_text"></span>
                                </div>

                                <div class="about__flex-item-sequence_reg">
                                    <input id="time" name = "time" type="text" class="txtInputs people" placeholder="Введите время">
                                    <span id = "time_text"></span>
                                </div>

                                <div class="about__flex-item-sequence_reg">
                                    <button class="to_send_bt">Отправить</button>
                                </div>
                            </div>
                            <div class="txt_data_for_processing">
                                «Нажимая на кнопку, вы даете согласие 
                                на обработку персональных данных и 
                                соглашаетесь c политикой конфиденциальности»
                            </div> 
                        </div>
                    </div>
                </form>
                
                <div class="applic_list">
                    <div class="applications_list_all">
                        <div class="name-applications_list">
                        <h3 class="style_name_applications email-name">Почта</h3>
                        <h3 class="style_name_applications fio-name">ФИО</h3>
                        <h3 class="style_name_applications phone-name">Телефон</h3>
                        <h3 class="style_name_applications visiting-name">Посещение</h3>
                        <h3 class="style_name_applications quantity-name">Количество</h3>
                        <h3 class="style_name_applications date-name">Дата</h3>
                        <h3 class="style_name_applications time-name">Время</h3>
                        <h3 class="style_name_applications management-name">Управление</h3>
                        </div>

                        <form class="applications_list_info_all" name="forms_app" method="post" action="../php/aplic_all.php">
                            <div class="applications_list_info-grid">
                                <?
                                    foreach($shipments as $index => $applications_alls){
                                        echo "<div class='list_application_info'>";
                                            echo "<h5 class='style_applic NameEmail'>". htmlspecialchars($applications_alls['email_user']) . "</h5>";
                                            echo "<h5 class='style_applic NameFio'>". htmlspecialchars($applications_alls['fio']) . "</h5>";
                                            echo "<h5 class='style_applic NamePhone'>". htmlspecialchars($applications_alls['telephone']) . "</h5>";
                                            echo "<h5 class='style_applic NameVisiting'>". htmlspecialchars($applications_alls['name_visiting']) . "</h5>";
                                            echo "<h5 class='style_applic NameQuantity'>". htmlspecialchars($applications_alls['quantity']) . "</h5>";
                                            echo "<input name = 'date_all' id='date_all_{$index}' type='text' class='inputDate NameDate' placeholder='". htmlspecialchars($applications_alls['data']) . "' >";
                                            echo "<input name = 'time_all' id='time_all_{$index}' type='text' class='inputTime NameTime' placeholder='". htmlspecialchars($applications_alls['time']) . "' >";
                                            echo "<input name =' data_id' id='time_all_{$index}' type='hidden' value='". htmlspecialchars($applications_alls['id']) . "' >";
                                            echo "<button name = 'btAcc' class='buttonAccept' value = '1'>Принять</button>";
                                            echo "<button name = 'btRej' class='buttonReject' value = '2'>Отклонить</button>";
                                        echo "</div>";
                                    }
                                    
                                                             
                                ?>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="applic_list_true" hidden>
                    <div class="applications_list_true">
                        <div class="name-applications_list_true">
                            <h3 class="style_name_applications_true email-name_true">Почта</h3>
                            <h3 class="style_name_applications_true fio-name_true">ФИО</h3>
                            <h3 class="style_name_applications_true phone-name_true">Телефон</h3>
                            <h3 class="style_name_applications_true visiting-name_true">Посещение</h3>
                            <h3 class="style_name_applications_true quantity-name_true">Количество</h3>
                            <h3 class="style_name_applications_true date-name_true">Дата</h3>
                            <h3 class="style_name_applications_true time-name_true">Время</h3>
                            <h3 class="style_name_applications_true management-name_true">Статус</h3>
                        </div>

                        <div class="applications_list_info_true">
                            <div class="applications_list_info-grid_true">
                                <?
                                    foreach($applics as $applics_alls){
                                        echo "<div class='list_application_info_true'>";
                                            echo "<h5 class='style_applic_true NameEmail_true'>". $applics_alls['email_user'] . "</h5>";
                                            echo "<h5 class='style_applic_true NameFio_true'>". $applics_alls['fio'] . "</h5>";
                                            echo "<h5 class='style_applic_true NamePhone_true'>". $applics_alls['telephone'] . "</h5>";
                                            echo "<h5 class='style_applic_true NameVisiting_true'>". $applics_alls['name_visiting'] . "</h5>";
                                            echo "<h5 class='style_applic_true NameQuantity_true'>". $applics_alls['quantity'] . "</h5>";
                                            echo "<h5 class='style_applic_true NameDate_true'>". $applics_alls['data'] . "</h5>";
                                            echo "<h5 class='style_applic_true NameTime_true'>". $applics_alls['time'] . "</h5>";
                                            echo "<h5 class='style_applic_true NameManagement_true'>";
                                                echo "<span class='management'>".$applics_alls['name_status']."</span>";
                                                echo "<span class='icon_management'></span>";
                                            echo "</h5>";
                                            
                                        echo "</div>";
                                    }
                                    
                                                             
                                ?>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>    
    </section>
</body>
</html>