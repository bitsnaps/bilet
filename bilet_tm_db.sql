-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2017 at 02:27 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bilet_tm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL,
  `article_category_id` int(11) NOT NULL,
  `image_name` varchar(65) DEFAULT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `article_category_id`, `image_name`, `post_date`) VALUES
(1, 1, 'aziyada1.png', '2017-09-12 04:43:07'),
(2, 1, 'aziyada1.png', '2017-09-12 04:43:23'),
(3, 1, 'aziyada1.png', '2017-09-12 04:43:33'),
(4, 1, 'aziyada1.png', '2017-09-12 04:43:44'),
(5, 2, NULL, '2017-08-12 05:13:33'),
(6, 3, 'buy-online.svg', '2017-09-12 04:44:16'),
(7, 3, 'comments.svg', '2017-09-12 04:44:39'),
(8, 3, 'reading.svg', '2017-09-12 04:44:56'),
(9, 3, 'message.svg', '2017-09-12 04:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE IF NOT EXISTS `article_category` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `article_category_translation` (
  `article_category_id` int(11) NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
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

CREATE TABLE IF NOT EXISTS `article_translation` (
  `article_id` int(11) NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `title` varchar(250) NOT NULL,
  `html_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article_translation`
--

INSERT INTO `article_translation` (`article_id`, `language_id`, `title`, `html_description`) VALUES
(1, 1, 'Торжественное празднование 50 дней до начала Игр «Ашхабад 2017»', 'Обратный отсчет оставшихся 50 дней до начала V Азиатских игр в закрытых помещениях и по боевым искусствам широко отпразднован организаторами Игр «Ашхабад 2017» массовыми велопробегами по всей столице, а также проведен медиабрифинг, чтобы проинформировать журналистов о ходе подготовки.'),
(1, 2, 'Oýunlara 50 günüň galmagy mynasybetli döwlet derejesinde çäre geçirildi', 'Şu gün Aziýa yklymynda giň gerimde geçiriljek köpugurly sport çäresine, ýagny Ýapyk binalarda we söweş sungaty boýunça V Aziýa oýunlarynyň başlanmagyna 50 gün galdy. Oýunlaryň guramaçylary bu şanly sene mynasybetli Aşgabatda köpçülikleýin welosipedli ýöriş geçirdiler. Şol bir wagtyň özünde Oýunlara görülýän taýýarlyklaryň depgini bilen tanyşdyrmak üçin metbugat wekilleri bilen duşuşyk geçirildi.'),
(2, 1, 'Прошла вторая по счету выставка «Ярмарка Мастеров»', 'Третьего июня в первые сами мастера собственноручно организовали выставку своих работ, и она прошла на УРА! Учитывая желание публики организовали очередную выставку. Все любители и ценители искусство и те, кто занимается им были приглашены на любительское мероприятия.'),
(2, 2, '“Ussatlaryň sergisi” atly serginiň ikinjisi geçirildi', 'Iýun aýynyň üçüne sungat ussatlary ilkiji gezek öz elleri bilen eden işleriniň sergisini gurnadylar, ol sergi gaty şowly geçdi! Sergä gatnaşan myhmanlaryň we tomaşaçylaryň isleglerini nazarda tutup ýene bir sergi gurnaldy. Ähli sungat muşdaklary we höwesekleri bu çeper höwesjeň meýletinçileriň gurnan dabarasyna çagyryldylar'),
(3, 1, 'Запуск продажи билетов на Игры «Ашхабад 2017» по всему Туркменистану', 'В субботу, 29 июля по всему Туркменистану началась продажа билетов на предстоящие V Азиатские игры в закрытых помещениях и по боевым искусствам «Ашхабад 2017».<br /> Более 700 000 билетов поступили в продажу на более чем 220 спортивных сессий. Зрители смогут увидеть выступления лучших спортсменов Азии и Океании по 21 виду спорта в течение 12 дней.'),
(3, 2, '“Aşgabat 2017” oýunlaryna tutuş Türkmenistanda petekler satuwa göýberildi', 'Şenbe, 29 iýulda tutuş Türkmenistanda ýetip gelýän ýapyk binalarda we söweş sungaty boýunça V Aziý oýunlary üçin petek satuwlary başlandy. \r\n200-den gowrak sport ýaryşlaryna tomaşa etmek üçin 700 000 den gowrak petek satuwa göýberildi. Tomaşaçylar 12 gününiň dowamynda Aziýanyň we Okeaniýanyň iň gowy türgenleriniň 21 görnüşli sport oýunlarynda etjek çykyşlaryna tomaşa edip bilerler.'),
(4, 1, 'Современное торговое оборудование для ресторанного бизнеса', '<p>Компания «Туркмен транзит» предлагают широкий выбор оборудования для общепита от различных производителей и по различным ценам: от самых доступных до брендовых.</p>\r\n<ol type="1"><li>Электронное торговое оборудование, POS – системы, сенсорный POS-терминал</li><li>Электронные весы, сканер штрих кода, принтеры этикеток, принтер чеков</li><li>Противокражные рамки</li><li>Расходные материалы</li></ol>'),
(4, 2, 'Restoran biznesi üçin döwrebap söwda enjamy', '<p>“Türkmen-Tranzit” kompaniýasy köpçülik naharlaýyş guramalary üçin köp görnüşli enjamlary dürli bahardan ýagny elýetrden iň aňrybaşyny hödürleýär.</p>\r\n<ol type="1"><li>Elektron söwda enjamy, POS-sistema, sensory POS-terminal</li><li>Elektron terezi, ştrih kod skanery, etiketke printeri, çek printeri</li><li>Ogurluga garşy çarçuwa</li><li>Sarp ediş materiallary</li></ol>'),
(5, 1, 'Куда сходить в Ашхабаде', '<p class="theatreInfoText"><b>Каждую пятницу и субботу, ресторан-клуб «Кервен» подарит вам не забываемые вечера с улетными шоу программами и розыгрышами призов, убойные и зажигательными треками!!!<br />\r\n<i>ул.Арчабиль, отель Чандыбиль<br />\r\nтел. 48 99 90 / 48 99 91</i>\r\n</b></p>\r\n<p class="theatreInfoText">Гасан Мамедов и кафе-бар «Нагина» приглашает всех любителей классической и живой музыки на концерт легендарного Гасана Мамедова!<br />\r\n<i>ул. Баба Джепбарова<br />\r\nтел. 22 28 45 / 72 74 73</i>\r\n</p>\r\n<p class="theatreInfoText"><b>Каждый четверг, ЖЕНСКИЙ ДЕНЬ в ASHGABAT Restaurant & Lounge  \r\nМилые дамы, Ashgabat coffee & cafe дарит скидку -30 % на все меню женской компании, а вечером еще и коктейль.<br />\r\n<i>ул.Махтымкули<br />\r\nтел.+993 63 19 80 08<br /></i><i>www.tm-restoran.com</i>\r\n</b></p>\r\n'),
(5, 2, 'Aşgabatda nirä gitse bolarka', '<p class="theatreInfoText"><b>Her Anna we Şenbe günleri “Kerwen” restoran-klub size ýatdan çykmajak şowhundan başyňy aýlaýjy dabaraly aýdym-saz çykyşly agşamlary sowgat eder!!!<br />\r\n<i>köç. Arçabil, Çandybil myhmanhana<br />\r\ntel: 48 99 90 / 48 99 91</i>\r\n</b></p>\r\n<p class="theatreInfoText">Gasan Mamedow we kafe-bar “Nagina” ähli klasik saz muşdaklaryny meşhur Gasan Mamedowyň konserdine çagyrýar! Gasan Mamedowyň ýerine ýetirmeginde skipkada çalynan sazdan lezzet almak mümkinçiligini elden bermäň!<br />\r\n<i>köç.Baba Jepbarow<br />\r\ntel: 22 28 45 / 72 74 73</i>\r\n</p>\r\n<p class="theatreInfoText"><b>Her Penşenbe ASHGABAT Restaurant & Lounge  gelin-gyzlaryň güni\r\nMähriban gelin-gyzlar Ashgabat coffee & cafe size menyunyň ähli naharlaryna -30% arzanladyş edýär şeýle hem gijeki kokteýli sowgat edýär. Ýörite siz üçin Eziz aýdym aýdar.<br />\r\n<i>köç.Magtymguly<br />\r\ntel: +993 63 19 80 08<br /></i><i>www.tm-restoran.com</i>\r\n</b></p>'),
(6, 1, 'Совершать онлайн покупки', '		'),
(6, 2, 'Onlaýn söwda edip bilersiňiz', ''),
(7, 1, 'Оставлять свои комментарии', ''),
(7, 2, 'Kommentariýalarňyzy galdyryp bilrsiňiz', ''),
(8, 1, 'Читать новости', ''),
(8, 2, 'Täzelikleri okap bilersiňiz', ''),
(9, 1, 'Получать рассылки о предстоящих событиях', ''),
(9, 2, 'Geljekki wakalar barada ýollamalar alyp bilersiňiz', '');

-- --------------------------------------------------------

--
-- Table structure for table `auditorium`
--

CREATE TABLE IF NOT EXISTS `auditorium` (
  `id` int(10) unsigned NOT NULL,
  `cultural_place_id` int(10) unsigned NOT NULL,
  `name` varchar(45) NOT NULL,
  `seats_no` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auditorium`
--

INSERT INTO `auditorium` (`id`, `cultural_place_id`, `name`, `seats_no`) VALUES
(1, 1, '1', 50),
(2, 2, '1', 50),
(3, 5, '1', 100),
(4, 44, '1', 50),
(5, 6, '1', 60);

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
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

CREATE TABLE IF NOT EXISTS `category_translation` (
  `category_id` tinyint(4) NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
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
(4, 1, 'ВЫСТАВКИ'),
(1, 1, 'ГЛАВНАЯ'),
(6, 1, 'ДЕТИ'),
(2, 1, 'КИНОТЕАТР'),
(5, 1, 'КОНЦЕРТ'),
(7, 1, 'СПОРТ'),
(3, 1, 'ТЕАТР');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) unsigned NOT NULL,
  `show_id` int(11) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `comment` longtext NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `star_count` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `show_id`, `user_id`, `name`, `comment`, `comment_date`, `star_count`) VALUES
(1, 1, 1, 'shagy', 'govy', '2017-08-23 06:40:22', 4),
(2, 7, 1, 'shagy', 'helooo', '2017-08-24 06:45:21', 3),
(3, 1, 5, 'Timur', 'Horoshiy film', '2017-08-29 09:52:52', 5),
(4, 1, 7, 'Irada', 'just test', '2017-08-29 11:26:53', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cultural_place`
--

CREATE TABLE IF NOT EXISTS `cultural_place` (
  `id` int(10) unsigned NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `tel1` varchar(45) NOT NULL,
  `tel2` varchar(45) DEFAULT NULL,
  `tel3` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `email` varchar(65) DEFAULT NULL,
  `image_name` varchar(65) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cultural_place`
--

INSERT INTO `cultural_place` (`id`, `category_id`, `tel1`, `tel2`, `tel3`, `fax`, `email`, `image_name`) VALUES
(1, 2, '46-99-94', '', NULL, NULL, NULL, 'berkararKinoteatr.jpg'),
(2, 2, '66 88-51-34', '66 30-12-17', NULL, NULL, '', 'parahatKinoteatr.jpg'),
(3, 3, '94-02-27', '94-09-58', '94-09-74', '94-09-58', '', 'mainTeatr.jpg'),
(4, 3, '94-19-02', '94-17-94', '', '94-19-02', '', 'mollanepesTeatr.jpg'),
(5, 4, '(+993)12 39 89 81', '(+993)12 39 88 38', '(+993)12 39 88 92', '(+993) 12 39 89 79', 'info@cci.gov.tm', 'exhibition1'),
(6, 3, '93-05-64', '93-26-32', '93-05-90', '93-05-76', NULL, 'magtymgulyTeatr.jpg'),
(7, 3, '48-25-71', '48-11-49', '48-11-43', '48-11-43', NULL, 'alpArslanTeatr.jpg'),
(8, 3, '36-40-93', '36-42-81', NULL, '36-47-11', NULL, 'pushkinTeatr.jpg'),
(9, 3, '32-22-18', '66 07-61-69', '66 61-26-61', '49-86-17', NULL, 'artistTeatr.jpg'),
(10, 5, '92-33-26', '92-18-65', '92-04-67', '92-04-67', NULL, 'vatanConcert.jpg'),
(11, 5, '49-26-56', '49-26-58', '49-21-00 ', '49-21-00 ', NULL, 'turkmenistanConcert.jpg'),
(12, 5, '92-66-65', NULL, NULL, NULL, NULL, 'konservation.jpg'),
(13, 5, '48-96-28', '48-97-25 ', '48-95-69', '48-95-69', NULL, 'mukamlarKosgi.jpg'),
(14, 5, '1111111111', NULL, NULL, NULL, NULL, 'ruhyetKosgi.jpg'),
(15, 7, '47-30-36', NULL, NULL, NULL, NULL, 'avangardFitnes.jpg'),
(16, 7, '60 10-07-33', NULL, NULL, NULL, NULL, 'sohoGym.jpg'),
(17, 7, '62 66-06-66', NULL, NULL, NULL, NULL, 'beautyFit.jpg'),
(18, 7, '61 68-30-44', NULL, NULL, NULL, NULL, 'xxlSport.jpg'),
(19, 7, '65-58-22', '66 69-58-22', NULL, NULL, NULL, 'blackBearSport.jpg'),
(20, 7, '94-10-10', NULL, NULL, NULL, NULL, 'triumphFitness.jpg'),
(21, 7, '66 10-40-02', NULL, NULL, NULL, NULL, 'goroglyFitness.jpg'),
(22, 7, '21-11-46', NULL, NULL, NULL, 'fitnesspulse07@gmail.com', 'pulseFitness.jpg'),
(23, 7, '36-31-28', '56-38-88', NULL, NULL, NULL, 'elitSport.jpg'),
(24, 7, '44-95-00', NULL, NULL, NULL, NULL, 'oguzkentFitness.jpg'),
(25, 7, '48-15-78', NULL, NULL, NULL, NULL, 'premiumFitness.jpg'),
(26, 7, '36-24-57', NULL, NULL, NULL, NULL, 'lotusFitness.jpg'),
(27, 7, '34-40-57', NULL, NULL, NULL, NULL, 'sportTenisMerkezi.jpg'),
(28, 7, '66 12-03-12', NULL, NULL, NULL, NULL, 'kuvvatSport.jpg'),
(29, 7, '36-26-16', NULL, NULL, NULL, NULL, 'atlantSport.jpg'),
(30, 7, '48-83-82', NULL, NULL, NULL, NULL, 'aerobikaSport.jpg'),
(31, 7, '123123', NULL, NULL, NULL, NULL, 'swimmmingComplex.jpg'),
(32, 7, '22-63-59', NULL, NULL, NULL, NULL, 'olimpFitness.jpg'),
(33, 7, '63 06-96-66', '66 39-56-66', NULL, NULL, NULL, 'bearSportCenter.jpg'),
(35, 7, '48-92-70', NULL, NULL, NULL, NULL, 'winterGames.jpg'),
(36, 6, '36-32-05 ', '36-10-95', '36-39-04', '36-32-05', NULL, 'sirkChildren.jpg'),
(37, 6, '39-89-09', '27-54-41', '27-54-42', NULL, NULL, 'dvorecDetstvo.jpg'),
(38, 6, '21-11 05', '21-11-61', '21-10-62', NULL, NULL, 'gurjakTeatr.jpg'),
(39, 4, '123456', NULL, NULL, NULL, NULL, 'chandybilSergi.jpg'),
(40, 4, '92-67-52', NULL, NULL, NULL, NULL, 'akBugday.jpg'),
(41, 4, '48-25-87', '48-25-92', '48-90-20', NULL, NULL, 'nacionalniyMuzey.jpg'),
(42, 4, '44-68-09', '44-68-00', NULL, NULL, NULL, 'muzeyKovrov.jpg'),
(44, 7, '111111232', NULL, NULL, NULL, NULL, 'kopetdagStadiyon.jpg'),
(45, 2, '93-67-25', '93-79-23', NULL, NULL, NULL, 'ashgabatKinoteatr.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cultural_place_translation`
--

CREATE TABLE IF NOT EXISTS `cultural_place_translation` (
  `cultural_place_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
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
(1, 1, 'Кинотеатр в ТРЦ «Беркарар»', 'Кинотеатр в ТРЦ «Беркарар» с момента открытия стал одним из \r\nнаиболее популярных мест досуга жителей и гостей столицы. Что говорить, \r\nтолько здесь можно увидеть киноновинки, зачастую в 3D так сказать с пылу жара.', 'Ашхабад', 'ул. Ататюрка, 82', 'с 9:00 до 18:00 Обед с 13:00 до 14:00', 'Без выходных', '37, 34, 60'),
(1, 2, '“Berkarar” Söwda Merkezindäki Kinoteatr', 'Berkarar kinoteatry açylan pursadyndan bäri paýtagtyň ýaşaýjylarnyň we myhmanlarnyň  meşhurlygy boýunça iň bir gelim gidimli ýerleriniň birine öwrüldi. Aýdyp oturasy zat ýok, kino dünýsindäki täzelikleriň ählisini, esasan hem 3D kinolary tomaşaçylar köpçülçgine çykan badyna hödürlenen persadynda görüp bolýar.', 'Aşgabat', 'Atatürk köçesi, 82', '9''dan 18''e çenli, Arakesme 1''dan 2''a çenli', 'Hemme gün işleýär', '37, 34, 60'),
(2, 1, 'Кинотеатр Парахат', 'про кинотеатр 2', 'Ашхабад', 'ул. Махтымкули', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Суббота и Воскресение', '*--*'),
(2, 2, 'kinoteatr Parahat', 'Kinoteatr 2 barada', 'Aşgabat', 'köçe Magtymguly', '9''dan 18''e çenli, Arakesme 1''dan 2''a çenli', 'Şenbe we Ýekşenbe', '*--*'),
(3, 1, 'Главный драматический театр Туркменистана им. Сапармурата Туркменбаши Великого', 'Большой драматический театр Туркменистана имени Сапармурата Туркменбаши Великого расположен на одной из главных улиц Махтумкули в центре столицы пряма на против парка «Ашхабад». Все представления основаны на повестях и романах классических и современных туркменских драматургов.', 'Ашхабад', 'пр. Махтумкули, 78', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Суббота и Воскресение', '2, 34, 5, 6, 11, 16, 18, 28, 29, 31, 38, 40'),
(3, 2, 'Türkmenistanyň Beýik  Saparmyrat Türkmenbaşy Adyndaky Baş Drama Teatry', 'Türkmenistanyň Beýik  Saparmyrat Türkmenbaşy adyndaky iň uly drama teatry paýtagtymyzyň merkezinde esasy köçeleri biri bolan Magtymguly köçesiniň ugrunde edil “Aşgabat” seýilgähiniň garşysynda ýerleşýär. Bu teatrda görkezilýän oýunlaryň ählisi klassiki we dörümiziň türkmen dramaturglarynyň romanlarynyň we powestleriniň esasynda goýulýar.', 'Aşgabat', 'Magtymguly şaýoly, 78', '9''dan 18''e çenli, Arakesme 1den 2''ä çenli', 'Şenbe we Ýekşenbe', '2, 34, 5, 6, 11, 16, 18, 28, 29, 31, 38, 40'),
(4, 1, 'Студенческий театр Туркменистана им. Молланепеса', 'Студенческий театр имени Молланепеса один из первых театров Туркменистана, который находится на одном из главных проспектов Махтымкули. Репертуар этого театра основывается на пьесах сегодняшних актерах, затрагивающие актуальные проблемы молодежи чем он и славится популярностью среди молодых зрителей.', 'Ашхабад', 'пр. Махтумкули, 76', 'с 09:00 до 18:00, Обед с 13:00 до 14:00', 'Суббота и Воскресение', '2, 34, 5, 6, 11, 16, 18, 28, 29, 31, 38, 40'),
(4, 2, 'Türkmenistanyň Mollanepes Adydaky Talyplar Teatry', 'Mollanepes adydaky talyplar teatry Türkmenistandaky ilkinji teatrlaryň biri bolup ol esasy şaýollryň biri bolan Magtymguly şaýolunda ýerleşýär. Bu teatryň repertuary häzirki döwrüň ýazyjylarynyň ýesalaryna esaslanyp, döwrüň ýaşlarynyň meselelerini gozgaýar we şol sebäpden hem ol ýaş tomaşaçylaryň arasynda meşhurlyga eýedir.', 'Aşgabat', 'Magtymguly şaýoly, 76', '9''dan 18''e çenli, Arakesme 1''dan 2''a çenli', 'Şenbe we Ýekşenbe', '2, 34, 5, 6, 11, 16, 18, 28, 29, 31, 38, 40'),
(5, 1, 'Выставочный зал Торгово-промышленной палаты', 'Все информация про выставочный зал', 'Ашхабад', 'пр. Чандыбиль', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Воскресение', '58'),
(5, 2, 'Sergi Zaly', 'Sergi barada', 'Aşgabat', 'köçe Çandybil', '9''dan 18''e çenli, Arakesme 1''dan 2''a çenli', 'Ýekşenbe', '58'),
(6, 1, 'Туркменский национальный музыкально-драматический театр им. Махтумкули', 'Музыкально драматический театр имени Махтымкули находится на улице Гороглы. Сцена театра оперы и балета вновь начал возрождаться с 2008 года по инициативе Президента Туркменистана Гурбангулы Бердымухамедова. Репертуар театра создается классическими произведениями, основанные на античных туркменских дестанах.', 'Ашхабад', 'ул. Героглы, 65', 'с 9 00 до 18 00, Обед с 13:00 до 14:00', 'суббота и воскресенье', '10, 22, 26'),
(6, 2, 'Türkmenistanyň Magtymguly Adyndaky Sazly Drama Teatry', 'Magtymguly adyndaky sazly drama teatry Görogly köçesinde ýerleşýär. Bu teatryň sahnasynda 2008-nji ýylda Türkmenistanyň Prezidenti Gurbanguly Berdimuhamedowyň tagallasy bilen opera we balet ýene gaýtadan janlanyp başlady. Teatryň repertuary gadymy türkmen dessanlaryna esaslanan klassiki eserler goýulýar.', 'Aşgabat', 'Görogly köçesi, 65', '9''dan 18''e çenli, Arakesme 1''dan 2''a çenli', 'Şenbe we Ýekşenbe', '10, 22, 26'),
(7, 1, 'Туркменский национальный молодежный театр им. Алп Арслана', 'Театр имени Алп Арслан один из новых театров, который находится среди новостроек по проспекту Арчабил на южней части города. Эта четырехэтажное здание была торжественно открыта в 2006 году. В театре две вращающиеся сцены с залами на 800 и 200 мест. Большой зал театра декорирован бархатом, сияющими звездочками а сверкающие позолоты создают ощущение торжественности и бьющей через край роскоши.\r\nНа площади перед театром установлен памятник туркменскому правителю и просветителю Алп Арслану. \r\n', 'Ашхабад', 'проспект Арчабил, 46', 'с 9 00 до 18 00, Обед с 13:00 до 14:00', 'Воскресение', '20, 42, 34, 37'),
(7, 2, 'Türkmenistanyň Alp Arslan Adyndaky Milli Ýaşlar Teatry', 'Alp Arslan adyndaky teatr täze teatrlaryň biri bolup, ol Arçabil şaýolunyň ugrundaky täze gurulan binalaryň arasynda şähermiziň gün-ortasynda ýerleşýär. Bu dört gatly kaşaň bina 2006 ýylda dabaraly ýagdaýda açyldy we ulanmaga berildi. Teatrda iki sany aýlanýan sahnaly 800 we 200 orunluk zallar bar. Teatryň uly zalyny ýanýan ýyldyzjyklardyr çyrajyklar, diwarlaryndaky we sahnadaky gymmat bahaly tutular teatryň kaşaň bezegine bezeg goşýar. \r\nTeatryň öňündäki meýdançada türkmen hökümdary we serkerdesi Alp Arslanyň ýadygärligi dikilen.', 'Aşgabat', 'Arçabil şaýoly, 46', '9''dan 18''e çenli, Arakesme 1''dan 2''a çenli', 'Ýekşenbe', '20, 42, 34, 37'),
(8, 1, 'Русский драматический театр имени А.С. Пушкина', 'Государственный русский драматический театр им. А.С. Пушкина один из первых русских театров во всей центральной Азии и конечно же в Туркменистане. Судя по возрасту театр несколько раз менял здание по всяким причинам, но сейчас он находится на улице Махтымкули который является одним из главных улиц города. Репертуар театра разнообразен чем и привлекает свою аудиторию.', 'Ашхабад', 'проспект Махтумкули, 142', 'с 09:00 до 18:00, Обед с 13:00 до 14:00', 'Суббота и Воскресение', '28, 29, 13, 56, 23, 52, 12'),
(8, 2, 'Türkmenistanyň A. S. Puşkin Adyndaky Rus Drama Teatry', 'A. S. Puşkin adyndaky döwlet rus drama teatry tutuş merkezi Aziýadaky we elbetde Türkmenistandaky ilkinji rus teatrlarynyň biri. Ýaş nukdaý nazardan bu teatr dürli sebäpler bilen binasyny çalşmaly boldy, şu wagt bolsa ol şähermiziň easy köçeleriniň biri bolan Magtymguly köçesinde ýerleşýär. Teatryň reperturary kop taraplylygy bolsa, tomaşaçylarynyň göwnünden turýar.', 'Aşgabat', 'Magtymguly şaýoly, 142', '9''dan 18''e çenli, Arakesme 1den 2''ä çenli', 'Ýekşenbe', '28, 29, 13, 56, 23, 52, 12'),
(9, 1, 'Частный театр "Артист"', 'Единственный частный театр города, Ашхабад, который обосновался в 2007 году— это театр «АртИст» который находится в восточной части города. \r\n\r\nВ Ашхабаде в первые был создан частный театр «АртИст». Можно сказать, что «АртИст» «родился» в декабре 2007 года, причиной тому стало желание некоторых актеров «Пушкинского» театра создать себе удобную рабочую среду так как последние годы работы много замечаний было креативным идеям. Единомышленники такие как Ольга Волкова, Михаил Рогов, Игорь Аннаклычев, Татьяна Костенко стали первыми основателями театра создав свою частную студию.\r\nЭту группу возглавила бывшая актриса Русского театра им. Пушкина Ольга Волкова выпускница Ташкентского театрально-художественного института.', 'Ашхабад', 'Гражданская бывший кинотеатр на против 3-го парка', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Суббота и Воскресение', '5, 6'),
(9, 2, '“Artist” Hususy Teatry', '«Аrtist» teatry Aşgabat şäherindäki ýeketäk hususy teatr bolup, ol 2007 ýylda şäheriň gün-dogar tarapynda esaslandyryldy. “Artist” teatryň döremeginiň sebäpleriniň biri hem “Puşkin” teatryň artistleriniň özleri üçin ähli taraplaýyn rahat iş ýeriniň bomagyny islemekleridir, sebäbi şol döwürlerde olara etsem goýsam işlerini amala aşyrmaga az goldaw berilýärdi. Olga Wolkowa, Mihail Rogow, Igor Annaklyçew, Tatýana Kostenka ýaly pikrdeşler hususy teatry esaslandyryjylaryň ilkinjileri boldular.\r\nBu pikirdeşler topara Puşkin adyndaky rus teatrynyň öňki artisti, Daşkentiň çeperçilik-teatr istitutynyň uçrumy Olga Wolkowa baş boldy.', 'Aşgabat', 'Grazdanskiý köçesi, öňki kinoteatr 3-nji parkyň garşysy', '9''dan 18''e çenli, Arakesme 1den 2''ä çenli', 'Şenbe we Ýekşenbe', '5, 6'),
(10, 1, 'Киноконцертный центр «Ватан»', '"Ватан" киноконцертный зал, принимает гостей и жителей столицы демонстрируя фильмы и концерты. Он находится на одной из главных улиц нашей столицы рядом с музеем изобразительных искусств по улице Гёрогы. В столичном киноконцертном центре «Ватан» устраиваются концерты мастеров современной эстрады и выступления камерных оркестров. В этом киноконцертном зале устраиваются грандиозные концерты и культурные недели всех зарубежных дружественных стран.', 'Ашхабад', 'ул. Гёроглы, 46', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Суббота до 12:00, Воскресение', '10, 22, 26'),
(10, 2, '“Watan” Kinokonsert Merkezi', '“Watan” kinokonset zaly şäheriň ýaşaýjylaryna we myhmanlaryna kinodyr konsertleri görkezemek bilen tomaşaçylary myhmansöýüjilikli garşy alýar. Ol paýtagtymyzyň esasy köçelerniň biri bolan Görogly köçesinde çeperçilik muzeýiniň ýanynda ýerleşýär. Paýtagtymyzyň “Watan” kinokonsert merkezinde häzirki döwür estrada aýdymçylary bilen bir hatarda uly bolmadyk orkestirleriň konsertleri gurnalýar. Bu ýerde ähli daşary dostluk ýurtlarynyň ägirt uly konsertleri we medeni hepdelikleri gurnalýar.', 'Aşgabat', 'Görogly köçesi, 46', '9''dan 18''e çenli, Arakesme 1den 2''ä çenli', 'Şenbe 12den soň, Ýekşenbe', '10, 22, 26'),
(11, 1, 'Киноконцертный центр «Туркменистан»', '17 февраля 2010 года в Ашхабаде состоялось открытие после капитальной реконструкции киноконцертного центра «Туркменистан». На фасаде трехэтажного беломраморного здания центра размещен большой плазменный экран. На первом этаже здания находятся кинозал, рассчитанный на 600 зрительских мест, а также интернет-кафе и игровой зал.\r\nСовременная техника позволит демонстрировать на большом широкоформатном экране киноленты и видеофильмы всех форматов, проводить здесь официальные мероприятия высокого уровня, концерты, спектакли. Большой и малый павильоны предназначены для съемок и также оснащены современной киноаппаратурой и спецоборудованием.', 'Ашхабад', 'ул. Огузхана, 13', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Понедельник', '13, 23, 32, 35, 38'),
(11, 2, '“Türkmenistan” Kinokonsert Merkezi', '2010 ýylyň 17 fewralynda Aşgabat şäherinde doly abatlaýyş işlerinden soň “Türkmenistan” kinokonsert merkeziniň açylşy boldy. Üç gatly ak binanyň ýüzünde uly plazma telewizorynyň ekrany ýerleşdirilen. Binanyň birinji gatynda 600 tomaşaça niýetlenen 600 orunly kino zaly, internet kafesi we oynalýan meýdança bar. Häzirkizaman tehnikasy uly tele ekranda kinolary, ähli formatdaky wideolary, ýokary derejede gurnalan resmi çäreleri, konsertleri, spektakilleri görkezmäge mümkinçilik berýär. Wideo dşürmek üçin niýetlenen uly we kiçi pawilonlar häzirkidöwür kino enjamlary bilen üpjün edilen.', 'Aşgabat', 'Oguzhan köçesi, 13', ' 9''dan 18''e çenli, Arakesme 1den 2''ä çenli', 'Şenbe güni 12 00''den soň we Duşenbe', '13, 23, 32, 35, 38'),
(12, 1, 'Концертный зал Консерватории Туркменистана', 'Концертный зал Консерватории был задуман для организации концертов крупнейших творческих коллективов консерватории и всего города в целом. С первых дней сцена Концертного зала стала постоянным местом для выступлений прославленных Государственной филармонии. Частыми гостями Концертного зала Консерватории стали студенты. На сегодняшний день Концертный зал является профессиональной площадкой для студентов консерватории для проведения концертов живой музыки самых разных жанров – от классической академической до эстрадной музыки.', 'Ашхабад', '', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Суббота и Воскресение', '*--*'),
(12, 2, 'Türkmenistanyň Konserwatoriýasynyň Konsert Zaly', 'Konserwatoriýanyň konset zaly konserwatoriýanyň öz içinde we bütin şäherde gurnalýan konsertleri geçirmek üçin niýetlenen. Bu konsert zalyň sahnasy ilkinji iş gününden başlap Döwlet filarmoniýasynyň goýýan çykyşlarynyň hemişelik ýerine öwrüldi. Bu zalyň  hemişeki tomaşaçylarynyň biri hem Konserwatoriýanyň talyplary boldy. Şu günki günde ol talyplar üçin dürli žanyrly ýagny klasiki sazdan başlap estrada sazlar çalynýan professional meýdança öwrüldi.', 'Aşgabat', '', '9''dan 18''e çenli, Arakesme 1den 2''ä çenli', 'Sişenbe Ýekşenbe', '*--*'),
(13, 1, 'Дворец Мукамов', 'Любители качественной музыки оценят концертный зал Мукамлар Кошги по достоинству. Он является одним из лучших в Туркменистане. В нем предусмотрены все удобства комфорта и дизайна, а главное, здесь зритель сможет насладиться выступом любимой музыкальной группы, выступление мастеров искусств Туркменистана – певцов и музыкантов, профессиональных танцевальных и фольклорных коллективов, актеров столичных театров, а также хор Туркменской национальной консерватории. Концертный зал соответствует всем требованиям и нормам.', 'Ашхабад', 'пр. Арчабиль 12', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Суббота и Воскресение', '16, 37, 34, 20, 42'),
(13, 2, 'Mukamlar Köşgi', 'Gowy sazyň muşdaklary Mukamlar köşgüniň konsert zalyna mynasyp bahany berip bilerler. Ol Türkmenistandaky konsesrt zallaryň iň gowularynyň biri. Bu zalda tomaşaçy ozüni rahat duýar ýaly ähli amatlyklar göz öňünde tutulan, esasan hem Türkmenistanyň sungat ussatlarynyň – aýdymçylaryň, sazandalaryň, ussat tansçylaryň we folklýor toparlaryň, paýtagtyň teatorlarynyň aktýorlarynyň, şeýle hem Türkmenistanyň milli konserwatoriýasynyň hor toparynyň çykyşlaryna tomaşa etmek üçin. Bu konsert zaly ähli talaplara laýyk gelýär.', 'Aşgabat', 'Arçabil şaýoly, 12', '9''dan 18''e çenli, Arakesme 1den 2''ä çenli', 'Sişenbe we Ýekşenbe', '16, 37, 34, 20, 42'),
(14, 1, 'Дворец "Рухыет"', 'Дворец "Рухыет" – это дворец конгрессов в Ашхабаде, расположен в правительственной части города. Так же, дворец зачастую используется  для проведения культурных мероприятий – концертов, слушаний, встреч, награждений и т.д. Строительство дворца проходило с 1997 по 1999 гг. Исполнителем проекта выступили французская фирма Bouygues.   \r\nНа сегодняшний день, Дворец "Рухыет" является одной из достопримечательностей Ашхабада. Представляя собой величественное здание, выстроенное в восточном стиле, оно отлично вписывается в общий архитектурный ансамбль. Изображение Дворца нашло свое место не только в полиграфических изданиях и путеводителях, но и на денежных банкнотах Туркменистана.\r\nНе смотря на то, что дворец построен в конце 90х годов, он и сегодня по своему техническому оснащению он не уступает лучшим конгресс залов мира.  А внутреннее убранство дворца является образцом вкуса и роскоши. Так, главный зал дворца украшает ковер-гигант «Президент», площадь которого почти 300 кв.м.', 'Ашхабад', 'ул. Атабаева', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Суббота и Воскресение', '13, 23, 14, 58'),
(14, 2, '“Ruhyýet” köşgi', '“Ruhyýet” köşgi – bu Aşgabatdaky kongressler köşgi bolup ol şäheriň hökümet binalarynyň ýanynda ýerleşýär. Bu köşk döwlet derejesindäki medeni dabaralary – konsertleri, diňleýişleri, duşuşuklary we sylaglama dabaralaryny geçirmek üçin ulanylýar. Köşgüň gurluşugy 1997 ýyldan 1999 ýyla çenli çekdi. Bu proýekti Bouygues fransuz firmasy tarapyndan ýerine ýetirildi.\r\nŞu günki günde “Ruhyýet” köşgi Aşgabadyň iň gözel binalarynyň biri bolup durýar. Bu köşk gündogaryň arhitektura stilinde gurulup, töweregindäki binalaryň toplumumy bilen gowy sazlaşýar. Bu binanyň keşbi diňe bir poligrfiki neşirlerde bolman eýsem Türkmenitanyň pul birliginde hem öz ýerini tapdy. Köşk 90-njy ýylllaryň aýagyna gurulandygyna garamazdan, ol häzirki döwrüň tehniki enjamlaşdyrma talaplarynyň laýyk gelip dünýäniň iň gowy kogres zallaryndan yza galanok. Köşgüň içki bezegi bolsa iň aňry baş bezegleriň nusgasy bolup durýar. Onuň esasy sahnasy meýdany 300 kw.m. bolan “Prezident” gigant-halysy bilen bezelen.', 'Aşgabat', 'Atabaýew köçesi', '9''dan 18''e çenli, Arakesme 1den 2''ä çenli', 'Sişenbe Ýekşenbe', '13, 23, 14, 58'),
(15, 1, 'Awangard Fitness', ' О нас', 'Ашхабад', 'ул.Андалиба 78/1', NULL, NULL, NULL),
(15, 2, 'Awangard Fitness', 'barada', 'Aşgabat', 'köçe Andalyp, 78/1', NULL, NULL, NULL),
(16, 1, 'Soho gym Club', 'Вы хотите заниматься фитнесом. Но Вы не знаете, какой фитнес- клуб выбрать? Вы не ошибётесь выбрав наш клуб, так как здесь все удобства созданы только для вашего спокойного занятия.', 'Ашхабад', 'ул. Кемине, 156', NULL, NULL, NULL),
(16, 2, 'Soho gym Club', 'barada', 'Aşgabat', 'köçe Kemine, 156', NULL, NULL, NULL),
(17, 1, 'Спортивно-танцевальный зал Beauty fit', 'Приглашаем всех желающих посетить спортивно-танцевальный зал Beauty fit. Направления : -Шейпинг -Пилатес -Аэробика -Стретч(растяжка) -Восточные танцы -Пластика(Lady dance) -Лезгинка -Гимнастика -Хип-хоп хореография(для подростков) -Йога -Зумба Оплата за месяц -100м/ разовое занятие-15м Выбери занятие для себя!', 'Ашхабад', 'Нефтегазовские элитки по юбилейной дом 109', NULL, NULL, NULL),
(17, 2, 'Sport we tans zaly Beauty fit', 'Hemmäni çagyrýarys', 'Aşgabat', 'köçe Ýubileýnyý, 109', NULL, NULL, NULL),
(18, 1, 'XXL', 'О нас', 'Ашхабад', 'ул. Магтымкули, 134а', NULL, NULL, NULL),
(18, 2, 'XXL', 'barada', 'Aşgabat', 'köçe Magtymguly, 134a', NULL, NULL, NULL),
(19, 1, 'Black Bear Sport Club', 'Всем известно банальное утверждение о том, что красота спасет мир. Только здоровый человек может выглядеть красивым. \r\nДля красоты и здоровья активные движения просто необходимы, а именно их не хватает современному человеку. \r\nНо как восполнить потребность организма в ежедневных физических нагрузках?\r\nВернуть природную красоту и грацию вам поможет «BLACK BEAR». И, если в природе медведь охраняет красоту леса, наш «Медведь» поможет сохранить красоту вашего тела и, самое главное, поможет сформировать нужный вам образ здорового и красивого человека.\r\nБытует мнение, что тело создается разумом. Природный разум диктует нам быть уверенными в себе, своих силах, быть здоровыми и красивыми. Уверенный в себе и своих силах человек обязательно добьется успеха. Главное поставить цель и упорно продвигаться к ее достижению. \r\nА мы вам в этом поможем.', 'Ашхабад', 'ул. Московская дом СААS', NULL, NULL, NULL),
(19, 2, 'Black Bear Sport Club', 'Hemmäni Çagyrýarys', 'Aşgabat', 'köçe Moskowskyý jaý CAAS', NULL, NULL, NULL),
(20, 1, 'Triumph Fitness Club', 'Всех Завем', 'Ашхабад', 'ул. Магтымкули, 74 ', NULL, NULL, NULL),
(20, 2, 'Triumph Fitness Club', 'Hemmäni çagyrýarys', 'Aşgabat', 'köçe Magtymguly, 74', NULL, NULL, NULL),
(21, 1, 'Görogly Fitness Club', 'Всех приглашаем', 'Ашхабад', 'ул. Шевченко напротив маг.Чинар', NULL, NULL, NULL),
(21, 2, 'Görogly Fitness Club', 'Hemmäni çagyrýarys', 'Aşgabat', 'köçe Şewçenko Çynar magazynyň garşysy', NULL, NULL, NULL),
(22, 1, 'Pulse Fitness Centre', 'Ни каких сложных движений\r\nВы больше не почувствуйте себя не уклюжей среди других.', 'Ашхабад', 'ул. А.Ниязова, 166', NULL, NULL, NULL),
(22, 2, 'Pulse Fitness Centre', 'Ýeňillik duýarsyňyz', 'Aşgabat', 'köçe A.Niýazow, 166', NULL, NULL, NULL),
(23, 1, 'Элит', 'Приглашаем всех', 'Ашхабад', 'адрес', NULL, NULL, NULL),
(23, 2, 'Elit', 'Hemmäni çagyrýarys', 'Aşgabat', 'salgy', NULL, NULL, NULL),
(24, 1, 'Фитнесс-клуб в отеле \\"Огузкент\\"', 'Приглашаем Всех', 'Ашхабад', 'пр. Битарап Туркменистан', NULL, NULL, NULL),
(24, 2, 'Oguzken Fitnes klub', 'Hemmäni çagyrýarys', 'Aşgabat', 'köçe Bitarap Türkmenistan', NULL, NULL, NULL),
(25, 1, 'Премиум', 'Приглашаем всех', 'Ашхабад', 'пр. Гарашсызлык, 30', NULL, NULL, NULL),
(25, 2, 'Premiýum', 'Hemmäni çagyrýarys', 'Aşgabat', 'köçe Garaşsyzlyk, 30', NULL, NULL, NULL),
(26, 1, 'Лотус', '13 занятий, 3 раза в неделю в четение 30 календарных дней. Возможны занятия как с инструктором, так и без.', 'Ашхабад', 'пр. Героглы, стадион "Копетдаг"', 'пн-сб с 9:00 до 22:30, вс с 10:30 до 20:30', 'нет', NULL),
(26, 2, 'Lotus', 'hemmäni çagyrýarys', 'Aşgabat', 'köçe Görogly, stadion köpetdag', '9''dan 22:30''a, Ýekşenbe 10:30''dan 20:30''a', 'ýok', NULL),
(27, 1, 'Центр Sport Tennis', 'Приглашаем всех', 'Ашхабад', '30 микрорайон, 2-ой проезд', NULL, NULL, NULL),
(27, 2, 'Sport Tennis Merkezi', 'Hemmäni çagyrýarys', 'Aşgabat', '30-njy Mikraýon, 2-nji geçiş', NULL, NULL, NULL),
(28, 1, 'Кувват', 'Приглашаем всех', 'Ашхабад', 'Локомотивная, 5', NULL, NULL, NULL),
(28, 2, 'Kuwwat', 'Hemmäni çagyrýarys', 'Aşgabat', 'Lokomotiýnyý, 5', NULL, NULL, NULL),
(29, 1, 'Атлант', 'Возможны тренировки как с инструктором, так и самостоятельно.', 'Ашхабад', 'стадион Копетдаг сектор-7', 'с 9:00 до 22:00, Воскресение с 10:00 до 20:00', 'нет', '*--*'),
(29, 2, 'Atlant', 'Özbaşdak we trener bilen türgenleşik.', 'Aşgabat', 'stadiýon köpetdag, 7-nji bölek', '9''dan 22''ä, Ýekşenbe 10''dan 20''ä çenli', 'ýok', '*--*'),
(30, 1, 'Аэробика', 'Приглашаем всех', 'Ашхабад', 'ул. Худайбердыева, 11 микрорайон', NULL, NULL, '*--*'),
(30, 2, 'Aerobika', 'Hemmäni çagyrýarys', 'Aşgabat', 'köçe Hudaýberdiýew, 11-nji mikraýon', NULL, NULL, NULL),
(31, 1, 'Oлимпийский водноспортивный комплекс', 'Приглашаем всех', 'Ашхабад', 'ул. Гурбанназара Эзизова', NULL, NULL, '*--*'),
(31, 2, 'Suw toplymy', 'Hemmäni çagyrýarys', 'Aşgabat', 'köçe Gurbannazar Ezizow', NULL, NULL, '*--*'),
(32, 1, 'Фитнес-клуб "Олимп"', 'Приглашаем всех', 'Ашхабад', 'Туркменбаши шайолы, Олимп 83/2', NULL, NULL, '*--*'),
(32, 2, 'Olimp fitnes kluby', 'Hemmäni çagyrýarys', 'Aşgabat', 'Türkmenbaşy şaýoly, 83/2', NULL, NULL, '*--*'),
(33, 1, 'Тренажерный зал "Медведь"', 'Приглашаем всех', 'Ашхабад', 'ул. Подвойская, 93', NULL, NULL, '*--*'),
(33, 2, '"Медведь" Sport zaly', 'Hemmäni çagyrýarys', 'Aşgabat', 'köçe Podwoýskiý, 93', NULL, NULL, '*--*'),
(35, 1, 'Спортивный комплекс зимних игр (ледовый дворец)', 'Ледовый дворец на 1000 мест открыт 18 мая 2006 года. Предназначен для спортивных соревнований по хоккею с шайбой, фигурному катанию. Площадь здания около 8 тысяч квадратных метров. В данный момент в арене тренируются все ашхабадские хоккейные клубы и группа фигурного катания.', 'Ашхабад', 'пр. Арчабил, 75', NULL, NULL, '*--*'),
(35, 2, 'Gyş oýunlary sport kompleksi', 'Hemmäni çagyrýarys', 'Aşgabat', 'köçe Arçabil, 75', NULL, NULL, '*--*'),
(36, 1, 'Государственный цирк Туркменистана', 'Государственный цирк Туркменистана расположен на проспекте Махтумкули в столице государства, городе Ашхабад. Цирк может принять до 1600 посетителей.', 'Ашхабад', 'пр. Махтумкули, 134-а', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Суббота и Воскресение', '1, 22, 28, 29, 33, 47, 53'),
(36, 2, 'Türkmenistanyň Döwlet Sirki', 'Türkmenistanyň döwlet sirki döwletimiziň paýtagty bolan Aşgabat şäheriniň Magtymguly şaýolunda ýerleşýär. Bu sirk bir gezekde 1600 çenli tomaşaçylary kabul edip bilýär.', 'Aşgabat', 'Magtymguly köçesi, 134-a', '9''dan 18''e çenli, Arakesme 1den 2''ä çenli', 'Şenbe 12''den soň we Ýekşenbe', '1, 22, 28, 29, 33, 47, 53'),
(37, 1, 'Дворец детства и юношества Туркменистана', 'Приглашаем всех', 'Ашхабад', 'адрес', NULL, NULL, '*--*'),
(37, 2, 'Türkmenistanyň çagalar we ýaşlar köşgi', 'Hemmäni çagyrýarys', 'Aşgabat', 'salgy', NULL, NULL, '*--*'),
(38, 1, 'Государственный кукольный театр Туркменистана', 'Государственный кукольный театр Туркменистана является единственным в стране театром кукол. Располагается он в городе Ашхабад, на улице Гарашсызлык Шаёлы. Здание было построено в 2005 году, стоимость постройки составила 15 млн. $. Площадь театра 7600 квадратных метров. Спектакли могут проходить в двух залах, рассчитанных на 200 и 300 мест. Творчество театра, в основном, адресовано юным зрителям. На ранних этапах кукольного искусства в Туркмении, собственного театра в стране не было, и сюда приезжали кукольники – гастролеры. Но теперь, когда построен этот современный комплекс, который может принять множество детей, в нем действует труппа, в репертуаре которой насчитывается более 40 представлений. Театр представляет собой круглое здание с синими витражами и золотым куполом с флагом Туркменистана на самой верхушке. К театру прилегает красочный парк с разнообразными фонтанами и арками. В конструкции театра запланирована два зала на 300 и 200 мест.', 'Ашхабад', 'пр. Гарашсызлык, 73', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Суббота и Воскресение', '56, 34, 37, 9'),
(38, 2, 'Türkmenistanyň Döwlet Gurjak Tearty', 'Türkmenistanyň döwlet gurjak teatry ýurtdaky ýeke-täk gurjak teatry bolup durýar. Ol Aşgabat şäherinde, Garaşsyzlyk şaýolunda ýerleşýär. Teatryň binasy 2005 ýylda guruldy, onuň umumy meýdany 7600 kwadrat metr. Spektakllar 200 orunluk we 300 orunluk iki zalda geçirilýär. Bu teatryň döredijiligi esasan hem ýaşajyk tomaşaçylar üçin niýetlenen. Gurjak sungaty Türkmenistanda intäk onçakly ýol almadyk wagty biziň ýudumyzda onuň ýörite öz teatry ýokdy, bular ýaly tomaşalara diňe gurjak gastrolçylary gelende tomaşa edip bolýardy. Indi, bu sungata niýetlenen ýörite bir toplum bar, ol bir topar çagalary bir bada kabul edip bilýär sebäbi onuň repertuarynda 40 sany oýuny görkezip bilýän truppa bar. Teatryň binasy tegelek görnüşde onuň altyn çaýylan gümmeziniň çür depesinde bolsa Türkmenistanyň baýdagy parlaýar. Teatryň daş töweregini owadan suw çüwdürümleri we arkalar bilen bezelen. Bu teatrda iki sany ýagny 200 we 300 orunluk zal bar.', 'Aşgabat', 'Garaşsyzlyk şaýoly, 73', '9''dan 18''e çenli, Arakesme 1den 2''ä çenli', 'Şenbe 12''den soň we Duşenbe', '56, 34, 37, 9'),
(39, 1, 'Торговый центр «Чандыбиль»', 'Приглашаем всех', 'Ашхабад', 'ул. Битарап Туркменистан, 108', NULL, NULL, '9'),
(39, 2, 'Çandybil Söwda Merkezi', 'Hemmäni çagyrýarys', 'Aşgabat', 'köçe Bitarap Türkmenistan, 108', NULL, NULL, '9'),
(40, 1, 'Музей Ак бугдай', 'Музей Ак бугдай ''Белая пшеница'' построен в местечке Анау под Ашхабадом, на том месте, где в 1904 году археологическая экспедиция под руководством американца Рафаэля Пампелли обнаружила семена белой пшеницы пятитысячелетней давности. Музей будет возводиться за счет средств госбюджета; заказчиками выступают Министерство сельского хозяйства Туркменистана и администрация Ахалского велаята.\r\nНовый музей, призванный увековечить славу знаменитого сорта туркменской пшеницы «ак бугдай». Музей представляет собой трехэтажное здание высотой 21 метр. Над ним возвышается гигантский золотой пшеничный колос в обрамлении двухъярусного венца из колосьев меньшего размера. Дополнением общего ансамбля, гармонично вписавшегося в местный природный ландшафт, стал фонтанный комплекс, сооруженный напротив фасада здания.', 'Ашхабад', 'Ахалский велаят, пос. Аннау', NULL, NULL, '*--*'),
(40, 2, 'Ak Bugdaý Muzeýi', 'Täze muzeý', 'Aşgabat', 'Ahal welaýaty, Änew şaherçesi', NULL, NULL, '*--*'),
(41, 1, 'Национальный музей Туркменистана', 'Главный национальный музей Туркменистана  (туркм. Döwlet muzeýi)  - ныне Государственный музей Государственного культурного центра Туркменистана является самым крупным в стране музеем. Расположен в предгорье Копетдага, в местечке Березенги. Общая площадь составляет порядка 15 тысяч кв. м. Строительство музея проходило в несколько этапов. Открытие состоялось 12 ноября 1998 года. \r\nВ коллекции национального музея Туркменистана насчитывается  свыше 130 тыс. экспонатов культурного, исторического и краеведческого значения.', 'Ашхабад', 'пр. Арчабиль', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Вторник', '*--*'),
(41, 2, 'Türkmenistanyň Milli Muzeýi', 'Hemmäni çagyrýarys', 'Aşgabat', 'köçe Çandybil', '9''dan 18''e çenli, Arakesme 1den 2''ä çenli', 'Sişenbe', '*--*'),
(42, 1, 'Национальный Музей Туркменского Ковра', 'Национальный Музей Туркменского ковра был создан в Ашхабаде в 1993 году.\r\nВ музее собрано более 166 тысяч уникальных экспонатов, включая предметы обнаруженные археологами на раскопках средневекового города Ниссы, древнего Мерва и других исторических памятников Туркменистана. В фондах музея и в специальных отделах хранятся богатые коллекции знаменитых туркменских ковров ручной работы, изделий из драгоценных металлов, национальная одежда, предметы традиционного быта, вышивка, керамика.\r\nТакже недавно, в здании Национального музея открылся Музей президента Туркменистана. Здесь собранны обширные документальные и фото материалы, в которых отражена новейшая история страны. Специальный отдел посвящен жизни и деятельности президента Туркменистана Гурбангулы Бердымухамедова.', 'Ашхабад', 'адрес', NULL, NULL, '*--*'),
(42, 2, 'Türkmen Milli Halylar Muzeýi', 'Hemmäni çagyrýarys', 'Aşgabat', 'salgy', NULL, NULL, '*--*'),
(44, 1, 'Стадион Копетдаг', 'Приглашаем всех', 'Ашхабад', 'адрес', NULL, NULL, NULL),
(44, 2, 'Köpetdag Stadiýony', 'Hemmäni çagyrýarys', 'Aşgabat', 'salgy', NULL, NULL, NULL),
(45, 1, 'Кинотеатр Ашхабад', 'Кинотеатр "Ашхабад", возведенный в историческом центре столицы на проспекте Махтумкули, несомненно является лучшим в Туркменистане. Он был построен французской компанией Vinci по заказу госконцерна «Туркменнефтегазстрой».   Фасад здания оригинальной архитектуры облицован белым мрамором и серым гранитом и также оформлен витражами. Общая площадь кинотеатра более 4000 кв.м. Вокруг кинотеатра располагается ухоженная территория, где можно погулять или посидеть в ожидании сеанса.Открытие кинотеатра состоялось 29 июня 2011 года при личном участии Президента Туркменистана Гурбангулы Бердымухамедова. Это был как бы подарок к дню его рождения и одновременно для всех ашхабадцев, которые получили кинотеатр, оснащенный по последнему слову техники.', 'Ашхабад', 'ул. Махтымкули, 115', 'с 9:00 до 18:00, Обед с 13:00 до 14:00', 'Суббота и Воскресение', '29, 28'),
(45, 2, 'Kinoteatr Aşgabat', 'Hemmäni çagyrýarys', 'Aşgabat', 'köçe Magtymguly, 115', '9''dan 18''e çenli, Arakesme 1''dan 2''a çenli', 'Şenbe we Ýekşenbe', '29, 28');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(45) NOT NULL,
  `code` varchar(10) NOT NULL,
  `locale` varchar(225) NOT NULL,
  `image` varchar(65) NOT NULL,
  `directory` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `like` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `show_id` int(10) unsigned NOT NULL,
  `like_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`id`, `user_id`, `show_id`, `like_status`) VALUES
(4, 1, 1, 1),
(5, 1, 7, 0),
(6, 5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1503390290),
('m140209_132017_init', 1503392453),
('m140403_174025_create_account_table', 1503392453),
('m140504_113157_update_tables', 1503392453),
('m140504_130429_create_token_table', 1503392453),
('m140506_102106_rbac_init', 1503649518),
('m140830_171933_fix_ip_field', 1503392453),
('m140830_172703_change_account_table_name', 1503392453),
('m141222_110026_update_ip_field', 1503392453),
('m141222_135246_alter_username_length', 1503392453),
('m150614_103145_update_social_account_table', 1503392453),
('m150623_212711_fix_username_notnull', 1503392453),
('m151218_234654_add_timezone_to_profile', 1503392453),
('m160929_103127_add_last_login_at_to_user_table', 1503392453);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `show_id` int(10) unsigned NOT NULL,
  `ticket_count` int(11) NOT NULL,
  `amount` decimal(6,2) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `confirmation_number` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `show_id`, `ticket_count`, `amount`, `date_created`, `confirmation_number`) VALUES
(1, 1, 1, 1, '30.00', '2017-08-23 11:24:15', 'asasas-asas-asas-as');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`, `timezone`) VALUES
(1, 'Leo', 'leo@mail.ru', 'leo@mail.ru', 'da225a326dc25180401ee0a54a2de95a', 'turkmenistan', 'http://leo.ru', 'i am leo hahaha', 'Asia/Ashgabat'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(10) unsigned NOT NULL,
  `reservation_type_id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `screening_id` int(10) unsigned NOT NULL,
  `reserved` tinyint(1) NOT NULL,
  `ext_order_id` varchar(100) NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `reserv_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reserv_hour` int(11) NOT NULL,
  `reserv_min` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_type_id`, `user_id`, `screening_id`, `reserved`, `ext_order_id`, `paid`, `active`, `reserv_date`, `reserv_hour`, `reserv_min`) VALUES
(1, 1, 1, 1, 0, '', 0, 0, '2017-08-25 12:07:30', 17, 16),
(2, 1, 1, 1, 0, '', 0, 0, '2017-08-25 12:07:24', 17, 19),
(3, 1, 1, 1, 0, '', 0, 0, '2017-08-25 12:07:19', 17, 20),
(4, 1, 1, 1, 0, '', 0, 0, '2017-08-25 12:07:13', 17, 21),
(5, 1, 1, 1, 0, '', 0, 0, '2017-08-25 12:07:06', 17, 22),
(6, 1, 1, 1, 0, '', 0, 0, '2017-08-25 12:07:00', 17, 24),
(7, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 12:06:07', 10, 30),
(8, 1, 1, 1, 0, '', 0, 0, '2017-08-19 08:31:15', 12, 53),
(9, 1, 1, 1, 0, '', 0, 0, '2017-08-19 08:31:15', 12, 56),
(10, 1, 1, 1, 0, '', 0, 0, '2017-08-19 09:21:42', 13, 32),
(11, 1, 1, 1, 0, '', 0, 0, '2017-08-19 10:00:30', 14, 56),
(12, 1, 1, 1, 0, '', 0, 0, '2017-08-19 10:10:30', 15, 4),
(13, 1, 1, 2, 0, '', 0, 0, '2017-08-19 10:10:30', 15, 4),
(14, 1, 1, 2, 0, '', 0, 0, '2017-08-19 10:50:30', 15, 46),
(15, 1, 1, 1, 0, '', 0, 0, '2017-08-22 12:15:30', 16, 53),
(16, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 05:50:30', 10, 28),
(17, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 05:55:30', 10, 31),
(18, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 06:10:30', 10, 49),
(19, 1, 1, 2, 0, 'a-1', 0, 0, '2017-08-25 07:30:31', 12, 10),
(20, 1, 1, 2, 0, 'a-1', 0, 0, '2017-08-25 07:35:31', 12, 14),
(21, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 07:40:31', 12, 19),
(22, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 07:40:31', 12, 19),
(23, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 07:50:30', 12, 26),
(24, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 07:50:30', 12, 27),
(25, 1, 1, 2, 0, 'a-1', 0, 0, '2017-08-25 07:50:31', 12, 27),
(26, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 07:55:31', 12, 31),
(27, 1, 1, 2, 0, 'a-1', 0, 0, '2017-08-25 07:55:31', 12, 31),
(28, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 10:35:31', 15, 15),
(29, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 10:40:31', 15, 16),
(30, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 10:45:31', 15, 22),
(31, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 10:50:31', 15, 29),
(32, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 10:55:30', 15, 33),
(33, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 10:55:30', 15, 34),
(34, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:00:30', 15, 36),
(35, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:00:30', 15, 39),
(36, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:05:30', 15, 42),
(37, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:05:30', 15, 43),
(38, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:10:30', 15, 47),
(39, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:15:30', 15, 54),
(40, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:15:30', 15, 54),
(41, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:15:30', 15, 55),
(42, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:15:30', 15, 55),
(43, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:20:30', 15, 57),
(44, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:20:30', 15, 58),
(45, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:20:30', 16, 0),
(46, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:20:30', 16, 0),
(47, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:25:30', 16, 1),
(48, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:30:30', 16, 10),
(49, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:40:30', 16, 20),
(50, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:45:30', 16, 25),
(51, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:50:30', 16, 26),
(52, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:50:30', 16, 26),
(53, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:50:30', 16, 27),
(54, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:50:30', 16, 27),
(55, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 11:55:30', 16, 33),
(56, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 12:05:30', 16, 42),
(57, 1, 1, 2, 0, 'a-1', 0, 0, '2017-08-25 12:10:30', 16, 50),
(58, 1, 1, 2, 0, 'a-1', 0, 0, '2017-08-25 12:15:30', 16, 52),
(59, 1, 1, 2, 0, 'a-1', 0, 0, '2017-08-25 12:25:30', 17, 1),
(60, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 12:25:30', 17, 1),
(61, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 12:25:30', 17, 1),
(62, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 12:25:30', 17, 2),
(63, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 12:25:30', 17, 2),
(64, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 12:30:30', 17, 6),
(65, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 12:30:30', 17, 7),
(66, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-25 12:55:30', 17, 35),
(67, 1, 1, 2, 0, 'a-1', 0, 0, '2017-08-29 17:45:34', 18, 9),
(68, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-29 17:45:55', 13, 20),
(69, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-29 17:46:17', 13, 21),
(70, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-29 17:38:10', 13, 21),
(71, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-29 17:38:49', 13, 22),
(72, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-29 17:45:09', 14, 45),
(73, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-29 17:40:08', 17, 43),
(74, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-29 17:40:41', 13, 59),
(75, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-29 17:41:25', 14, 21),
(76, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-29 17:41:57', 14, 24),
(77, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-29 17:42:26', 14, 37),
(78, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-29 17:43:07', 14, 40),
(79, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-29 17:43:46', 14, 40),
(80, 1, 1, 1, 0, 'a-1', 0, 0, '2017-08-29 17:44:23', 15, 48),
(81, 1, 1, 1, 0, 'a-1', 0, 1, '2017-08-29 17:34:21', 15, 59),
(82, 1, 1, 1, 0, 'a-1', 0, 1, '2017-08-29 17:33:42', 16, 16),
(83, 1, 1, 1, 0, 'a-1', 0, 1, '2017-08-29 17:33:07', 17, 54),
(84, 1, 1, 1, 1, 'a-1', 0, 1, '2017-09-03 12:44:39', 17, 44),
(85, 1, 1, 1, 1, 'a-1', 0, 1, '2017-09-06 12:11:35', 17, 11),
(86, 1, 1, 1, 1, 'a-1', 0, 1, '2017-09-06 12:39:31', 17, 39),
(87, 1, 1, 1, 1, 'a-1', 0, 1, '2017-09-08 11:12:39', 16, 12),
(88, 1, 1, 1, 1, 'a-1', 0, 1, '2017-09-08 11:13:47', 16, 13),
(89, 1, 1, 1, 1, 'a-1', 0, 1, '2017-09-08 11:13:56', 16, 13),
(90, 1, 1, 1, 1, 'a-1', 0, 1, '2017-09-08 12:59:02', 17, 59),
(91, 1, 1, 1, 1, 'a-1', 0, 1, '2017-09-08 14:39:08', 19, 39),
(92, 1, 1, 1, 1, 'a-1', 0, 1, '2017-09-09 10:12:24', 15, 12);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_type`
--

CREATE TABLE IF NOT EXISTS `reservation_type` (
  `id` int(10) unsigned NOT NULL,
  `reservation_type` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation_type`
--

INSERT INTO `reservation_type` (`id`, `reservation_type`) VALUES
(1, 'regular');

-- --------------------------------------------------------

--
-- Table structure for table `screening`
--

CREATE TABLE IF NOT EXISTS `screening` (
  `id` int(10) unsigned NOT NULL,
  `auditorium_id` int(10) unsigned NOT NULL,
  `show_id` int(10) unsigned NOT NULL,
  `screening_start` date NOT NULL,
  `start_hour` int(11) NOT NULL,
  `start_min` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `seat` (
  `id` int(10) unsigned NOT NULL,
  `auditorium_id` int(10) unsigned NOT NULL,
  `row` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `seat_reserved` (
  `id` int(10) unsigned NOT NULL,
  `seat_id` int(10) unsigned NOT NULL,
  `screening_id` int(10) unsigned NOT NULL,
  `reservation_id` int(10) unsigned NOT NULL,
  `row` int(11) NOT NULL,
  `colum` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seat_reserved`
--

INSERT INTO `seat_reserved` (`id`, `seat_id`, `screening_id`, `reservation_id`, `row`, `colum`) VALUES
(1, 1, 1, 4, 1, 3),
(2, 1, 1, 5, 10, 5),
(3, 1, 1, 6, 5, 3),
(4, 1, 1, 6, 5, 4),
(5, 1, 1, 7, 1, 1),
(6, 1, 1, 8, 1, 2),
(7, 1, 1, 8, 1, 3),
(8, 1, 1, 8, 1, 4),
(9, 1, 1, 8, 1, 5),
(10, 1, 1, 9, 2, 1),
(11, 1, 1, 9, 2, 2),
(12, 1, 1, 9, 2, 3),
(13, 1, 1, 9, 2, 4),
(14, 1, 1, 9, 2, 5),
(15, 1, 1, 10, 1, 2),
(16, 1, 1, 10, 1, 3),
(17, 1, 1, 10, 1, 4),
(18, 1, 1, 10, 1, 5),
(19, 1, 1, 11, 1, 2),
(20, 1, 1, 11, 1, 3),
(21, 1, 1, 11, 1, 4),
(22, 1, 1, 11, 1, 5),
(23, 1, 1, 12, 1, 2),
(24, 1, 1, 12, 1, 3),
(25, 1, 1, 12, 1, 4),
(26, 1, 1, 12, 1, 5),
(27, 2, 2, 13, 1, 1),
(28, 2, 2, 13, 1, 2),
(29, 2, 2, 13, 1, 3),
(30, 2, 2, 13, 1, 4),
(31, 2, 2, 13, 1, 5),
(32, 2, 2, 13, 1, 6),
(33, 2, 2, 13, 1, 7),
(34, 2, 2, 13, 1, 8),
(35, 2, 2, 13, 1, 9),
(36, 2, 2, 13, 1, 10),
(37, 1, 1, 68, 1, 1),
(38, 1, 1, 68, 2, 3),
(39, 1, 1, 70, 1, 2),
(40, 1, 1, 70, 1, 3),
(41, 1, 1, 71, 2, 2),
(42, 1, 1, 72, 1, 4),
(43, 1, 1, 74, 1, 5),
(44, 1, 1, 75, 2, 1),
(45, 1, 1, 76, 2, 4),
(46, 1, 1, 77, 2, 5),
(47, 1, 1, 78, 3, 1),
(48, 1, 1, 79, 3, 2),
(49, 1, 1, 80, 3, 3),
(50, 1, 1, 81, 3, 4),
(51, 1, 1, 82, 4, 2),
(52, 1, 1, 82, 5, 3),
(53, 1, 1, 83, 3, 5),
(54, 1, 1, 83, 10, 4),
(55, 1, 1, 83, 10, 5),
(56, 1, 1, 84, 1, 1),
(57, 1, 1, 85, 1, 2),
(58, 1, 1, 86, 1, 3),
(59, 1, 1, 87, 2, 3),
(60, 1, 1, 89, 2, 1),
(61, 1, 1, 90, 1, 4),
(62, 1, 1, 91, 1, 5),
(63, 1, 1, 92, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `show`
--

CREATE TABLE IF NOT EXISTS `show` (
  `id` int(10) unsigned NOT NULL,
  `show_category_id` int(10) unsigned NOT NULL,
  `cultural_place_id` int(10) unsigned NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_hour` int(11) NOT NULL,
  `start_min` int(11) NOT NULL,
  `end_hour` int(11) NOT NULL,
  `end_min` int(11) NOT NULL,
  `image_name` varchar(65) NOT NULL,
  `show_status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `show`
--

INSERT INTO `show` (`id`, `show_category_id`, `cultural_place_id`, `begin_date`, `end_date`, `start_hour`, `start_min`, `end_hour`, `end_min`, `image_name`, `show_status`) VALUES
(1, 1, 1, '2017-09-26', '2017-09-26', 19, 45, 19, 50, 'monkeyPlanet.png', 1),
(2, 1, 2, '2017-09-29', '2017-09-29', 17, 15, 19, 30, 'DespicableMe_3.jpg', 1),
(3, 5, 6, '2018-02-14', '2018-02-14', 17, 30, 18, 45, 'ashgabatConcert.jpg', 1),
(4, 4, 44, '2017-09-29', '2017-09-29', 18, 0, 20, 0, '02.jpg', 1),
(5, 3, 5, '2017-09-07', '2017-09-09', 9, 0, 16, 0, 'gasExhibition.jpg', 0),
(6, 3, 5, '2017-10-03', '2017-10-05', 9, 0, 16, 0, 'telecomExhibition.jpg', 0),
(7, 3, 5, '2017-10-11', '2017-10-12', 9, 0, 16, 0, 'economyExhibition.jpg', 0),
(8, 3, 5, '2017-11-01', '2017-11-02', 9, 0, 16, 0, 'turisticExhibition.jpg', 0),
(9, 3, 5, '2017-11-09', '2017-11-11', 9, 0, 16, 0, 'educationExhibition.jpg', 0),
(10, 3, 5, '2017-11-25', '2017-11-26', 9, 0, 16, 0, 'yarmarkaExhibition.jpg', 0),
(11, 3, 5, '2017-12-01', '2017-12-05', 9, 0, 16, 0, 'tecknicalExhibition.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `show_category`
--

CREATE TABLE IF NOT EXISTS `show_category` (
  `id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `show_category`
--

INSERT INTO `show_category` (`id`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Table structure for table `show_category_translation`
--

CREATE TABLE IF NOT EXISTS `show_category_translation` (
  `show_category_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `category_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `show_category_translation`
--

INSERT INTO `show_category_translation` (`show_category_id`, `language_id`, `category_name`) VALUES
(1, 2, 'Kino'),
(5, 2, 'Konsert'),
(3, 2, 'Sergi'),
(4, 2, 'Sport'),
(2, 2, 'Teatr'),
(3, 1, 'Выставка'),
(1, 1, 'Кино'),
(5, 1, 'Концерт'),
(4, 1, 'Спорт'),
(2, 1, 'Театр');

-- --------------------------------------------------------

--
-- Table structure for table `show_translation`
--

CREATE TABLE IF NOT EXISTS `show_translation` (
  `show_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `show_name` varchar(65) NOT NULL,
  `show_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `show_translation`
--

INSERT INTO `show_translation` (`show_id`, `language_id`, `show_name`, `show_description`) VALUES
(1, 1, 'Планета Обезьян Война', 'Армию генетически модифицированных обезьян ожидает новый вызов: они вынуждены вступить в смертельную схватку с армией людей под руководством безжалостного полковника.'),
(1, 2, 'Maýmynlaryň Planetasy: Uruş', 'Genetiki modifirlenen maýmynlaryň toparyny ýene täze kynçylyklar garaşýar: olar rehimsiz polkownigyň ýolbaşçylygyndaky nökerler bilen söweşe girmäge mejbur bolýarlar.'),
(2, 1, 'Гадкий Я 3', 'Мультфильм, семейный, приключения'),
(2, 2, 'Men bir nejis 3', 'Multfilm, maşgala üçin, başdangeçirme'),
(3, 1, 'Открытие концертного сезона', 'Государственный симфонический оркестр Туркменистана под Расула Клычева приглашает Вас на открытие концертного сезона 2017/2018.'),
(3, 2, 'Konsert möwsümüniň açylşy', 'Rasul Klyçewiň ýolbaşçylygynda Türkmenistanyň döwlet simfoniki orkestri Sizi 2017/2018 ýylyň konsert möwsümüniň açylşyna çagyrýar.'),
(4, 1, 'ФК Алтын Асыр & ФК ТТУ', '20 Сентября 2017 года состоится футбольный матч между командами ФК Алтын Асыр и ФК ТТУ. Организатором встречи выступит Министерство спорта и туризма Туркменистана'),
(4, 2, 'FT Altyn Asyr & FT TTU', '2017 ýylyň 20 sentýabyrynda FT Altyn Asyr we FT TTU toparlaryň arasynda futbol oýny geçer. Oýny gurnaýjy Türkmenistanyň sport we syýahatçylyk Ministirligi.'),
(5, 1, 'Развития энергетической промышленности', 'Международная выставка и научная конференция «Основные направления развития энергетической промышленности Туркменистана»'),
(5, 2, 'Senagaty özgertmek', '“Türkmenistanyň energetika senagatyny özgertmegiň esasy ugurlary” halkara sergi we ylmy konfirensiýa.'),
(6, 1, 'Научная конференция', 'XI Международная выставка и научная конференция телекоммуникации, телеметрии и информационных технологий «Туркментел – 2017»'),
(6, 2, 'Ylmy konfirensiýa', '“Türkmentel- 2017” telemetriýa we habar beriş tehnalogiýalarynyň XI halkara sergi we ylmy konfirensiýasy'),
(7, 1, 'Выставка экономических достижений Туркменистана', 'Выставка экономических достижений Туркменистана, посвященная 26-ти летию Независимости Туркменистана'),
(7, 2, 'Türkmenistanyň ykdysadyýetde gazananlarynyň sergisi', 'Türkmenistanyň Bitaraplygynyň 26 ýyllygyna bagyşlanan, Türkmenistanyň ykdysadyýetde gazananlarynyň sergisi'),
(8, 1, 'Туристическая выставка ', 'Международная туристическая выставка и конференция «Туризм и путешествия»'),
(8, 2, 'Turizm sergisi', '“Turizm we syýahat” halkara turizmiň sergisi we fonfirensiýasy'),
(9, 1, 'Научная конференция', 'Международная выставка и научная конференция «Образование и спорт в эпоху могущества и счастья»'),
(9, 2, 'Ylmy konfirensiýa', '“Berkarlyk we Bagtyýarlyk döwründe Bilim we Sport” halkara sergisi we ylmy konfirensiýa'),
(10, 1, 'Выставка-ярмарка хлопковой продукции', 'VII международная выставка-ярмарка хлопковой продукции Туркменистана и международная конференция «Хлопковая продукция Туркменистана и мировой рынок»'),
(10, 2, 'Pagta önümüniň bazar – sergisi', '“Türkmenistanyň pagta önümleri we dünýä bazary” Türkmenistanyň pagta önümleriniň VII halkara sergisi we halkara konfirensiýa'),
(11, 1, 'Выставка производственных технологий', 'Международная выставка производственных технологий импортозамещения'),
(11, 2, 'Önümçilik tehnologiýasyyň sergisi', 'Importyň ýerini tutmak önümçilik tehnalogiýasynyň halkara sergisi');

-- --------------------------------------------------------

--
-- Table structure for table `social_account`
--

CREATE TABLE IF NOT EXISTS `social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`) VALUES
(1, 'shuhratberdiyev@gmail.com'),
(2, 'shuhratberdiyev@gmail.com'),
(3, 'shuhratberdiyev@gmail.com'),
(4, 'shuhratberdiyev@gmail.com'),
(5, 'artyomchik_mister@mail.ru');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(10) unsigned NOT NULL,
  `show_id` int(10) unsigned NOT NULL,
  `total_ticket` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `ticket_data_option_translation` (
  `ticket_option_data_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `option_value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket_data_option_translation`
--

INSERT INTO `ticket_data_option_translation` (`ticket_option_data_id`, `language_id`, `option_value`) VALUES
(1, 1, 'Рубль'),
(1, 2, 'Manat'),
(2, 1, 'Рубль'),
(2, 2, 'Manat'),
(3, 1, 'Рубль'),
(3, 2, 'Manat'),
(4, 1, 'Рубль'),
(4, 2, 'Manat'),
(5, 1, 'Рубль'),
(5, 2, 'Manat');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_has_order`
--

CREATE TABLE IF NOT EXISTS `ticket_has_order` (
  `ticket_id` int(10) unsigned NOT NULL,
  `order_id` int(10) unsigned NOT NULL,
  `seat_reserved_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_option`
--

CREATE TABLE IF NOT EXISTS `ticket_option` (
  `id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `ticket_option_data` (
  `id` int(10) unsigned NOT NULL,
  `ticket_option_id` int(10) unsigned NOT NULL,
  `ticket_id` int(10) unsigned NOT NULL,
  `ticket_price` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ticket_option_data`
--

INSERT INTO `ticket_option_data` (`id`, `ticket_option_id`, `ticket_id`, `ticket_price`) VALUES
(1, 1, 1, 30),
(2, 2, 1, 50),
(3, 1, 2, 20),
(4, 1, 3, 35),
(5, 1, 4, 25);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_option_translation`
--

CREATE TABLE IF NOT EXISTS `ticket_option_translation` (
  `ticket_option_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
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
-- Table structure for table `token`
--

CREATE TABLE IF NOT EXISTS `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`user_id`, `code`, `created_at`, `type`) VALUES
(2, 'HuCkOo5UmJfhrVkwqzoI8Q3Kj-GkVWg_', 1503462711, 0),
(6, '331f9xiBiDeqnwbZB6iPQrToLQwN1SGw', 1504002604, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`, `last_login_at`) VALUES
(1, 'shagy', 'shuhratberdiyev@gmail.com', '$2y$12$MogTTv25TmWv4/BwSsli9usqMaXHdM2zCIwfEkF9TqDkkdslrVVYO', '5rfW5trLfcdoqJSPd8vVDJ7eo6iEfd-J', 1503564382, NULL, NULL, '::1', 1503393288, 1503556878, 0, 1505134639),
(2, 'admin', 'shagy@mail.ru', '$2y$12$fRNzGZ7DVMFppA1Dlxs5MewJOiEXaK/Ra/fEQbzALpQ.W6IYbBdYC', 'kmlv-89THl12xp47jAImUQdkJPSRMQ6f', 1503472732, NULL, NULL, '::1', 1503462711, 1503462711, 0, 1505286825),
(5, 'Timur', 't.kleperson@turkmen-tranzit.com', '$2y$12$cSp8gO/3y25HDVo.UD8q8.W9y3pDY1wb5qMparz81ZprFMkss37lK', 'GiO8EB9Iw8RB-CzAHNyj_vABNLDk2GMt', 1503999427, NULL, NULL, '95.47.57.32', 1503999402, 1503999402, 0, 1504699875),
(6, 'artyom', 'artyomchik_mister@mail.ru', '$2y$12$B4KBu9ShVujlkmetXrnlWeTKZGE5uLHyAfx3rP4DrxYXW3J8NOasW', 'mRy25SfLBYlwGrms6w1ViBvq1jbjWaA4', NULL, NULL, NULL, '95.47.57.49', 1504002604, 1504002604, 0, NULL),
(7, 'Irada', 'i.dovletova@turkmen-tranzit.com', '$2y$12$QDGA9tXN0dgQ39avAz8L7uEIysdtVLCemwfVgR62iFlKAtsqiUU4y', '32alZBnzijPPJRSytWd7URi1jAvnkBAx', 1504005302, NULL, NULL, '95.47.57.49', 1504005275, 1504005275, 0, 1504787854),
(8, 'shagy2', 'shuhratberdiyev@mail.ru', '$2y$12$hOTGp7HyFmys8EGLIl3xa.gO/dcdkLvJ7Y3OZNJ9TnqcxxzTGLZLS', 'lBwhTIdwsprTQVkCXoxYi6eEunB-XSbx', 1504087988, NULL, NULL, '95.47.57.49', 1504087955, 1504087955, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE IF NOT EXISTS `visit` (
  `id` int(10) unsigned NOT NULL,
  `show_id` int(10) unsigned NOT NULL,
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
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

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
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_show1_idx` (`show_id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_user1_idx` (`user_id`),
  ADD KEY `fk_order_show1_idx` (`show_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

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
-- Indexes for table `social_account`
--
ALTER TABLE `social_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_unique` (`provider`,`client_id`),
  ADD UNIQUE KEY `account_unique_code` (`code`),
  ADD KEY `fk_user_account` (`user_id`);

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
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_username` (`username`),
  ADD UNIQUE KEY `user_unique_email` (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `auditorium`
--
ALTER TABLE `auditorium`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cultural_place`
--
ALTER TABLE `cultural_place`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `reservation_type`
--
ALTER TABLE `reservation_type`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `screening`
--
ALTER TABLE `screening`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `seat_reserved`
--
ALTER TABLE `seat_reserved`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `show`
--
ALTER TABLE `show`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `show_category`
--
ALTER TABLE `show_category`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `social_account`
--
ALTER TABLE `social_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ticket_option`
--
ALTER TABLE `ticket_option`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ticket_option_data`
--
ALTER TABLE `ticket_option_data`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
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
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_comment_show1` FOREIGN KEY (`show_id`) REFERENCES `show` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comment_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_like_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_show1` FOREIGN KEY (`show_id`) REFERENCES `show` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation_reservation_type1` FOREIGN KEY (`reservation_type_id`) REFERENCES `reservation_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservation_screening1` FOREIGN KEY (`screening_id`) REFERENCES `screening` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservation_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `social_account`
--
ALTER TABLE `social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `visit`
--
ALTER TABLE `visit`
  ADD CONSTRAINT `fk_visit_show1` FOREIGN KEY (`show_id`) REFERENCES `show` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
