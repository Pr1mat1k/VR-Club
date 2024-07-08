-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июн 13 2024 г., 00:33
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vr_club`
--

-- --------------------------------------------------------

--
-- Структура таблицы `applications`
--

CREATE TABLE `applications` (
  `id_applications` int NOT NULL,
  `user_id` int NOT NULL,
  `fio` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `visiting_id` int NOT NULL,
  `quantity` int NOT NULL,
  `data` varchar(20) NOT NULL,
  `time` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `applications`
--

INSERT INTO `applications` (`id_applications`, `user_id`, `fio`, `telephone`, `visiting_id`, `quantity`, `data`, `time`, `status_id`) VALUES
(1, 33, 'Сергей Сергеевич', '+7 (123) 123-12-31', 2, 2, '11.06.2024', '11:00-13:00', 2),
(2, 33, 'Иван Иванов', '+7 (234) 234-23-42', 1, 4, '11.06.2024', '12:00-13:00', 1),
(5, 33, 'Руслан Русланович', '+7 (342) 314-23-42', 3, 12, '12.06.2024', '14:00-16:00', 3),
(6, 32, 'Иван Иванов', '+7 (554) 756-75-67', 3, 6, '20.06.2024', '11:00-13:00', 3),
(7, 35, 'Иванов Ярослав', '+7 (124) 325-53-45', 3, 20, '14.06.2024', '15:00-18:00', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--

CREATE TABLE `games` (
  `photo_games` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `genre` int NOT NULL,
  `players` int NOT NULL,
  `name_games` varchar(50) NOT NULL,
  `description_games` text NOT NULL,
  `detailed` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `games`
--

INSERT INTO `games` (`photo_games`, `genre`, `players`, `name_games`, `description_games`, `detailed`) VALUES
('/img/Games_page_img/Arizona_Sunshine.jpg', 1, 3, 'Arizona Sunshine', 'Вам предстоит бороться за свою жизнь в жаркой пустыне Аризоны после наступившего зомби-апокалипсиса. А также...', 'https://www.arizona-sunshine.com/'),
('/img/Games_page_img/Lethal_Company.png', 2, 3, 'Lethal Company', 'Lethal Company - захватывающая кооперативный хоррор, который погружает в жуткие глубины заброшенных...', 'https://store.steampowered.com/app/1966720/Lethal_Company/'),
('/img/Games_page_img/Into_the_Radius.png', 1, 1, 'Into the Radius', 'Into the Radius VR – шутер от первого лица, в котором вы выживаете, надев очки виртуальной реальност...', 'https://store.steampowered.com/app/1012790/Into_the_Radius_VR/'),
('/img/Games_page_img/RUSH.png', 5, 1, 'Rush', 'RUSH способна погрузить геймера с головой в чистейший адреналин. А также\r\nпротестирует и даже прокача...', 'https://store.steampowered.com/app/844040/RUSH/'),
('/img/Games_page_img/theBlu.png', 4, 1, 'theBlu', 'theBlu - приключенческий интерактивный VR фильм про настоящее чудо и величие океана. Спуститесь в гл...', 'https://store.steampowered.com/app/2217730/theBlu/'),
('/img/Games_page_img/Superfly.png', 3, 1, 'Superfly', 'Superfly - игра с открытым миром, в которой вы сможете примерить на себя роль любимых супергероев...', 'https://store.steampowered.com/app/1413020/Superfly/'),
('/img/Games_page_img/Barbershop_Simulator.png', 3, 1, 'Barbershop Simulator', 'Barbershop VR вы сможете продемонстрировать свои навыки в качестве самого лучшего парикмахера в горо...', 'https://store.steampowered.com/app/2109850/Barbershop_Simulator_VR/'),
('/img/Games_page_img/A_Fishermans_Tale.png', 3, 1, 'A Fisherman\'s Tale', 'Реальность главного героя меняется из-за его действий и выборов. Как только маяк гаснет, а Боб решае...', 'https://vertigo-games.com/games/a-fishermans-tale/'),
('/img/Games_page_img/Labyrinthine.png', 2, 3, 'Labyrinthine', 'Labyrinthine - хоррор от первого лица, в который можно сыграть как в одиночку, так и вместе с друзья...', 'https://store.steampowered.com/app/1302240/Labyrinthine/'),
('/img/Games_page_img/Private_Property.png', 1, 4, 'Private Property', 'Новый VR-шутер о зомби, действие которого разворачивается в Монтане конца XIX века, подарит бесконеч...', 'https://store.steampowered.com/app/1481700/Private_Property/'),
('/img/Games_page_img/Dick_Wilde_2.png', 3, 2, 'Dick Wilde 2', 'Dick Wilde 2 – это юмористический шутер с видом от первого лица, в котором произошла вспышка токсичн...', 'https://store.steampowered.com/app/975430/Dick_Wilde_2/'),
('/img/Games_page_img/Vertigo_2.png', 1, 1, 'Vertigo 2', 'Vertigo 2 — это масштабное приключение, созданное специально для виртуальной реальности. Глубоко под...', 'https://store.steampowered.com/app/843390/Vertigo_2/'),
('/img/Games_page_img/BONELAB.png', 1, 1, 'BONELAB', 'BONELAB — захватывающее приключение в жанре шутера, где VR-технология вносит реалистичность в каждый...', 'https://store.steampowered.com/app/1592190/BONELAB/'),
('/img/Games_page_img/Hell_sweeper.png', 1, 1, 'Hellsweeper', 'Hellsweeper VR – это безумный боевой экшн, в котором игроку предстоит активно шевелиться, в прямом с...', 'https://hellsweepervr.com/'),
('/img/Games_page_img/Sam_Dan_Floaty_Flatmate.png', 6, 2, 'Sam & Dan: Floaty Flatmate', 'Sam & Dan: Floaty Flatmate –\r\nзахватывающая VR-игра, где общение и командная работа становятся кл...', 'https://store.steampowered.com/app/978270/Sam__Dan_Floaty_Flatmates/'),
('/img/Games_page_img/Escape_the_Backrooms.png', 2, 3, 'Escape the Backrooms', 'Escape the Backrooms: Уникальное хоррор-приключение в наших атмосферных VR клубах. Играйте в коопера...', 'https://store.steampowered.com/app/1943950/Escape_the_Backrooms/'),
('/img/Games_page_img/Star_Legacy.png', 3, 3, 'Star Legacy', 'Это VR-стрелялка с элементами Roguelike, в которой вам предстоит бросить вызов нескольким планетам...', 'https://store.steampowered.com/app/2526010/Star_Legacy_VR/'),
('/img/Games_page_img/After_the_Fall.png', 6, 3, 'After the Fall', 'Откройте для себя захватывающий мир After the Fall - многопользовательская VR аркада. Виртуальная ре...', 'https://store.steampowered.com/app/1819150/After_the_Fall_Soundtrack/'),
('/img/Games_page_img/Hospital.png', 6, 4, 'Tales of Escape', '«TalesofEscape» представляет собой серию многопользовательских эскейп-рум игр...', 'https://store.steampowered.com/app/587860/Tales_of_Escape/'),
('/img/Games_page_img/Walkabout_Mini_Golf.png', 5, 4, 'Walkabout Mini Golf', 'Погрузитесь в увлекательный мир Walkabout Mini Golf - лучшие поля для мини-гольфа что вы когда-либо...', 'https://store.steampowered.com/app/1408230/Walkabout_Mini_Golf_VR/'),
('/img/Games_page_img/Blaston.png', 7, 2, 'Blaston', 'Blaston - виртуальный шутер от первого лица, который предлагает захватывающее развлечение как для де...', 'https://store.steampowered.com/app/1427890/Blaston/'),
('/img/Games_page_img/Propagation_Paradise_Hotel.png', 2, 1, 'Propagation:Paradise Hotel', 'Propagation: Paradise Hotel предлагает захватывающий игровой опыт...', 'https://store.steampowered.com/app/1824960/Propagation_Paradise_Hotel/'),
('/img/Games_page_img/Serious_Sam_3.png', 1, 4, 'Serious Sam 3', 'Serious Sam 3 VR: BFE - это не просто шутер, это виртуальное развлечение высшего класса для всех люб...', 'https://store.steampowered.com/app/567670/Serious_Sam_3_VR_BFE/'),
('/img/Games_page_img/Wands.png', 4, 2, 'Wands', 'Wands VR - это магическая игра в реальности виртуальной реальности, которая перенесет вас в захватыв...', 'https://store.steampowered.com/app/741400/Wands/'),
('/img/Games_page_img/Hyper_Dash.png', 1, 4, 'Hyper Dash', 'Hyper Dash - это командный шутер в виртуальной реальности, где вы сможете ощутить себя настоящим гер...', 'https://store.steampowered.com/app/1386890/Hyper_Dash/'),
('/img/Games_page_img/Minecraft_VR.png', 3, 4, 'Minecraft', 'Окажись внутри мира Minecraft благодаря технологии виртуальной реальности...', 'https://www.minecraft.net/ru-ru/vr'),
('/img/Games_page_img/Hellsplit_Arena.png', 8, 1, 'Hellsplit: Arena', 'Hellsplit: Arena – мрачная и невероятно атмосферная ролевая приключенческая хоррор-игра, исполь...', 'https://store.steampowered.com/app/1039880/Hellsplit_Arena/'),
('/img/Games_page_img/Summer_Funland.png', 3, 1, 'Summer Funland', 'Summer Funland VR – это полноценный парк аттракционов в VR...', 'https://store.steampowered.com/app/780280/Summer_Funland/'),
('/img/Games_page_img/Rick_and_Morty_Virtual_Rick-ality.png', 3, 1, 'Rick and Morty: Virtual Rick-ality', 'Rick and Morty: Virtual Rick-ality —\r\nбезумное приключение с элементами головоломки и добротной...', 'https://store.steampowered.com/app/469610/Rick_and_Morty_Virtual_Rickality/'),
('/img/Games_page_img/Richies_Plank_Experience.png', 7, 1, 'Richie\'s Plank Experience', 'Боязнь высоты — вот что испытает любой, запустив Richie\'s Plank Experience. На такой психологич...', 'https://store.steampowered.com/app/517160/Richies_Plank_Experience/'),
('/img/Games_page_img/Surgeon_Simulator_Experience_Reality.png', 7, 1, 'Surgeon Simulator:Experience Reality', 'Surgeon Simulator: Experience Reality - игрок берет на себя роль доктора, выполняющего различные опе...', 'https://store.steampowered.com/app/518920/Surgeon_Simulator_Experience_Reality/'),
('/img/Games_page_img/Tilt_Brush.png', 3, 1, 'Tilt Brush', 'Tilt Brush - симулятор, позволяющий рисовать в трехмерном пространстве...', 'https://store.steampowered.com/app/327140/Tilt_Brush/'),
('/img/Games_page_img/Tower_Tag.png', 8, 4, 'Tower Tag', 'Tower Tag – гипердинамичная PVP-стрелялка в стиле киберпанк...', 'https://store.steampowered.com/app/1187330/Tower_Tag/'),
('/img/Games_page_img/Garden_of_the_Sea.png', 3, 1, 'Garden of the Sea', 'Garden of the Sea – это симулятор жизни и фермы. Также в проекте есть элементы адвенчуры...', 'https://store.steampowered.com/app/1086850/Garden_of_the_Sea/'),
('/img/Games_page_img/Ragnarock.png', 3, 3, 'Ragnarock', 'Ragnarock - динамичная ритм-игра для шлемов виртуальной реальности. Вы находитесь на плывущем д...', 'https://store.steampowered.com/app/1345820/Ragnarock/'),
('/img/Games_page_img/The_Walking_Dead_Saints_Sinners.png', 2, 1, 'The Walking Dead:Saints & Sinners', 'Действия The Walking Dead: Saints & Sinners VR разворачиваются в постапокалиптическом...', 'https://store.steampowered.com/app/916840/The_Walking_Dead_Saints__Sinners/'),
('/img/Games_page_img/All-In-One_Sports.png', 3, 2, 'All-In-One Sports', 'All in One Sports VR предлагает самый безопасный способ сохранить здоровье как физически, так...', 'https://store.steampowered.com/app/1514840/AllInOne_Sports_VR___C_VR/'),
('/img/Games_page_img/Gunsn_Stories_Bulletproof.png', 8, 2, 'Guns\'n\'Stories:Bulletproof', 'Guns\'n\'Stories: Bulletproof VR – необычных видеоигровой опыт в жанре шутера в сеттинге Дикого З...', 'https://store.steampowered.com/app/685690/GunsnStories_Bulletproof_VR/'),
('/img/Games_page_img/Adventure_Climb.png', 7, 1, 'Adventure Climb', 'Adventure Climb - симулятор скалолаза, который предлагает покорить самые разные вершины гор. Игра ада...', 'https://store.steampowered.com/app/1040430/Adventure_Climb_VR/'),
('/img/Games_page_img/Vacation_Simulator.png', 3, 1, 'Vacation Simulator', 'Vacation Simulator - яркий симулятор, в котором вы играете за биоорганическое существо.Отправл...', 'https://store.steampowered.com/app/726830/Vacation_Simulator/'),
('/img/Games_page_img/Island_Time.png', 3, 1, 'Island Time', 'Island Time VR переносит пользователей на тропический остров, где после кораблекрушения оказыва...', 'https://store.steampowered.com/app/774441/Island_Time_VR/'),
('/img/Games_page_img/Angry_birds_Isle_of_Pigs.png', 3, 1, 'Angry birds: Isle of Pigs', 'Angry birds: Isle of Pigs - аркада использует технологию VR, где знаменитые персонажи выходят на нов...', 'https://store.steampowered.com/app/1001140/Angry_Birds_VR_Isle_of_Pigs/'),
('/img/Games_page_img/Shooty_Fruity.png', 1, 1, 'Shooty Fruity', 'Динамичный Shooty Fruity позволяет игрокам погрузиться в безумную атмосферу с перестрелкам...', 'https://store.steampowered.com/app/666100/Shooty_Fruity/'),
('/img/Games_page_img/Witching_Tower.png', 8, 1, 'Witching Tower', 'Witching Tower – игра в жанре VR Action Adventure, которая расскажет вам о темном мире фантазий. При..', 'https://store.steampowered.com/app/800200/Witching_Tower_VR/'),
('/img/Games_page_img/Home_A_Spacewalk.png', 7, 1, 'Home - A VR Spacewalk', 'VR-приключение, в котором игроки отправятся на орбиту Земли, чтобы свысока понаблюдать за родной пла...', 'https://store.steampowered.com/app/512270/Home__A_VR_Spacewalk/'),
('/img/Games_page_img/Fruit_Ninja_VR_2.png', 8, 1, 'Fruit Ninja VR 2', 'Fruit Ninja VR 2 поднимает классический аркадный опыт виртуальной реальности на невероятные новые вы...', 'https://store.steampowered.com/app/1575520/Fruit_Ninja_VR_2/'),
('/img/Games_page_img/Bonework.png', 1, 1, 'Boneworks', 'Boneworks — топовый VR шутер...', 'https://store.steampowered.com/app/823500/BONEWORKS/'),
('/img/Games_page_img/Protonwar.png', 1, 4, 'Protonwar', 'Предлагаем тебе окунуться в захватывающий VRшутер от первого лица. Но только если ты не из самых впе...', 'https://store.steampowered.com/app/461410/Protonwar/'),
('/img/Games_page_img/Curious_Cases.png', 7, 4, 'Curious Cases', 'Curious Cases - Это детективная головоломка, где Вы играете за легендарного сыщика, который берется...', 'https://store.steampowered.com/app/1045080/Curious_Cases/'),
('/img/Games_page_img/Eye_of_the_Temple.png', 4, 1, 'Eye of the Temple', 'Приключения в Eye of the Temple позволяют пользователям оказаться в древнем храме при помо...', 'https://store.steampowered.com/app/589940/Eye_of_the_Temple/'),
('/img/Games_page_img/Space_Pirate_Trainer.png', 1, 1, 'Space Pirate Trainer', 'Станьте космическим пиратом и начните тренировку в виртуальном пространстве захватывающей игры Space...', 'https://store.steampowered.com/app/418650/Space_Pirate_Trainer/'),
('/img/Games_page_img/GORN.png', 8, 1, 'GORN', 'Gorn - виртуальный симулятор кровавого гладиатора, веселая игра и в тоже время жестокая, в которой в...', 'https://store.steampowered.com/app/578620/GORN/'),
('/img/Games_page_img/Waltz_of_the_Wizards.png', 3, 1, 'Waltz of the Wizards', 'Увлекательный симулятор, в котором вы сможете стать могущественным волшебником. Объедините тайные ин...', 'https://store.steampowered.com/app/1094390/Waltz_of_the_Wizard/'),
('/img/Games_page_img/Creed_Rise_to_Glory.png', 8, 2, 'Creed: Rise to Glory', 'Creed: Rise to Glory — это VR-игра по мотивам фильма «Крид. Наследие Рокки», в котором игр...', 'https://store.steampowered.com/app/804490/Creed_Rise_to_Glory/'),
('/img/Games_page_img/Job_Simulator.png', 3, 1, 'Job Simulator', 'Если вы геймер, а вас заставляют пойти на работу, то сделайте ход конем и устройтесь работать в вирт...', 'https://store.steampowered.com/app/448280/Job_Simulator/'),
('/img/Games_page_img/RAW_DATA.png', 1, 3, 'RAW DATA', 'Созданный с нуля для виртуальной реальности, боевой геймплей Raw Data, интуитивно понятное управлени...', 'https://store.steampowered.com/app/436320/Raw_Data/'),
('/img/Games_page_img/Phasmophobia.png', 2, 3, 'Phasmophobia', 'Phasmophobia VR – это кооперативный психологический хоррор для игры до 4 человек вместе, в котором в...', 'https://store.steampowered.com/app/739630/Phasmophobia/'),
('/img/Games_page_img/Five_nights_at_freddys_help_wanted.png', 2, 1, 'Five nights at freddy\'s: help wanted', 'Это коллекция классических и оригинальных мини-игр, действие которых происходит во вселенной Five Ni...', 'https://store.steampowered.com/app/732690/FIVE_NIGHTS_AT_FREDDYS_HELP_WANTED/'),
('/img/Games_page_img/Propagation.png', 1, 2, 'Propagation', 'Таинственный вирус вызвал апокалипсис. Оказавшись в ловушке заброшенной станции метро, ​​наполн...', 'https://store.steampowered.com/app/1824960/Propagation_Paradise_Hotel/'),
('/img/Games_page_img/Elven_Assassin.png', 8, 4, 'Elven Assassin', 'Сразитесь с ордами орков в эпичном экшен-шутере Elven Assassin...', 'https://store.steampowered.com/app/503770/Elven_Assassin/'),
('/img/Games_page_img/Half-Life_Alyx.png', 2, 1, 'Half-Life: Alyx', 'Это возвращение Valve во вселенную Half-Life в виртуальной реальности. Это история невозможной борьб...', 'https://store.steampowered.com/app/546560/HalfLife_Alyx/'),
('/img/Games_page_img/Pavlov_vr.png', 1, 5, 'Pavlov VR', 'Pavlov VR – это командный VR-шутер для команды до 10 человек, похожий на компьютерную игру Counter-Strike: Global Offensive в виртуальной реальности...', 'https://store.steampowered.com/app/555160/Pavlov/');

-- --------------------------------------------------------

--
-- Структура таблицы `genre_game`
--

CREATE TABLE `genre_game` (
  `id_genre` int NOT NULL,
  `name_genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `genre_game`
