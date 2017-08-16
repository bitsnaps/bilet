-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 03:13 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bilet_tm`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `article_category_id` int(11) NOT NULL,
  `image_name` varchar(65) DEFAULT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `article_category_id`, `image_name`, `post_date`) VALUES
(1, 1, '100x100_pic33.png', '2017-08-12 04:46:31'),
(2, 1, '100x100_pic33.png', '2017-08-12 04:51:41'),
(3, 1, '100x100_pic33.png', '2017-08-12 04:52:07'),
(4, 1, '100x100_pic33.png', '2017-08-12 04:52:16'),
(5, 2, NULL, '2017-08-12 05:13:33'),
(6, 3, '50x50_pic22.png', '2017-08-12 06:54:36'),
(7, 3, '50x50_pic22.png', '2017-08-14 07:30:53'),
(8, 3, '50x50_pic22.png', '2017-08-14 07:32:42'),
(9, 3, '50x50_pic22.png', '2017-08-14 07:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `article_category_translation`
--

CREATE TABLE `article_category_translation` (
  `article_category_id` int(11) NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `article_category_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_category_translation`
--

INSERT INTO `article_category_translation` (`article_category_id`, `language_id`, `article_category_name`) VALUES
(2, 2, 'Maglumat'),
(3, 2, 'Peýdalar'),
(1, 2, 'Täzelikler'),
(2, 1, 'Информация'),
(1, 1, 'Новости'),
(3, 1, 'Примушества');

-- --------------------------------------------------------

--
-- Table structure for table `article_translation`
--

CREATE TABLE `article_translation` (
  `article_id` int(11) NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `html_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_translation`
--

INSERT INTO `article_translation` (`article_id`, `language_id`, `title`, `html_description`) VALUES
(1, 1, 'Прошла вторая по счету выставка «Ярмарка Мастеров»', 'Третьего июня в первые сами мастера собственноручно организовали выставку своих работ, и она прошла на УРА! Учитывая желание публики организовали очередную выставку. Все любители и ценители искусство и те, кто занимается им были приглашены на любительское мероприятия.'),
(2, 1, 'Торжественное празднование 50 дней до начала Игр «Ашхабад 2017»', 'Обратный отсчет оставшихся 50 дней до начала V Азиатских игр в закрытых помещениях и по боевым искусствам широко отпразднован организаторами Игр «Ашхабад 2017» массовыми велопробегами по всей столице, а также проведен медиабрифинг, чтобы проинформировать журналистов о ходе подготовки.'),
(3, 1, 'Запуск продажи билетов на Игры «Ашхабад 2017» по всему Туркменистану', 'В субботу, 29 июля по всему Туркменистану началась продажа билетов на предстоящие V Азиатские игры в закрытых помещениях и по боевым искусствам «Ашхабад 2017».<br /> Более 700 000 билетов поступили в продажу на более чем 220 спортивных сессий. Зрители смогут увидеть выступления лучших спортсменов Азии и Океании по 21 виду спорта в течение 12 дней.'),
(4, 1, 'Современное торговое оборудование для ресторанного бизнеса', '<p>Компания «Туркмен транзит» предлагают широкий выбор оборудования для общепита от различных производителей и по различным ценам: от самых доступных до брендовых.</p>\r\n<ol type="1"><li>Электронное торговое оборудование, POS – системы, сенсорный POS-терминал</li><li>Электронные весы, сканер штрих кода, принтеры этикеток, принтер чеков</li><li>Противокражные рамки</li><li>Расходные материалы</li></ol>'),
(5, 1, 'Куда сходить в Ашхабаде сегодня, завтра на выходных', '<p class="theatreInfoText"><b>Каждую пятницу и субботу, ресторан-клуб «Кервен» подарит вам не забываемые вечера с улетными шоу программами и розыгрышами призов, убойные и зажигательными треками!!!<br />\r\n<i>ул.Арчабиль, отель Чандыбиль<br />\r\nтел. 48 99 90 / 48 99 91</i>\r\n</b></p>\r\n<p class="theatreInfoText">Гасан Мамедов и кафе-бар «Нагина» приглашает всех любителей классической и живой музыки на концерт легендарного Гасана Мамедова! Не упусти возможность насладиться игрой на скрипке в исполнении Гасана Мамедова!<br />\r\n<i>ул. Баба Джепбарова<br />\r\nтел. 22 28 45 / 72 74 73</i>\r\n</p>\r\n<p class="theatreInfoText"><b>Каждый четверг, ЖЕНСКИЙ ДЕНЬ в ASHGABAT Restaurant & Lounge  \r\nМилые дамы, Ashgabat coffee & cafe дарит скидку -30 % на все меню женской компании, а вечером еще и коктейль. Специально для женщин будет живой вокал от Эзиза.<br />\r\n<i>ул.Махтымкули<br />\r\nтел.+993 63 19 80 08<br />\r\nwww.tm-restoran.com</i>\r\n</b></p>\r\n'),
(6, 1, 'Совершать онлайн покупки', '		'),
(7, 1, 'Оставлять свои комментарии', ''),
(8, 1, 'Читать новости', ''),
(9, 1, 'Получать рассылки о предстоящих событиях', '');

-- --------------------------------------------------------

--
-- Table structure for table `auditorium`
--

CREATE TABLE `auditorium` (
  `id` int(10) UNSIGNED NOT NULL,
  `cultural_place_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `seats_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auditorium`
