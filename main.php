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
    <link rel="stylesheet" href="css/style.css">
    <title>VR CLUB</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon-16x16.png">
    <link rel="manifest" href="/img/icon/site.webmanifest">
    <link rel="mask-icon" href="img/icon/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
    <script src="js/jquery.maskedinput.min.js" defer></script>
    <script src="js/main.js" defer></script>
</head>
<body>
    <header class="header" >

        <div class="container">
            
            <div class="header__title" method="post">
                <a href="./main.php"><img src="img/Logo.png" alt="Logo" class="Logo"></a>
                <a href="/price/price_page.php">Услуги</a>
                <a href="/games/games_page.php">Игры</a>
                <a href="/reviews/reviews_page.php">Отзывы</a>
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
                    <button class="booking">Забронировать</button>

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
            <h1 class="h1Main">Твоя <br>новая <br>реальность</h1>

        </div>

    </header>


    <section class="advantages">
        <div class="info">
            <div class="con_h1">
                <h1 class="h1Advantages">Преимущества</h1>  
            </div>
            <div class="container"> 
                <div class="txtWhy">
                    <h1 class="h1why">Почему <br> мы?</h1>  
                </div>
                          
                <div class="about__grid">
                    <div class="about__grid-item-emptiness">
                    </div>
                    <div class="about__grid-item-con">
                        <div class="indent_con">
                            <img src="img/Advantages_logo_img/helmet_vr_logo.png" alt="helmet_vr_logo" class="advantages_logo">
                            <h4 class="AdvText_h1">Беспроводные OCULUS <br>QUEST 3</h4>
                            <p class="AdvTextDescription_txt">В клубе представлено 6 зон виртуальной <br> 
                                реальности, каждая из которых разработана <br> 
                                для того, чтобы вы чувствовали себя <br> 
                                комфортно во время игры.
                            </p>
                        </div>
                    </div>                    
                    <div class="about__grid-item-con">
                        <div class="indent_con">
                            <img src="img/Advantages_logo_img/buttons_games_logo.png" alt="buttons_games_logo" class="advantages_logo">
                            <h4 class="AdvText_h1">Большой выбор игр</h4>
                            <p class="AdvTextDescription_txt">
                                У нас имеется огромный выбор игр 
                                виртуальной реальности.
                                Мы знаем, как удивить детей, новичков и
                                опытных игроков.
                            </p>
                        </div>

                    </div>
                    <div class="about__grid-item-con">
                        <div class="indent_con">
                            <img src="img/Advantages_logo_img/mood_logo.png" alt="mood_logo" class="advantages_logo">
                            <h4 class="AdvText_h1">Хорошее настроение и море <br>эмоций!</h4>
                            <p class="AdvTextDescription_txt">
                                Вы никогда не испытывали ничего подобного!  
                                Каждая игра представляет собой новый мир,  
                                который бросает вам вызов! 
                                Вы можете совмещать развлечение с 
                                обучением, проводя время весело и узнавая 
                                что-то новое.
                            </p>
                        </div>

                    </div>
                    <div class="about__grid-item-con">
                        <div class="indent_con">
                            <img src="img/Advantages_logo_img/full_immersion_logo.png" alt="full_immersion_logo" class="advantages_logo">
                            <h4 class="AdvText_h1">Полное погружение</h4>
                            <p class="AdvTextDescription_txt">
                                Мы оборудованы самыми современными
                                технологиями. 
                                С использованием шлемов и контроллеров
                                вы окунетесь в увлекательное приключение в
                                виртуальных мирах!
                            </p>
                        </div>
                    </div>
                    <div class="about__grid-item-con">
                        <div class="indent_con">
                            <img src="img/Advantages_logo_img/comfort_logo.png" alt="comfort_logo" class="advantages_logo">
                            <h4 class="AdvText_h1">Уютный клуб</h4>
                            <p class="AdvTextDescription_txt">
                                После или перед игрой, вы сможете 
                                расслабиться на диване, наблюдать за игрой 
                                других участников, провести время в сети Wi- 
                                Fi или насладиться чашечкой кофе.
                            </p>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="event">
        <div class="info">
            <div class="container"> 
                <div class="txtEvent">
                    <h1 class="h1Event">Проведи мероприятие в vr club</h1>
                </div>
                <div class="about_event">
                    <div class="con_event_info">
                        <h2 class="h3Event">
                            Проведите захватывающее и запоминающееся<br>
                            день рождения или корпоратив с нами.Скидка<br>
                            именинникам 20% на весь чек !
                        </h2>
                        <div class="enumeration">
                            <li>для детей от 7 лет</li>
                            <li>можно со своей едой и напитками</li>
                            <li>скидки и подарки именинникам</li>
                        </div>
                        <div class="more_detailed_event">
                            <button class="more_detailed_event_bt" onclick="event_bt()">Подробнее</button>
                        </div>
                        
                    </div>
                    <div class="img_event">
                        <img src="img/Event_img/Happy_boy.png" alt="Happy_boy" class="Happy_boy">
                    </div>   
                </div>
                
                <div id="scrollTop">
                    <button class="btUp">
                        <img src="/img/Up.png" alt="Upbt" class="Upbtimg">
                    </button>
                </div>

            </div>
        </div>   
    </section>

    <section class="offer_games">
        <div class="info">
            <div class="container"> 
                <div class="txtProposal">
                    <h1 class="h1Proposal">Во что можно поиграть?</h1>
                </div>

                <div class="about_proposal_games">
                    <div class="about_flex_game">


                        <div class="about__flex-item-games">
                                <img src="img/Games_img/Games_ArizonaSunshine.png" alt="games_img" class="games_img">
                                <div class="about__flex-item-games-info">
                                    <h5 class="GenreGames">Шутеры / Совместные</h5>
                                    <h5 class="NumberPlayers">1 - 4 игрока</h5>
                                    <h4 class="NameGames">Arizona Sunshine</h4>
                                    <p class="DescriptionGames">Вам предстоит бороться за свою жизнь в жаркой 
                                        пустыне Аризоны после наступившего зомби- 
                                        апокалипсиса. А также Вы сможете объединить силы с 
                                        другом и сражаться вместе против орд зомби, но 
                                        будьте осторожны, потому что больше теплых мозгов 
                                        приманят больше голодной нежити!
                                    </p>
                                </div>
                                <div class="games_video">
                                    <button  class="games_video_bt" id="video_bt_Arizona">Посмотреть видео</button>
                                </div>
                        </div>
                        <div class="about__flex-item-games">
                                <img src="img/Games_img/Games_JobSimulator.png" alt="games_img" class="games_img">
                                <div class="about__flex-item-games-info">
                                    <h5 class="GenreGames">Симуляторы</h5>
                                    <h5 class="NumberPlayers">1 игрок</h5>
                                    <h4 class="NameGames">Job Simulator</h4>
                                    <p class="DescriptionGames">Job Simulator - это что ни есть, как полноценный  
                                        симулятор работы, но не в самом обычном сеттинге. 
                                        Мир Job Simulator - это будущее, в котором все 
                                        контролируют роботы. Все рабочие места заняты ими,
                                        все то, что когда-то делали люди - исполняется
                                        причудливыми механическими созданиями.
                                    </p>
                                </div>
                                <div class="games_video">
                                    <button class="games_video_bt" id="video_bt_Job">Посмотреть видео</button>
                                </div>
                        </div> 
                        <div class="about__flex-item-games">
                                <img src="img/Games_img/Games_PavlovVR.png" alt="games_img" class="games_img">
                                <div class="about__flex-item-games-info">
                                    <h5 class="GenreGames">Шутеры / Совместные</h5>
                                    <h5 class="NumberPlayers">1 - 8 игроков</h5>
                                    <h4 class="NameGames">Pavlov VR</h4>
                                    <p class="DescriptionGames">Pavlov VR – это командный VR-шутер для команды до 10 
                                        человек, похожий на компьютерную игру Counter-Strike: 
                                        Global Offensive в виртуальной реальности. Вы 
                                        сразитесь друг против друга, выступив за террористов 
                                        или спецназ в режимах Team Deathmatch, Закладка 
                                        бомбы, Смена оружия и других.
                                    </p>
                                </div>
                                <div class="games_video">
                                    <button class="games_video_bt" id="video_bt_Pavlov">Посмотреть видео</button>
                                </div>
                        </div> 

                    </div>
                </div>

                <div class="go_over">
                    <button class="catalog_games_bt">Перейти в каталог игр</button>
                </div>

            </div>
        </div>
    </section>

    <section class="sequence">
        <div class="info">
            <div class="container">
                <a name="book_hr"></a>
                <div class="txtProcess">
                    <h1 class="h1Process">Как всё происходит?</h1>
                </div> 

                <div class="about_sequence_info">
                    <div class="about_flex_sequence_info">
                        <div class="about__flex-item-sequence_info">
                            <div class="con_sequence_img">
                                <img src="img/Sequence_img/ringer_volume.png" alt="sequence_img" class="sequence_img" > 
                            </div>
                            <div class="con_txt">
                                <div class="txt_sequence_info">
                                    Зарезервируйте игровое время
                                    и количество игровых мест
                                    заранее
                                </div> 
                            </div>
                        </div>
                        <div class="right_arrow_img">
                            <img src="img/Sequence_img/right_arrow.png" alt="right_arrow_img">
                        </div>
                    </div> 
                    <div class="about_flex_sequence_info">
                        <div class="about__flex-item-sequence_info">
                            <div class="con_sequence_img">
                                <img src="img/Sequence_img/people_working_together.png" alt="sequence_img" class="sequence_img" > 
                            </div>
                            <div class="con_txt">
                                <div class="txt_sequence_info">
                                    Администратор проводит обучение, 
                                    надевает на вас виртуальный шлем 
                                    и передает вам контроллеры
                                </div> 
                            </div>
                        </div>
                        <div class="right_arrow_img">
                            <img src="img/Sequence_img/right_arrow.png" alt="right_arrow_img">
                        </div>
                    </div> 
                    <div class="about_flex_sequence_info">
                        <div class="about__flex-item-sequence_info">
                            <div class="con_sequence_img">
                                <img src="img/Sequence_img/workflow.png" alt="sequence_img" class="sequence_img" > 
                            </div>
                            <div class="con_txt">
                                <div class="txt_sequence_info">
                                    Для быстрой адаптации к 
                                    виртуальному миру игровой 
                                    процесс начинается с легких игр
                                </div> 
                            </div>
                        </div>
                        <div class="right_arrow_img">
                            <img src="img/Sequence_img/right_arrow.png" alt="right_arrow_img">
                        </div>
                    </div> 
                    <div class="about_flex_sequence_info">
                        <div class="about__flex-item-sequence_info">
                            <div class="con_sequence_img">
                                <img src="img/Sequence_img/oculus_rift.png" alt="sequence_img" class="sequence_img" > 
                            </div>
                            <div class="con_txt">
                                <div class="txt_sequence_info">
                                    Время игры варьируется от 60 минут. 
                                    В этом времени вы можете выбрать 
                                    как одиночные, так и командные игры.
                                </div> 
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="about_create_application_bt">
                    <button class="create_application_bt" id="createApplicationBt">Забронировать</button>
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
        // Передача информации о статусе пользователя из PHP в JS
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
                                        <a href="/basement/rules.html">Правила посещения VR клуба</a>
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
                                            <img src="img/Basement_img/Contacts_img/Location_log.png" alt="basement_img" class="basement_img" > 
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
                                            <img src="img/Basement_img/Contacts_img/iPhone_14_log.png" alt="basement_img" class="basement_img" > 
                                        </div> 
                                        <div class="txt_info">
                                            <a href="tel:89999999999">8 (999) 999-99-99</a>
                                        </div> 
                                    </div>
                                    <div class="flex_img">
                                        <div class="con_basement_img">
                                            <img src="img/Basement_img/Contacts_img/Phone_log.png" alt="basement_img" class="basement_img" > 
                                        </div> 
                                        <div class="txt_info">
                                            <a href="tel:89999999999">8 (999) 999-99-99</a>
                                        </div> 
                                    </div>
                                    <div class="flex_img">
                                        <div class="con_basement_img">
                                            <img src="img/Basement_img/Contacts_img/Mail_log.png" alt="basement_img" class="basement_img" > 
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
                                    <a href="/basement/approval.html">Согласие на обработку персональных данных</a>
                                </div>
                                <div class="txt_basement_info">
                                    <a href="/basement/politics.html">Политика в отношении обработки персональных данных</a>
                                </div>                                   
                            </div> 
                            <div class="con_basement_img">
                                <a class="tg_soch">
                                    <img src="img/Basement_img/Social_Network_img/Telegram_log.png" alt="social_network_img" class="social_network_img" > 
                                </a>
                                <a class="vk_soch">
                                    <img src="img/Basement_img/Social_Network_img/VK_log.png" alt="social_network_img" class="social_network_img" > 
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