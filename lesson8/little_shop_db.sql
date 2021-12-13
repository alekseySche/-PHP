CREATE DATABASE IF NOT EXISTS `little_shop`;
USE `little_shop`;

CREATE TABLE IF NOT EXISTS `catalogue` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `description` varchar(256) NOT NULL,
  `brand` varchar(16) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `url` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT IGNORE INTO `catalogue` (`id`, `title`, `description`, `brand`, `price`, `url`) VALUES
	(1, 'Термокружка Mi Fiu', 'Изящная кружка, которую невозможно опрокинуть.', 'Xiaomi', 2100.00, 'cup.jpg'),
	(2, 'IP камера Dafang 1080', 'Отличное соотношение цены и качества, а также весьма демократичный ценник.', 'Xiaomi', 2600.00, 'dafang_cam.jpg'),
	(3, 'Видеорегистратор YI Dash', 'Умный производительный видеорегистратор с оптимальным функционалом и доступной ценой', 'Xiaomi', 3500.00, 'dash_cam.jpg'),
	(4, 'Электросамокат Mijia Scooter', 'Отличная идея для тех кто оставляет машину на неудобных парковках или не хочет стоять в пробках.', 'Xiaomi', 35000.00, 'electric_scooter.jpg'),
	(5, 'Лампа-ночник Yeelight', 'С лампой Yeelight Bedside Lamp можно создавать совершенно различную атмосферу, подходящую под настроение.', 'Xiaomi', 3600.00, 'night_lamp.jpg'),
	(6, 'Робот-пылесос Mi Cleaner', 'Xiaomi теперь поможет провести интеллектуальную уборку вашего дома с последней разработкой эко-бренда MiJia.', 'Xiaomi', 21600.00, 'cleaner.jpg');

CREATE TABLE IF NOT EXISTS `orders` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `id_user` tinyint(4) NOT NULL,
  `date` int(11) NOT NULL,
  `status` enum('Новый','Отменен') NOT NULL DEFAULT 'Новый',
  `total_cost` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_fk` (`id_user`),
  CONSTRAINT `orders_fk` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT IGNORE INTO `orders` (`id`, `id_user`, `date`, `status`, `total_cost`) VALUES
	(1, 1, 1538944418, 'Новый', 60100);

CREATE TABLE IF NOT EXISTS `order_items` (
  `id_order` tinyint(4) NOT NULL,
  `id_prod` tinyint(4) DEFAULT NULL,
  `item_price` int(11) NOT NULL,
  `quantity` tinyint(4) DEFAULT NULL,
  `login` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT IGNORE INTO `order_items` (`id_order`, `id_prod`, `item_price`, `quantity`, `login`) VALUES
	(1, 4, 35000, 1, 'admin'),
	(1, 6, 21600, 1, 'admin'),
	(1, 3, 3500, 1, 'admin');

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `password` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT IGNORE INTO `users` (`id`, `login`, `password`) VALUES
	(1, 'admin', 'admin'),
	(2, 'user', 'user');