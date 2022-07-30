-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla cursophp.coffee_list
CREATE TABLE IF NOT EXISTS `coffee_list` (
  `id_coffee` int(3) NOT NULL AUTO_INCREMENT,
  `coffee_name` varchar(80) DEFAULT NULL,
  `coffee_type` int(11) DEFAULT NULL,
  `coffee_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `coffee_price` float DEFAULT NULL,
  `coffee_properties` text,
  `coffee_created_by` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_coffee`),
  KEY `FK` (`coffee_type`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cursophp.coffee_list: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `coffee_list` DISABLE KEYS */;
REPLACE INTO `coffee_list` (`id_coffee`, `coffee_name`, `coffee_type`, `coffee_description`, `coffee_price`, `coffee_properties`, `coffee_created_by`) VALUES
	(3, 'Cappuccino', 3, 'Nacida en Italia, preparada con café expreso y leche montada con vapor para darle cremosidad. Se agrega cacao en polvo y/o canela.', 250, NULL, NULL),
	(4, 'Macchiato', 3, 'Es un café cortado típico de Italia, consiste en un expreso con una pequeña cantidad de leche caliente y espumada. En España se suele denominar café cortado.', 220, NULL, NULL),
	(5, 'Mocha', 3, 'Es una variante del café con leche. Como este, suele llevar un tercio de expreso y dos tercios de leche vaporizada, pero se añade una parte de chocolate.', 270, NULL, NULL),
	(6, 'Affogato', 3, 'Tradicionalmente conocido como "affogato al caffe" es un postre italiano a base de café. Por lo general, toma la forma de una bola de helado o helado con sabor a leche o vainilla cubierto o "ahogado" con un trago de espresso caliente.', 250, NULL, NULL),
	(7, 'Coffee Latte', 2, 'El Coffee Latte es un tipo de café preparado a base de café espresso y leche al vapor. Suele prepararse con un tercio de espresso, dos tercios de leche calentada y un centímetro de espuma.', 200, NULL, NULL),
	(8, 'Piccolo Latte', 2, 'Es una bebida pequeña a base de leche que se sirve normalmente en un vaso de 3-4 oz o 85-114 ml.', 220, NULL, NULL),
	(9, 'Americano', 1, 'Se diluye el café espresso en agua caliente, reduciendo así la intensidad de su sabor.', 180, NULL, NULL),
	(10, 'Espresso', 1, 'Se caracteriza por su rápida preparación a una alta presión y por un sabor y textura más concentrados.', 120, NULL, NULL),
	(11, 'Ristretto', 1, 'Es un "trago corto" de un café espresso más concentrado. Se elabora con la misma cantidad de café molido, pero se extrae con un molido más fino utilizando la mitad de agua.', 150, NULL, NULL),
	(12, 'Carajillo', 3, 'El carajillo es un cafÃ© preparado como un espresso al cual se le aÃ±ade ademÃ¡s de la infusiÃ³n una cierta cantidad de alguna bebida espirituosa, siendo lo mÃ¡s general el brandy, el orujo o el whisky.', 340, '', NULL),
	(13, 'FrappÃ©', 3, 'Una de las pocas variantes cuya conceptualizaciÃ³n es directamente como cafÃ© frÃ­o, el frappÃ© se elabora con cafÃ© instantÃ¡neo molido, hielo y crema de leche o nata.', 290, '', NULL);
/*!40000 ALTER TABLE `coffee_list` ENABLE KEYS */;

-- Volcando estructura para tabla cursophp.coffee_type
CREATE TABLE IF NOT EXISTS `coffee_type` (
  `id_coffee_type` int(11) NOT NULL AUTO_INCREMENT,
  `coffee_type_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_coffee_type`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cursophp.coffee_type: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `coffee_type` DISABLE KEYS */;
REPLACE INTO `coffee_type` (`id_coffee_type`, `coffee_type_name`) VALUES
	(1, 'Espresso'),
	(2, 'Latte'),
	(3, 'Specials'),
	(4, 'Ice');
/*!40000 ALTER TABLE `coffee_type` ENABLE KEYS */;

-- Volcando estructura para tabla cursophp.contact_users
CREATE TABLE IF NOT EXISTS `contact_users` (
  `id_entry` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(80) DEFAULT NULL,
  `user_email` varchar(80) DEFAULT NULL,
  `user_phone` varchar(80) DEFAULT NULL,
  `user_comment` text,
  `date_comment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_entry`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cursophp.contact_users: ~17 rows (aproximadamente)
/*!40000 ALTER TABLE `contact_users` DISABLE KEYS */;
REPLACE INTO `contact_users` (`id_entry`, `user_name`, `user_email`, `user_phone`, `user_comment`, `date_comment`) VALUES
	(1, 'seba', 'sebbamarin@gmail.com', '3412501514', 'asdasdasdasd', '2022-06-29 23:19:21'),
	(2, 'asdfasdf', 'sadfasdf', '12341234', 'qwerqwer', '2022-06-29 23:21:40'),
	(3, 'Sebamarin', 'sebbamarin@gmail.com', '3412505050', 'Mensaje de prueba cracken', '2022-06-30 01:42:32'),
	(4, 'sebastian', 'sebbamarin@gmail.com', '3412505050', 'fwqerqwerqwer', '2022-06-30 02:45:02'),
	(5, 'sebstian hnan mari', 'sebbamarin@gmail.com', '3412505050', 'ewrqwerqwerqwre', '2022-06-30 03:25:31'),
	(6, 'Sebamariin', 'sebbamarin@gmail.com', '3412505050', 'BuendiaTiburon!', '2022-06-30 03:41:57'),
	(7, 'Sebastian', 'sebbamarin@gmail.com', '341222222', 'SDFSADJFSADJFJSADF', '2022-06-30 03:46:40'),
	(8, 'SEBAMARIN', 'sebbamarin@gmail.com', '3412202020', 'QWERQWERQWERQWERQWER', '2022-06-30 03:50:57'),
	(9, 'owqerqwer', 'maildeprueba634@gmail.com', '324234234', '2423423423werqwerqwer', '2022-06-30 03:55:45'),
	(10, 'SUANA', 'sebbamarin@gmail.com', '3412505050', 'gfwpojgsjdfgosfdgsdfg', '2022-06-30 11:59:08'),
	(11, 'Sebastian Marin', 'sebbamarin@gmail.com', '3412505050', 'opqewrwerqwerqrwrqwer', '2022-06-30 12:25:54'),
	(12, 'RichardZersE', 'no-replyprayela@gmail.com', '85371145315', 'Hello!  smarin.online \r\n \r\nWe suggest \r\n \r\nSending your commercial offer through the feedback form which can be found on the sites in the contact section. Contact form are filled in by our software and the captcha is solved. The superiority of this method is that messages sent through feedback forms are whitelisted. This technique improve the odds that your message will be open. \r\n \r\nOur database contains more than 27 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing Up to 50,000 messages. \r\n \r\n \r\nThis offer is created automatically.  Use our contacts for communication. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.', '2022-07-04 04:14:23'),
	(13, 'NataliaOa', 'nataliaOa@yahoo.com', '+40 2756396949', 'HÐµllÐ¾ all, guÑƒÑ•! I know, my meÑ•sÐ°ge mÐ°y bÐµ tÐ¾o sÑ€eÑÑ–fÑ–c,\r\nÐ’ut my Ñ•iÑ•ter fÐ¾und nÑ–Ñe mÐ°n hÐµre Ð°nd they mÐ°rrÑ–Ðµd, sÐ¾ hÐ¾w abÐ¾ut me?! :)\r\nÎ™ Ð°m 23 yÐµÐ°rÑ• Ð¾ld, NÐ°talÑ–a, from RÐ¾mania, Î™ knÐ¾w Î•nglish Ð°nd German languÐ°gÐµs alsÐ¾\r\nÎ‘nd... Î™ hÐ°vÐµ sÑ€ecÑ–fic dÑ–sÐµase, namÐµd nymÑ€hÐ¾mÐ°nÑ–Ð°. WhÐ¾ knÐ¾w what iÑ• this, ÑÐ°n underÑ•tÐ°nd me (bÐµtter to say Ñ–t immediatÐµly)\r\nÎ‘h ÑƒÐµs, Î™ ÑÐ¾ok vÐµry tastÑƒÇƒ Ð°nd I love not onlÑƒ ÑÐ¾ok ;))\r\nÎ™m real girl, not prostÑ–tutÐµ, Ð°nd looking for sÐµriÐ¾us and hot rÐµlationshÑ–Ñ€...\r\nAnÑƒwaÑƒ, ÑƒÐ¾u cÐ°n find my prÐ¾fÑ–le herÐµ: http://chaidersnethapup.cf/user/17982/ \r\n', '2022-07-07 02:26:34'),
	(14, 'Mike ', 'no-replyadore@gmail.com', '83656338788', 'Hello \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our plans here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike  \r\nSpeed SEO Digital Agency', '2022-07-11 15:37:36'),
	(15, 'Mike Campbell\r\n', 'no-replyadore@gmail.com', '84831997429', 'Greetings \r\n \r\nI have just took a look on your SEO for  smarin.online for its SEO Trend and saw that your website could use an upgrade. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart improving your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Campbell\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2022-07-20 01:32:27'),
	(16, 'MargaritaPr', 'margaritaPr@mail.com', '+40 2408696571', 'Â¡HÐ¾lÐ° a todos, chÑ–ÑosÇƒ Lo Ñ•Ã©, mÑ– mensajÐµ puede sÐµr demaÑ•Ñ–adÐ¾ ÐµsÑ€eÑÃ­fÑ–cÐ¾,\r\nÐ ero mi hÐµrmana ÐµnÑÐ¾ntrÃ³ un buÐµn hombre Ð°Ô›uÃ­ Ñƒ sÐµ cÐ°sÐ°rÐ¾n, Â¿Ñƒ yÐ¾? :)\r\nÎ¤engo 27 vÑ–eÏ³Ð¾Ñ• Ð°Ã±Ð¾s, ÐœargaritÐ°, de RumÐ°nÑ–a, tÐ°mbÑ–Ã©n Ñ•Ã© inglÃ©s Ñƒ Ð°lemÃ¡n.\r\nY... tÐµngo una ÐµnfermÐµdÐ°d ÐµsÑ€eÑÃ­fÑ–ca, llamadÐ° ninfÐ¾manÃ­Ð°. QuÑ–Ã©n sÐ°be Ô›uÃ© es ÐµÑ•to, mÐµ puÐµdÐµ Ðµntender (meÏ³Ð¾r dÐµcÑ–rlÐ¾ dÐµ inmediato)\r\nÂ¡Ðh, Ñ•Ã­, Ñocino muy rÑ–coÇƒ y mÐµ ÐµncÐ°nta no Ñ•olo ÑÐ¾cinÐ°r ;))\r\nSoÑƒ una chÑ–ca de verdad, no Ñ€roÑ•titutÐ°, y busÑÐ¾ una relÐ°ÑÑ–Ã³n Ñ•ÐµrÑ–a Ñƒ ÑÐ°lÑ–Ðµnte...\r\nDÐµ todoÑ• modos, puedeÑ• ÐµncÐ¾ntrar mi Ñ€ÐµrfÑ–l Ð°quÃ­: http://avelharleiblum.tk/user-18873/ \r\n', '2022-07-20 06:20:20'),
	(17, 'Mike Thompson\r\n', 'no-replyadore@gmail.com', '81475748479', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your smarin.online to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nThank you \r\nMike Thompson\r\n', '2022-07-21 15:33:26');
/*!40000 ALTER TABLE `contact_users` ENABLE KEYS */;

-- Volcando estructura para tabla cursophp.rol_user
CREATE TABLE IF NOT EXISTS `rol_user` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cursophp.rol_user: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `rol_user` DISABLE KEYS */;
REPLACE INTO `rol_user` (`id_rol`, `rol_name`) VALUES
	(1, 'Admin'),
	(2, 'Suscriptor');
/*!40000 ALTER TABLE `rol_user` ENABLE KEYS */;

-- Volcando estructura para tabla cursophp.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `user_lastname` varchar(100) DEFAULT NULL,
  `user_email` varchar(200) DEFAULT NULL,
  `user_password` varchar(300) DEFAULT NULL,
  `user_phone` varchar(50) DEFAULT NULL,
  `user_rol` int(11) DEFAULT '2',
  PRIMARY KEY (`id_user`),
  KEY `FK_users_rol_user` (`user_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cursophp.users: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id_user`, `user_name`, `user_lastname`, `user_email`, `user_password`, `user_phone`, `user_rol`) VALUES
	(1, 'Sebastian', 'Marin', 'sebbamarin@gmail.com', NULL, '3434343434', 1),
	(2, 'Usuario', 'User', 'user@gmail.com', NULL, '1212121212', 2),
	(3, 'Susana', 'Morello', 'susu@morello.com.ar', 'chuchana1', '12121212', 2),
	(8, 'paula', 'marin', 'paulamarin@gmail.com', '$2y$10$gOv7lMqaKDdSEhiSMuXOc.hBwlsvcIgNWM7uDWzYV.1z5SVgbsW5W', '3434343434', 2),
	(9, 'sebastian', 'marin', 'sebamarin@gmail.com', '$2y$10$KZN/2/UBZ/Jh7bWGQBW.Se8QA7Ymomc2FlMHoAvR4k2SRYxZz6h3u', '3434343434', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
