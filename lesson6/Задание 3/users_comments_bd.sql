CREATE DATABASE IF NOT EXISTS `users_comments` 
USE `users_comments`;

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(32) NOT NULL,
`text` varchar(256) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT IGNORE INTO `comments` (`id`, `name`, `text`) VALUES
	(1, 'Сергей', 'Здесь находится текст первого отзыва...'),
	(2, 'Наталья', 'Здесь находится текст второго отзыва...');