--

INSERT INTO `genre_game` (`id_genre`, `name_genre`) VALUES
(1, 'Шутеры'),
(2, 'Хорроры'),
(3, 'Детские'),
(4, 'Приключения'),
(5, 'Спортивные'),
(6, 'Совместные'),
(7, 'Симуляторы'),
(8, 'Экшен');

-- --------------------------------------------------------

--
-- Структура таблицы `players_game`
--

CREATE TABLE `players_game` (
  `id_players` int NOT NULL,
  `name_players` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `players_game`
--

INSERT INTO `players_game` (`id_players`, `name_players`) VALUES
(1, '1 игрок'),
(2, '1 - 2 игрока'),
(3, '1 - 4 игрока'),
(4, '1 - 6 игроков'),
(5, '1 - 8 игроков');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id_role` int NOT NULL,
  `name_role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id_role`, `name_role`) VALUES
(1, 'Администратор'),
(2, 'Пользователь');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id_status` int NOT NULL,
  `name_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id_status`, `name_status`) VALUES
(1, 'Принято'),
(2, 'Отказано'),
(3, 'В обработке');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `email_user` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `email_user`, `password`, `role_user`) VALUES
(32, 'qwer100@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(33, 'admin123@gamil.ya', '202cb962ac59075b964b07152d234b70', 1),
(34, 'qwer123@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(35, 'ivan323@gamail.com', '553e83ca69693b33ef73958c04b7a315', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `visiting`
--

CREATE TABLE `visiting` (
  `id_visiting` int NOT NULL,
  `name_visiting` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `visiting`
--

INSERT INTO `visiting` (`id_visiting`, `name_visiting`) VALUES
(1, 'Обычное посещение'),
(2, 'День рождение'),
(3, 'Мероприятие');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id_applications`),
  ADD KEY `user_id` (`user_id`,`visiting_id`),
  ADD KEY `applications_ibfk_3` (`visiting_id`),
  ADD KEY `applications_ibfk_4` (`status_id`);

--
-- Индексы таблицы `games`
--
ALTER TABLE `games`
  ADD KEY `genre` (`genre`),
  ADD KEY `players` (`players`);

--
-- Индексы таблицы `genre_game`
--
ALTER TABLE `genre_game`
  ADD PRIMARY KEY (`id_genre`);

--
-- Индексы таблицы `players_game`
--
ALTER TABLE `players_game`
  ADD PRIMARY KEY (`id_players`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email_user_2` (`email_user`),
  ADD KEY `role_user` (`role_user`),
  ADD KEY `email_user` (`email_user`);

--
-- Индексы таблицы `visiting`
--
ALTER TABLE `visiting`
  ADD PRIMARY KEY (`id_visiting`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `applications`
--
ALTER TABLE `applications`
  MODIFY `id_applications` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `genre_game`
--
ALTER TABLE `genre_game`
  MODIFY `id_genre` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `players_game`
--
ALTER TABLE `players_game`
  MODIFY `id_players` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `visiting`
--
ALTER TABLE `visiting`
  MODIFY `id_visiting` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `applications_ibfk_3` FOREIGN KEY (`visiting_id`) REFERENCES `visiting` (`id_visiting`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `applications_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `status` (`id_status`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`genre`) REFERENCES `genre_game` (`id_genre`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `games_ibfk_2` FOREIGN KEY (`players`) REFERENCES `players_game` (`id_players`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_user`) REFERENCES `roles` (`id_role`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
