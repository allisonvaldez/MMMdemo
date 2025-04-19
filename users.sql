CREATE DATABASE user_registration;

CREATE TABLE `users` (
	`id` INT(11) unsigned NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(75) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci auto_increment=1;