--

INSERT INTO `auditorium` (`id`, `cultural_place_id`, `name`, `seats_no`) VALUES
(1, 1, '1', 50),
(2, 2, '1', 50),
(3, 5, '1', 100);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7);

-- --------------------------------------------------------

--
-- Table structure for table `category_translation`
--

CREATE TABLE `category_translation` (
  `category_id` tinyint(4) NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_translation`
--

INSERT INTO `category_translation` (`category_id`, `language_id`, `category_name`) VALUES
(6, 2, 'ÇAGALAR'),
(1, 2, 'ESASY'),
(2, 2, 'KINOTEATR'),
(5, 2, 'KONSERT'),
(4, 2, 'SERGI'),
(7, 2, 'SPORT'),
(3, 2, 'TEATR'),
(4, 1, 'ВЫСТАВКА'),
(1, 1, 'ГЛАВНЫЙ'),
(6, 1, 'ДЕТИ'),
(2, 1, 'КИНОТЕАТР'),
(5, 1, 'КОНЦЕРТ'),
(7, 1, 'СПОРТ'),
(3, 1, 'ТЕАТР');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('public','author','admin') COLLATE utf8_unicode_ci NOT NULL,
  `date_entered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `firstname`, `surname`, `email`, `user_name`, `pass`, `type`, `date_entered`) VALUES
