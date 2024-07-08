<?
    session_start();
    $connection = mysqli_connect('localhost', 'root', '', 'vr_club');
    
    $isAuthorized = isset($_SESSION['users']) && $_SESSION['users']['role_user'] == 2;

    if ($isAuthorized):
        $email = $_SESSION['users']['email']; 
    endif; 

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style_reviews.css">
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
    <script src="../js/reviews_page.js" defer></script>
</head>
<body>
    <header class="header">

        <div class="container">
            
            <div class="header__title">
                <a href="../main.php"><img src="/img/Logo.png" alt="Logo" class="Logo"></a>
                <a href="../price/price_page.php">Услуги</a>
                <a href="../games/games_page.php">Игры</a>
                <a href="./reviews_page.php">Отзывы</a>
                <a href="#contacts">Контакты</a>
                <?php if ($isAuthorized): ?>
                    <a href="/my_applications/my_applications_all.php">Мои заявки</a>
                    <div class="nameUser"><?php echo htmlspecialchars($email); ?></div>
                <?php endif; ?> 


                <?php if (!$isAuthorized): ?> 
                    <div class="headbar-tel">
                        <a href="tel:89999999999">8 (999) 999-99-99</a>                         
                    </div>  
                <?php endif; ?>  

                <div class="header_button">
                    <button class="booking" id="booking_">Забронировать</button>

                    <?php if ($isAuthorized): ?>
                        <form method="POST" action="../php/exit.php">
                            <button class="exit_main">Выйти</button>
                        </form>
                    <?php endif; ?> 

                    <?php if (!$isAuthorized): ?> 
                        <button class="enter_main" onclick="enter_main()">Войти</button>
                    <?php endif; ?> 
                </div>
            </div>

        </div>

    </header>

    <section class="reviews">
        <div class="info">
            <div class="container">
                <div id="scrollTop">
                    <button class="btUp">
                        <img src="/img/Up.png" alt="Upbt" class="Upbtimg">
                    </button>
                </div>
                <div class="txtReviewsPhoto">
                    <h1 class="h1ReviewsPhoto"> Фотографии наших клиентов </h1>
                </div>
                <div class="about_flex_reviews_photo">
                    <div class="about__flex-item-reviews_photo_info">
                        <button class="btLefr" onclick="next()">
                            <img src="/img/Reviews_img/Left_logo.png" alt="left_img" class="left_img" > 
                        </button>

                        <div class="slider">
                            <div class="photo_people" data-active>
                                <img src="/img/Reviews_img/People/Person_1.jpg" alt="People" class="People">
                                <img src="/img/Reviews_img/People/Person_2.jpg" alt="People" class="People">
                            </div>
                            <div class="photo_people">
                                <img src="/img/Reviews_img/People/Person_3.jpg" alt="People" class="People">
                                <img src="/img/Reviews_img/People/Person_4.jpg" alt="People" class="People">
                            </div>
                            <div class="photo_people">
                                <img src="/img/Reviews_img/People/Person_5.jpg" alt="People" class="People">
                                <img src="/img/Reviews_img/People/Person_6.jpg" alt="People" class="People">
                            </div>
                            <div class="photo_people">
                                <img src="/img/Reviews_img/People/Person_7.jpg" alt="People" class="People">
                                <img src="/img/Reviews_img/People/Person_8.jpg" alt="People" class="People">
                            </div>
                            <div class="photo_people">
                                <img src="/img/Reviews_img/People/Person_9.jpg" alt="People" class="People">
                                <img src="/img/Reviews_img/People/The joystick.jpg" alt="People" class="People">
                            </div>

                        </div>

                        <button class="btRight" onclick="prev()">
                            <img src="/img/Reviews_img/Right_logo.png" alt="right_img" class="right_img" >  
                        </button>
                    </div>
                </div> 

                <div class="txtReviews">
                    <h1 class="h1Reviews"> Что говорят гости о нас ? </h1>
                </div>
                <div class="about_grid_reviews_peole">
                    <div class="about__grid-item-reviews_peole_info">
                        <div class="reviews_peole">
                            <div class="peole_log">
                                <img src="/img/Reviews_img/girl.png" alt="peole_img" class="peole_img" > 
                            </div>

                            <div class="reviews_peole_txt_info">
                                <div class="reviews_peole_info">
                                    <p >
                                        Очень крутое место. Где будет весело и интересно взрослым и
                                        детям. Приходили компанией 4 человека. Испробовали много игр.
                                        Мужу и детям очень понравилось. Рекомендую. И да все круто
                                        объясняют, рассказывают.
                                    </p>
                                </div>
                                <div class="reviews_peole_name">
                                    Мария
                                </div>
                            </div>
                        </div>
                        <div class="reviews_peole">
                            <div class="peole_log">
                                <img src="/img/Reviews_img/girl.png" alt="peole_img" class="peole_img" > 
                            </div>

                            <div class="reviews_peole_txt_info">
                                <div class="reviews_peole_info">
                                    <p >
                                        Отличное времяпрепровождение! Для первого раза всё прошло
                                        очень здорово - дружелюбная атмосфера, вежливый и внимательный
                                        администратор! Приятные цены и море эмоций от игр) Обязательно
                                        вернёмся, спасибо!
                                    </p>
                                </div>
                                <div class="reviews_peole_name">
                                    Камила
                                </div>
                            </div>
                        </div>
                        <div class="reviews_peole">
                            <div class="peole_log">
                                <img src="/img/Reviews_img/man.png" alt="peole_img" class="peole_img" > 
                            </div>

                            <div class="reviews_peole_txt_info">
                                <div class="reviews_peole_info">
                                    <p >
                                        Хорошее место. Хорошие люди. Особенно хочется отметить высокий
                                        уровень сервиса и профессионализм администратора. Люди к
                                        которым хочется вернуться. 100% положительные эмоции. Хочется
                                        пожелать развития и процветания компании.
                                    </p>
                                </div>
                                <div class="reviews_peole_name">
                                    Роман
                                </div>
                            </div>
                        </div>
                        <div class="reviews_peole">
                            <div class="peole_log">
                                <img src="/img/Reviews_img/man.png" alt="peole_img" class="peole_img" > 
                            </div>

                            <div class="reviews_peole_txt_info">
                                <div class="reviews_peole_info">
                                    <p >
                                        Лучший игровой клуб в Калуге. Ходил играть со своей девушкой. Все
                                        понравилось. Большое количество прикольных игр. Был удивлен, что
                                        можно было играть вдвоем по сети.
                                    </p>
                                </div>
                                <div class="reviews_peole_name">
                                    Евгений
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="txtResource_offer">
                    <h1 class="h1Resource_offer"> Оставить отзыв на ресурсах </h1>
                </div>

                <div class="about_flex_resource">
                    <div class="about__flex-item-resource_info">
                        <div class="resource">
                            <div class="resource_log">
                                <a onclick = "yandex_rev()"><img src="/img/Reviews_img/Yandex_Logo.png" alt="Resource_img" class="Yandex_img" > </a>
                            </div>

                            <div class="resource_name">
                                Яндекс отзывы
                            </div>
                        </div>
                        <div class="resource">
                            <div class="resource_log">
                                <a onclick = "google_rev()"><img src="/img/Reviews_img/Google_Logo.png" alt="Resource_img" class="Google_img" > </a>
                            </div>

                            <div class="resource_name">
                                Google отзывы
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div id="modal_reg" class="modal_r">
        <div class="modal-content">
            <div class="modal_content_flex">
                <p class="modReg">Вы не зарегистрированы. Хотите зарегистрироваться?</p>
                <p class="modReg_txt">
                    Зарегистрировавшись, вы имеете возможность создать онлайн заявки и отлеживать их.<br>
                    Если вы не хотите регистрироваться и забронировать посещение клуба, 
                    то свяжитесь с нам по номеру 8 (999) 999-99-99.
                </p>
                <div class="mod_bt">
                    <button id="registerYes">Да</button>
                    <button id="registerNo">Нет</button>
                </div>
                
            </div>
            
        </div>
    </div>

    <form class="modal" method="post" action="../php/create_aplic_user.php"  hidden>
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

    <script>
        var isAuthorized = <?php echo json_encode($isAuthorized); ?>;
    </script>

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