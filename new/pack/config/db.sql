DROP TABLE IF EXISTS `students`;
CREATE TABLE `students`
(
    `row`          int(11) NOT NULL AUTO_INCREMENT,
    `id`           text,
    `firstname`    text,
    `lastname`     text,
    `class_id`     text,
    `password`     text,
    `phone`        text,
    `email`        text,
    `parent_phone` text,
    PRIMARY KEY (`row`)
);

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers`
(
    `row`       int(11) NOT NULL AUTO_INCREMENT,
    `id`        text,
    `firstname` text,
    `lastname`  text,
    `class_id`  text,
    `password`  text,
    `phone`     text,
    `email`     text,
    PRIMARY KEY (`row`)
);

DROP TABLE IF EXISTS `agents`;
CREATE TABLE `agents`
(
    `row`       int(11) NOT NULL AUTO_INCREMENT,
    `id`        text,
    `firstname` text,
    `lastname`  text,
    `password`  text,
    `phone`     text,
    `email`     text,
    PRIMARY KEY (`row`)
);

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`
(
    `row`       int(11) NOT NULL AUTO_INCREMENT,
    `id`        text,
    `firstname` text,
    `lastname`  text,
    `password`  text,
    `phone`     text,
    `email`     text,
    PRIMARY KEY (`row`)
);

INSERT INTO `admins` (`id`, `firstname`, `lastname`, `password`, `phone`, `email`)
VALUES ('0491559066', 'Majid', 'Mohammadi', 'majid1356', '09192186255', 'majed@gmail.com');

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`
(
    `row`        int(11) NOT NULL AUTO_INCREMENT,
    `post_id`    text,
    `post_title` text,
    `post_text`  text,
    `dt`         text,
    `poster`     text,
    `type`       text,
    PRIMARY KEY (`row`)
);