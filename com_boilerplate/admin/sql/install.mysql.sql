CREATE TABLE `#__items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
INSERT INTO `#__items` (`item`,`description`) VALUES ('Bp1','First item'),('Bp2','Second item')