(1, 'Admin', 'Admin', 'admin@mail.ru', 'admin', 'admin', 'admin', '2017-08-09 05:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `show_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `comment` longtext NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `star_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `show_id`, `name`, `comment`, `comment_date`, `star_count`) VALUES
(1, 1, 'shagy', 'Bu fil oran gyzykly eken, size de gormani maslahat beryarin', '2017-08-08 09:23:05', 5),
(5, 1, 'shagy 2', 'hezil', '2017-08-08 11:18:14', 2),
(6, 1, 'shagy 2', 'хорошый', '2017-08-08 11:19:43', 3),
(7, 1, 'ssssss', 'ssssss', '2017-08-08 11:22:26', 2),
(8, 1, 'shagy 3', 'dadadadad', '2017-08-08 11:39:37', 3),
(9, 1, 'мамама', 'даа очен класно', '2017-08-08 11:50:47', 3),
(10, 1, 'г5', 'даа очен класно', '2017-08-08 11:51:28', 4),
(11, 1, 'g4', 'asasasasas', '2017-08-08 11:53:30', 4),
(12, 3, 'Я', 'новы комент', '2017-08-08 12:58:27', 4),
(13, 3, 'г5', 'asasasa', '2017-08-09 06:38:42', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cultural_place`
--

CREATE TABLE `cultural_place` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `tel1` varchar(45) NOT NULL,
  `tel2` varchar(45) DEFAULT NULL,
  `tel3` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `email` varchar(65) DEFAULT NULL,
  `image_name` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cultural_place`
--

INSERT INTO `cultural_place` (`id`, `category_id`, `tel1`, `tel2`, `tel3`, `fax`, `email`, `image_name`) VALUES
(1, 2, '111111', '111112', '111113', '111114', 'kino1@mail.ru', 'kino1'),
(2, 2, '222221', '222222', '222223', '222224', 'kino2@mail.ru', 'kino2'),
(3, 3, '333331', '333332', '333333', '333334', 'teatr1@mail.ru', 'mollanepesTeatr'),
(4, 3, '333332', '333333', '333334', '333335', 'teatr2@mail.ru', 'mainTeatr'),
(5, 4, '(+993)12 39 89 81', '(+993)12 39 88 38', '(+993)12 39 88 92', '(+993) 12 39 89 79', 'info@cci.gov.tm', 'exhibition1');

-- --------------------------------------------------------

--
-- Table structure for table `cultural_place_translation`
--

CREATE TABLE `cultural_place_translation` (
  `cultural_place_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `place_name` varchar(100) NOT NULL,
  `cultural_place_description` text NOT NULL,
  `place_city` varchar(45) NOT NULL,
  `place_street` varchar(65) NOT NULL,
  `work_hour` varchar(45) DEFAULT NULL,
  `off_day` varchar(45) DEFAULT NULL,
  `bus` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cultural_place_translation`
--

INSERT INTO `cultural_place_translation` (`cultural_place_id`, `language_id`, `place_name`, `cultural_place_description`, `place_city`, `place_street`, `work_hour`, `off_day`, `bus`) VALUES
(1, 1, 'Кинотеатр 1', 'про кинотеатр 1', 'Ашхабад', 'ул. Махтымкули 56', 'с 9:00 до 18:00 Обед с 13:00 до 14:00', 'Суббота и Воскресение', '1, 2, 3, 4'),
(1, 2, 'Kinoteatr 1', 'kinoteatr 1 barada', 'Aşgabat', 'köçe Magtymguly 56', '9''dan 18''e çenli, Arakesme 1''dan 2''a çenli', 'Şenbe we Ýekşenbe', '1, 2, 3, 4'),
(2, 1, 'Кинотеатр 2', 'про кинотеатр 2', 'Ашхабад', 'ул. Кемине 65', 'с 8:00 до 17:00 Обед с 12:00 до 13:00', 'Воскресение', '5, 6, 8, 9'),
(2, 2, 'kinoteatr2', 'Kinoteatr 2 barada', 'Aşgabat', 'köçe Kemine 65', '8''den 17''ä çenli, Arakesme 12''den 1''a çenli', 'Ýekşenbe', '4, 5, 6, 9'),
(3, 1, 'Театр моллонепес', 'про моллонепес', 'Ашхабад', 'ул. молонепес 95', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Суббота и Воскресение', '1, 2, 3, 4'),
(3, 2, 'Mollonepes Teatry', 'mollonepes barada', 'Aşgabat', 'köçe Mollonepes 95', '9''dan 18''e çenli, Arakesme 1den 2''ä çenli', 'Şenbe Ýekşenbe', '1, 2, 3, 4'),
(4, 1, 'Театр Главный', 'про главный', 'Ашхабад', 'ул. Главный 65', 'с 10:00 до 19:00, Обед с 14:00 до 15:00', 'Воскресение', '5, 6, 7, 8'),
(4, 2, 'Esasy Teatr', 'Esasy teatr barada', 'Aşgabat', 'köçe esasy 65', '10''dan 19''a çenli, Arakesme 2den 3''e çenli', 'Ýekşenbe', '5, 6, 7, 8'),
(5, 1, 'Выставочный зал Торгово-промышленной палаты', 'Все информация про выставочный зал', 'Ашхабад', 'пр. Чандыбиль', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Воскресение', '58');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `code` varchar(10) NOT NULL,
  `locale` varchar(225) NOT NULL,
  `image` varchar(65) NOT NULL,
  `directory` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`, `code`, `locale`, `image`, `directory`) VALUES
(1, 'Руский', 'RU', 'ru-RU', '', ''),
(2, 'Türkmençe', 'TM', 'tk-TKM', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `show_id` int(10) UNSIGNED NOT NULL,
  `like_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`id`, `user_id`, `show_id`, `like_status`) VALUES
(1, 1, 3, 1),
(2, 1, 2, 0),
(3, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `ticket_count` int(11) NOT NULL,
  `amount` decimal(6,2) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `confirmation_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) UNSIGNED NOT NULL,
  `reservation_type_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `screening_id` int(10) UNSIGNED NOT NULL,
  `reserved` tinyint(1) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `reserv_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reserv_hour` int(11) NOT NULL,
  `reserv_min` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_type_id`, `user_id`, `screening_id`, `reserved`, `paid`, `active`, `reserv_date`, `reserv_hour`, `reserv_min`) VALUES
(1, 1, 1, 1, 1, 0, 0, '2017-08-16 12:16:18', 17, 16),
(2, 1, 1, 1, 1, 0, 0, '2017-08-16 12:19:27', 17, 19),
(3, 1, 1, 1, 1, 0, 0, '2017-08-16 12:20:33', 17, 20),
(4, 1, 1, 1, 1, 0, 0, '2017-08-16 12:21:11', 17, 21),
(5, 1, 1, 1, 1, 0, 0, '2017-08-16 12:22:03', 17, 22),
(6, 1, 1, 1, 1, 0, 0, '2017-08-16 12:24:14', 17, 24);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_type`
--

CREATE TABLE `reservation_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `reservation_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation_type`
--

INSERT INTO `reservation_type` (`id`, `reservation_type`) VALUES
(1, 'regular');

-- --------------------------------------------------------

--
-- Table structure for table `screening`
--

CREATE TABLE `screening` (
  `id` int(10) UNSIGNED NOT NULL,
  `auditorium_id` int(10) UNSIGNED NOT NULL,
  `show_id` int(10) UNSIGNED NOT NULL,
  `screening_start` date NOT NULL,
  `start_hour` int(11) NOT NULL,
  `start_min` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `screening`
--

INSERT INTO `screening` (`id`, `auditorium_id`, `show_id`, `screening_start`, `start_hour`, `start_min`) VALUES
(1, 1, 1, '2017-08-10', 17, 45),
(2, 2, 2, '2017-08-10', 17, 15);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(10) UNSIGNED NOT NULL,
  `auditorium_id` int(10) UNSIGNED NOT NULL,
  `row` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `auditorium_id`, `row`, `number`) VALUES
(1, 1, 10, 5),
(2, 2, 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `seat_reserved`
--

CREATE TABLE `seat_reserved` (
  `id` int(10) UNSIGNED NOT NULL,
  `seat_id` int(10) UNSIGNED NOT NULL,
  `screening_id` int(10) UNSIGNED NOT NULL,
  `reservation_id` int(10) UNSIGNED NOT NULL,
  `row` int(11) NOT NULL,
  `colum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seat_reserved`
--

INSERT INTO `seat_reserved` (`id`, `seat_id`, `screening_id`, `reservation_id`, `row`, `colum`) VALUES
(1, 1, 1, 4, 1, 3),
(2, 1, 1, 5, 10, 5),
(3, 1, 1, 6, 5, 3),
(4, 1, 1, 6, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `show`
--

CREATE TABLE `show` (
  `id` int(10) UNSIGNED NOT NULL,
  `show_category_id` int(10) UNSIGNED NOT NULL,
  `cultural_place_id` int(10) UNSIGNED NOT NULL,
  `begin_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `start_hour` int(11) NOT NULL,
  `start_min` int(11) NOT NULL,
  `end_hour` int(11) NOT NULL,
  `end_min` int(11) NOT NULL,
  `image_name` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `show`
--

INSERT INTO `show` (`id`, `show_category_id`, `cultural_place_id`, `begin_date`, `end_date`, `start_hour`, `start_min`, `end_hour`, `end_min`, `image_name`) VALUES
(1, 1, 1, '2017-08-16 00:00:00', '2017-08-16 00:00:00', 19, 45, 19, 50, '200x150_pic22.png'),
(2, 1, 2, '2017-08-16 00:00:00', '2017-08-16 00:00:00', 17, 15, 19, 30, '200x150_pic22.png'),
(3, 1, 1, '2017-08-11 00:00:00', '2017-08-11 00:00:00', 17, 30, 18, 45, '200x150_pic22.png'),
(4, 1, 2, '2017-08-11 00:00:00', '2017-08-11 00:00:00', 15, 45, 17, 50, '200x150_pic22.png'),
(5, 3, 5, '2017-09-07 00:00:00', '2017-09-09 00:00:00', 9, 0, 16, 0, '200x150_pic22.png'),
(6, 3, 5, '2017-10-03 00:00:00', '2017-10-05 00:00:00', 9, 0, 16, 0, '200x150_pic22.png'),
(7, 3, 5, '2017-10-11 00:00:00', '2017-10-12 00:00:00', 9, 0, 16, 0, '200x150_pic22.png'),
(8, 3, 5, '2017-11-01 00:00:00', '2017-11-02 00:00:00', 9, 0, 16, 0, '200x150_pic22.png'),
(9, 3, 5, '2017-11-09 00:00:00', '2017-11-11 00:00:00', 9, 0, 16, 0, '200x150_pic22.png'),
(10, 3, 5, '2017-11-25 00:00:00', '2017-11-26 00:00:00', 9, 0, 16, 0, '200x150_pic22.png'),
(11, 3, 5, '2017-12-01 00:00:00', '2017-12-05 00:00:00', 9, 0, 16, 0, '200x150_pic22.png');

-- --------------------------------------------------------

--
-- Table structure for table `show_category`
--

CREATE TABLE `show_category` (
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `show_category`
--

INSERT INTO `show_category` (`id`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `show_category_translation`
--

CREATE TABLE `show_category_translation` (
  `show_category_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `show_category_translation`
--

INSERT INTO `show_category_translation` (`show_category_id`, `language_id`, `category_name`) VALUES
(1, 2, 'Kino'),
(3, 2, 'Sergi'),
(2, 2, 'Teatr'),
(3, 1, 'Выставка'),
(1, 1, 'Кино'),
(2, 1, 'Театр');

-- --------------------------------------------------------

--
-- Table structure for table `show_translation`
--

CREATE TABLE `show_translation` (
  `show_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `show_name` varchar(65) NOT NULL,
  `show_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `show_translation`
--

INSERT INTO `show_translation` (`show_id`, `language_id`, `show_name`, `show_description`) VALUES
(1, 1, 'Человек Паук 3', 'филм про парня которы спасает мир от злодеев'),
(1, 2, 'Möý adam 3', 'dünyani erbetliklerden goraýan bir oglan barada'),
(2, 1, 'Фарсаж 5', 'про гонки'),
(2, 2, 'Farsaj 5', 'maşyn ýaryş barada'),
(3, 1, 'Гари потер', 'фильм про магии '),
(3, 2, 'Gari Poter', 'jadygöýler barada kino'),
(4, 1, 'Гадкий Я', 'про минионов'),
(4, 2, 'Men Biderek', 'minionlar barada kino'),
(5, 1, 'Развития энергетической промышленности', 'Международная выставка и научная конференция «Основные направления развития энергетической промышленности Туркменистана»'),
(6, 1, 'Научная конференция', 'XI Международная выставка и научная конференция телекоммуникации, телеметрии и информационных технологий «Туркментел – 2017»'),
(7, 1, 'Выставка экономических достижений Туркменистана', 'Выставка экономических достижений Туркменистана, посвященная 26-ти летию Независимости Туркменистана'),
(8, 1, 'Туристическая выставка ', 'Международная туристическая выставка и конференция «Туризм и путешествия»'),
(9, 1, 'Научная конференция', 'Международная выставка и научная конференция «Образование и спорт в эпоху могущества и счастья»'),
(10, 1, 'Выставка-ярмарка хлопковой продукции', 'VII международная выставка-ярмарка хлопковой продукции Туркменистана и международная конференция «Хлопковая продукция Туркменистана и мировой рынок»'),
(11, 1, 'Выставка производственных технологий', 'Международная выставка производственных технологий импортозамещения');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(10) UNSIGNED NOT NULL,
  `show_id` int(10) UNSIGNED NOT NULL,
  `total_ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `show_id`, `total_ticket`) VALUES
(1, 1, 50),
(2, 2, 40),
(3, 3, 45),
(4, 4, 30);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_data_option_translation`
--

CREATE TABLE `ticket_data_option_translation` (
  `ticket_option_data_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `option_value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket_data_option_translation`
--

INSERT INTO `ticket_data_option_translation` (`ticket_option_data_id`, `language_id`, `option_value`) VALUES
(1, 1, '30 Рубль'),
(1, 2, '30 Manat'),
(2, 1, '50 Рубль'),
(2, 2, '50 Manat'),
(3, 1, '30 Рубль'),
(3, 2, '30 Manat'),
(4, 1, '30 Рубль'),
(4, 2, '30 Manat'),
(5, 1, '30 Рубль'),
(5, 2, '30 Manat');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_has_order`
--

CREATE TABLE `ticket_has_order` (
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `seat_reserved_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_option`
--

CREATE TABLE `ticket_option` (
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket_option`
--

INSERT INTO `ticket_option` (`id`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_option_data`
--

CREATE TABLE `ticket_option_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `ticket_option_id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket_option_data`
--

INSERT INTO `ticket_option_data` (`id`, `ticket_option_id`, `ticket_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 1, 2),
(4, 1, 3),
(5, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_option_translation`
--

CREATE TABLE `ticket_option_translation` (
  `ticket_option_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `option_name` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket_option_translation`
--

INSERT INTO `ticket_option_translation` (`ticket_option_id`, `language_id`, `option_name`) VALUES
(1, 1, 'Обычный'),
(1, 2, 'Ýönekeý'),
(2, 1, 'Вип'),
(2, 2, 'Wip');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `id` int(10) UNSIGNED NOT NULL,
  `show_id` int(10) UNSIGNED NOT NULL,
  `number_visit` int(11) NOT NULL,
  `date_visit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_article_article_category1_idx` (`article_category_id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `article_category_translation`
--
ALTER TABLE `article_category_translation`
  ADD PRIMARY KEY (`article_category_id`,`language_id`),
  ADD UNIQUE KEY `article_category_name_UNIQUE` (`article_category_name`),
  ADD KEY `fk_article_category_translation_language1_idx` (`language_id`);

--
-- Indexes for table `article_translation`
--
ALTER TABLE `article_translation`
  ADD PRIMARY KEY (`article_id`,`language_id`),
  ADD KEY `fk_article_translation_language1_idx` (`language_id`);

--
-- Indexes for table `auditorium`
--
ALTER TABLE `auditorium`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_auditorium_cultural_place1_idx` (`cultural_place_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translation`
--
ALTER TABLE `category_translation`
  ADD PRIMARY KEY (`category_id`,`language_id`),
  ADD UNIQUE KEY `category_name_UNIQUE` (`category_name`),
  ADD KEY `fk_table1_language1_idx` (`language_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `user_name_UNIQUE` (`user_name`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_show1_idx` (`show_id`);

--
-- Indexes for table `cultural_place`
--
ALTER TABLE `cultural_place`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tel1_UNIQUE` (`tel1`),
  ADD KEY `fk_public_center_category_idx` (`category_id`);

--
-- Indexes for table `cultural_place_translation`
--
ALTER TABLE `cultural_place_translation`
  ADD PRIMARY KEY (`cultural_place_id`,`language_id`),
  ADD KEY `fk_cultural_place_translation_language1_idx` (`language_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_like_user1_idx` (`user_id`),
  ADD KEY `fk_like_show1_idx` (`show_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_user1_idx` (`user_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reservation_reservation_type1_idx` (`reservation_type_id`),
  ADD KEY `fk_reservation_user1_idx` (`user_id`),
  ADD KEY `fk_reservation_screening1_idx` (`screening_id`);

--
-- Indexes for table `reservation_type`
--
ALTER TABLE `reservation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `screening`
--
ALTER TABLE `screening`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_screening_auditorium1_idx` (`auditorium_id`),
  ADD KEY `fk_screening_show1_idx` (`show_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_seat_auditorium1_idx` (`auditorium_id`);

--
-- Indexes for table `seat_reserved`
--
ALTER TABLE `seat_reserved`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_seat_reserved_seat1_idx` (`seat_id`),
  ADD KEY `fk_seat_reserved_screening1_idx` (`screening_id`),
  ADD KEY `fk_seat_reserved_reservation1_idx` (`reservation_id`);

--
-- Indexes for table `show`
--
ALTER TABLE `show`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_show_show_category1_idx` (`show_category_id`),
  ADD KEY `fk_show_cultural_place1_idx` (`cultural_place_id`);

--
-- Indexes for table `show_category`
--
ALTER TABLE `show_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `show_category_translation`
--
ALTER TABLE `show_category_translation`
  ADD PRIMARY KEY (`show_category_id`,`language_id`),
  ADD UNIQUE KEY `category_name_UNIQUE` (`category_name`),
  ADD KEY `fk_show_category_translation_language1_idx` (`language_id`);

--
-- Indexes for table `show_translation`
--
ALTER TABLE `show_translation`
  ADD PRIMARY KEY (`show_id`,`language_id`),
  ADD KEY `fk_show_translation_show1_idx` (`show_id`),
  ADD KEY `fk_show_translation_language1` (`language_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ticket_show1_idx` (`show_id`);

--
-- Indexes for table `ticket_data_option_translation`
--
ALTER TABLE `ticket_data_option_translation`
  ADD PRIMARY KEY (`ticket_option_data_id`,`language_id`),
  ADD KEY `fk_ticket_data_option_translation_language1_idx` (`language_id`);

--
-- Indexes for table `ticket_has_order`
--
ALTER TABLE `ticket_has_order`
  ADD PRIMARY KEY (`ticket_id`,`order_id`,`seat_reserved_id`),
  ADD KEY `fk_ticket_has_order_order1_idx` (`order_id`),
  ADD KEY `fk_ticket_has_order_ticket1_idx` (`ticket_id`),
  ADD KEY `fk_ticket_has_order_seat_reserved1_idx` (`seat_reserved_id`);

--
-- Indexes for table `ticket_option`
--
ALTER TABLE `ticket_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_option_data`
--
ALTER TABLE `ticket_option_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ticket_option_data_ticket_option1_idx` (`ticket_option_id`),
  ADD KEY `fk_ticket_option_data_ticket1_idx` (`ticket_id`);

--
-- Indexes for table `ticket_option_translation`
--
ALTER TABLE `ticket_option_translation`
  ADD PRIMARY KEY (`ticket_option_id`,`language_id`),
  ADD KEY `fk_table2_language1_idx` (`language_id`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_visit_show1_idx` (`show_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `auditorium`
--
ALTER TABLE `auditorium`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `cultural_place`
--
ALTER TABLE `cultural_place`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reservation_type`
--
ALTER TABLE `reservation_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `screening`
--
ALTER TABLE `screening`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `seat_reserved`
--
ALTER TABLE `seat_reserved`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `show`
--
ALTER TABLE `show`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `show_category`
--
ALTER TABLE `show_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ticket_option`
--
ALTER TABLE `ticket_option`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ticket_option_data`
--
ALTER TABLE `ticket_option_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_article_category1` FOREIGN KEY (`article_category_id`) REFERENCES `article_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `article_category_translation`
--
ALTER TABLE `article_category_translation`
  ADD CONSTRAINT `fk_article_category_translation_article_category1` FOREIGN KEY (`article_category_id`) REFERENCES `article_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_article_category_translation_language1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `article_translation`
--
ALTER TABLE `article_translation`
  ADD CONSTRAINT `fk_article_translation_article1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_article_translation_language1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `auditorium`
--
ALTER TABLE `auditorium`
  ADD CONSTRAINT `fk_auditorium_cultural_place1` FOREIGN KEY (`cultural_place_id`) REFERENCES `cultural_place` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `category_translation`
--
ALTER TABLE `category_translation`
  ADD CONSTRAINT `fk_table1_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table1_language1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_show1` FOREIGN KEY (`show_id`) REFERENCES `show` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cultural_place`
--
ALTER TABLE `cultural_place`
  ADD CONSTRAINT `fk_public_center_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cultural_place_translation`
--
ALTER TABLE `cultural_place_translation`
  ADD CONSTRAINT `fk_cultural_place_translation_cultural_place1` FOREIGN KEY (`cultural_place_id`) REFERENCES `cultural_place` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cultural_place_translation_language1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `fk_like_show1` FOREIGN KEY (`show_id`) REFERENCES `show` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_like_user1` FOREIGN KEY (`user_id`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_user1` FOREIGN KEY (`user_id`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation_reservation_type1` FOREIGN KEY (`reservation_type_id`) REFERENCES `reservation_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservation_screening1` FOREIGN KEY (`screening_id`) REFERENCES `screening` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservation_user1` FOREIGN KEY (`user_id`) REFERENCES `client` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `screening`
--
ALTER TABLE `screening`
  ADD CONSTRAINT `fk_screening_auditorium1` FOREIGN KEY (`auditorium_id`) REFERENCES `auditorium` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_screening_show1` FOREIGN KEY (`show_id`) REFERENCES `show` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `fk_seat_auditorium1` FOREIGN KEY (`auditorium_id`) REFERENCES `auditorium` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `seat_reserved`
--
ALTER TABLE `seat_reserved`
  ADD CONSTRAINT `fk_seat_reserved_reservation1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_seat_reserved_screening1` FOREIGN KEY (`screening_id`) REFERENCES `screening` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_seat_reserved_seat1` FOREIGN KEY (`seat_id`) REFERENCES `seat` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `show`
--
ALTER TABLE `show`
  ADD CONSTRAINT `fk_show_cultural_place1` FOREIGN KEY (`cultural_place_id`) REFERENCES `cultural_place` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_show_show_category1` FOREIGN KEY (`show_category_id`) REFERENCES `show_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `show_category_translation`
--
ALTER TABLE `show_category_translation`
  ADD CONSTRAINT `fk_show_category_translation_language1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table1_show_category1` FOREIGN KEY (`show_category_id`) REFERENCES `show_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `show_translation`
--
ALTER TABLE `show_translation`
  ADD CONSTRAINT `fk_show_translation_language1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_show_translation_show1` FOREIGN KEY (`show_id`) REFERENCES `show` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_ticket_show1` FOREIGN KEY (`show_id`) REFERENCES `show` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ticket_data_option_translation`
--
ALTER TABLE `ticket_data_option_translation`
  ADD CONSTRAINT `fk_ticket_data_option_translation_language1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ticket_data_option_translation_ticket_option_data1` FOREIGN KEY (`ticket_option_data_id`) REFERENCES `ticket_option_data` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ticket_has_order`
--
ALTER TABLE `ticket_has_order`
  ADD CONSTRAINT `fk_ticket_has_order_order1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ticket_has_order_seat_reserved1` FOREIGN KEY (`seat_reserved_id`) REFERENCES `seat_reserved` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ticket_has_order_ticket1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ticket_option_data`
--
ALTER TABLE `ticket_option_data`
  ADD CONSTRAINT `fk_ticket_option_data_ticket1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ticket_option_data_ticket_option1` FOREIGN KEY (`ticket_option_id`) REFERENCES `ticket_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ticket_option_translation`
--
ALTER TABLE `ticket_option_translation`
  ADD CONSTRAINT `fk_table2_language1` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table2_ticket_option1` FOREIGN KEY (`ticket_option_id`) REFERENCES `ticket_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `visit`
--
ALTER TABLE `visit`
  ADD CONSTRAINT `fk_visit_show1` FOREIGN KEY (`show_id`) REFERENCES `show` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
