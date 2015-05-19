/* create database */
CREATE DATABASE sprugs;

/* 	create user table
	TODO: foreign key for image
*/
CREATE TABLE `user` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `fname` varchar(50) NOT NULL,
 `lname` varchar(100) NOT NULL,
 `pname` varchar(50) NOT NULL,
 `user_level` varchar(30) NOT NULL,
 `passwd` varchar(64) NOT NULL,
 `createdts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* create user_img table*/
CREATE TABLE `user_img` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `userid` int(11) NOT NULL,
 `image` blob NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* create user_activity table */
CREATE TABLE `user_activity` (
 `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 `userid` int(11) NOT NULL,
 PRIMARY KEY (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* create contents table */
CREATE TABLE `contents` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `title` varchar(5000) NOT NULL,
 `summary` mediumtext NOT NULL,
 `description` longtext NOT NULL,
 `authorid` int(11) NOT NULL,
 `rating` int(11) NOT NULL,
 `noofviews` bigint(20) NOT NULL,
 `createdts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* Update img column in content table*/
ALTER TABLE `content` ADD `img` BLOB NOT NULL AFTER `title` ;
ALTER TABLE `content` CHANGE `img` `img` BLOB NULL DEFAULT NULL ;
ALTER TABLE `content` CHANGE `img` `img` TEXT NULL DEFAULT NULL ;


/*create comment table*/
CREATE TABLE `comment` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `userid` int(11) NOT NULL,
 `contentid` int(11) NOT NULL,
 `comment` mediumtext NOT NULL,
 `createdts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*create comment_like table*/
CREATE TABLE `comment_like` (
 `userid` int(11) NOT NULL,
 `commentid` int(11) NOT NULL,
 `createdts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* create content table*/
CREATE TABLE `content` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `title` varchar(5000) NOT NULL,
 `summary` mediumtext NOT NULL,
 `description` longtext NOT NULL,
 `authorid` int(11) NOT NULL,
 `rating` int(11) NOT NULL,
 `noofviews` bigint(20) NOT NULL,
 `createdts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
