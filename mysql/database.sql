USE defaultdb;

DROP TABLE IF EXISTS `emails`;


CREATE TABLE IF NOT EXISTS `emails` (
  `id` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `email` varchar(100) UNIQUE NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
