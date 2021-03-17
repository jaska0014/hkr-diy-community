
USE diy_community;


DROP TABLE IF EXISTS `diy_events`;
CREATE TABLE `diy_events` (
  `id` int(11) KEY NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL DEFAULT 'no category',
  `description` varchar(200) DEFAULT NULL,
  `date` datetime NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default.jpg'
)
