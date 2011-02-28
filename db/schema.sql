CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `meta_description` varchar(255) NOT NULL DEFAULT '',
  `meta_keywords` varchar(255) NOT NULL DEFAULT '',
  `uri` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

