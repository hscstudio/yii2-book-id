CREATE database `yii2basic`;
use `yii2basic`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `employee` VALUES(NULL,'Hafid',29);
INSERT INTO `employee` VALUES(NULL,'Junaidi',35);
INSERT INTO `employee` VALUES(NULL,'Dewi',24);
INSERT INTO `employee` VALUES(NULL,'Agung',51);
