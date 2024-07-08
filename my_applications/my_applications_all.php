<?
    session_start();
    $connection = mysqli_connect('localhost', 'root', '', 'vr_club');
    
    $isAuthorized = isset($_SESSION['users']) && $_SESSION['users']['role_user'] == 2;

    $email = $_SESSION['users']['email']; 

    $applic_user = mysqli_query($connection, "SELECT `email_user`, `fio`, `telephone`, `name_visiting`, 
    `quantity`, `data`, `time`, `name_status` FROM `applications`, `users`, 
    `visiting`, `status` WHERE `users`.`id_user` = `applications`.`user_id` 
    AND `visiting`.`id_visiting` = `applications`.`visiting_id` 
    AND `status`.`id_status` = `applications`.`status_id` 
    AND `email_user` = '$email'");

    $applic_user = mysqli_fetch_all($applic_user, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/user_all_aplic.css">
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
    <script src="../js/all_aplic.js" defer></script>
</head>
<body>
    <header class="header">

        <div class="container">
            
            <div class="header__title">
                <a href="../main.php"><img src="/img/Logo.png" alt="Logo" class="Logo"></a>
                <a href="../price/price_page.php">Услуги</a>
                <a href="../games/games_page.php">Игры</a>
                <a href="../reviews/reviews_page.php">Отзывы</a>
                <a href="#contacts">Контакты</a>
                <a href="/my_applications/my_applications_all.php">Мои заявки</a>
                <div class="nameUser"><?php echo htmlspecialchars($email); ?></div>
                <form method="POST" action="../php/exit.php">
                    <button class="exit_main">Выйти</button>
                </form>
            </div>

        </div>

    </header>

    <form class="modal" method="post" action="../php/create_aplic_user.php"  hidden>
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

    <section class="applications_info_user">
        <div class="info">
            <div class="container">
                <div class="create_user-applications_info">
                    <div class="create_user-applications">
                        <button class="buttonCreate" id="butCreate">Создать заявку</button>
                    </div>
                </div>
                
                <div class="applic_list_users">
                    <div class="applications_list_users">
                        
                        <div class="name-applications_list_users">
                            <h3 class="style_name_applications_users email-name_users">Почта</h3>
                            <h3 class="style_name_applications_users fio-name_users">ФИО</h3>
                            <h3 class="style_name_applications_users phone-name_users">Телефон</h3>
                            <h3 class="style_name_applications_users visiting-name_users">Посещение</h3>
                            <h3 class="style_name_applications_users quantity-name_users">Количество</h3>
                            <h3 class="style_name_applications_users date-name_users">Дата</h3>
                            <h3 class="style_name_applications_users time-name_users">Время</h3>
                            <h3 class="style_name_applications_users management-name_users">Статус</h3>
                        </div>

                        <div class="applications_list_info_users">
                            <div class="applications_list_info-grid_users">
                            <?
                                foreach($applic_user as $applic_users){
                                    echo "<div class='list_application_info_users'>";
                                        echo "<h5 class='style_applic_users NameEmail_users'>". $applic_users['email_user'] . "</h5>";
                                        echo "<h5 class='style_applic_users NameFio_users'>". $applic_users['fio'] . "</h5>";
                                        echo "<h5 class='style_applic_users NamePhone_users'>". $applic_users['telephone'] . "</h5>";
                                        echo "<h5 class='style_applic_users NameVisiting_users'>". $applic_users['name_visiting'] . "</h5>";
                                        echo "<h5 class='style_applic_users NameQuantity_users'>". $applic_users['quantity'] . "</h5>";
                                        echo "<h5 class='style_applic_users NameDate_users'>". $applic_users['data'] . "</h5>";
                                        echo "<h5 class='style_applic_users NameTime_users'>". $applic_users['time'] . "</h5>";
                                        echo "<h5 class='style_applic_users NameManagement_users'>";
                                            echo "<span class='management'>".$applic_users['name_status']."</span>";
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
    </section>

    <form class="modal" method="post" action="../php/create_aplic_user.php">
        <div class="modal_application">
            <div class="modal_bt_close">
                <button type="button" class="bt_close">&#10006;</button>
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
                        <button class="to_send_bt" type="submit">Отправить</button>
                    </div>
                </div>
                <div class="txt_data_for_processing">
                    «Нажимая на кнопку, вы даете согласие 
                    на обработку персональных данных и 
                    соглашаетесь c политикой конфиденциальности. 
                    Для уточнения информации с вами свяжется 
                    администратор по номеру телефона, который вы указали»
                </div> 
            </div>
        </div>
    </form>

    <footer class="basement">
        <div class="info">
            <div class="container">
                <a name="contacts"></a>
                <div class="txtContacts">
                    <h1 class="h1Contacts">Адрес и контакты</h1>
                </div> 

                <div class="contacts_info">
                    <div class="about_flex_contacts_info">
                        <div class="about__flex-item-contacts_info">
                            <div class="txt_con">
                                <div class="con_name_info">
                                    <h3 class="h3Name">Информация:</h3>
                                </div>
                                <div class="con_detailed_info">
                                    <div class="txt_info">
                                        Время работы:
                                    </div> 
                                    <div class="txt_info">
                                        Ежедневно с 8:00 до 20:00
                                    </div> 
                                    <div class="txt_info">
                                        <a href="../basement/rules.html">Правила посещения VR клуба</a>
                                    </div> 
                                </div> 
                            </div>
                        </div> 
                        <div class="about__flex-item-contacts_info">
                            <div class="txt_con">
                                <div class="con_name_info">
                                    <h3 class="h3Name">Адрес клуба:</h3>
                                </div>
                                <div class="con_detailed_info">
                                    <div class="flex_img">
                                        <div class="con_basement_img">
                                            <img src="/img/Basement_img/Contacts_img/Location_log.png" alt="basement_img" class="basement_img" > 
                                        </div> 
                                        <div class="txt_info">
                                            г. Калуга,<br>
                                            ул Владимира Козлова, 1
                                        </div>
                                    </div>

                                </div> 
                            </div>
                        </div> 
                        <div class="about__flex-item-contacts_info">
                            <div class="txt_con">
                                <div class="con_name_info">
                                    <h3 class="h3Name">Контакты:</h3>
                                </div>
                                <div class="con_detailed_info">
                                    <div class="flex_img">
                                        <div class="con_basement_img">
                                            <img src="/img/Basement_img/Contacts_img/iPhone_14_log.png" alt="basement_img" class="basement_img" > 
                                        </div> 
                                        <div class="txt_info">
                                            <a href="tel:89999999999">8 (999) 999-99-99</a>
                                        </div> 
                                    </div>
                                    <div class="flex_img">
                                        <div class="con_basement_img">
                                            <img src="/img/Basement_img/Contacts_img/Phone_log.png" alt="basement_img" class="basement_img" > 
                                        </div> 
                                        <div class="txt_info">
                                            <a href="tel:89999999999">8 (999) 999-99-99</a>
                                        </div> 
                                    </div>
                                    <div class="flex_img">
                                        <div class="con_basement_img">
                                            <img src="/img/Basement_img/Contacts_img/Mail_log.png" alt="basement_img" class="basement_img" > 
                                        </div> 
                                        <div class="txt_info">
                                            vr.club40@gmail.com
                                        </div> 
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="yandexmap" style="width: 550px; height: 400px">
                            <script type="text/javascript" charset="utf-8" 
                            async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9b314351289e89cd97b3445dccd6b376dc52c9fb1508ad0021694fc5d56678f5&amp;
                            width=100%25&amp;
                            height=400&amp;
                            lang=ru_RU&amp;
                            scroll=true"></script>
                        </div>
                    </div>
                </div>
                
            </div>
            <hr>
            <div class="container">
                <div class="about_flex_basement_info">
                    <div class="txt_con">
                        <div class="con_detailed_basement_info">
                            <div class="txt_basement_info">
                                        © 2024 VR CLUB. Все права защищены.
                            </div> 
                            <div class="txt_basement_info">
                                <div class="txt_basement_info">
                                    <a href="../basement/approval.html">Согласие на обработку персональных данных</a>
                                </div>
                                <div class="txt_basement_info">
                                    <a href="../basement/politics.html">Политика в отношении обработки персональных данных</a>
                                </div>                                   
                            </div> 
                            <div class="con_basement_img">
                                <a class="tg_soch">
                                    <img src="../img/Basement_img/Social_Network_img/Telegram_log.png" alt="social_network_img" class="social_network_img" > 
                                </a>
                                <a class="vk_soch">
                                    <img src="../img/Basement_img/Social_Network_img/VK_log.png" alt="social_network_img" class="social_network_img" > 
                                </a>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>


        </div>
    </footer>
</body>
</html>