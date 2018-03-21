-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: mysql.interdns.co.uk
-- Generation Time: Feb 12, 2013 at 04:14 PM
-- Server version: 5.5.24-0ubuntu0.12.04.1
-- PHP Version: 5.3.2-1ubuntu4.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dwatson_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `item_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `headline` varchar(100) NOT NULL,
  `markup` text NOT NULL,
  `pubdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`item_id`, `headline`, `markup`, `pubdate`) VALUES
(1, 'A very important announcement', '<p>This is the first article in this news feed. Over the next week or so, we''ll be bringing you some important news about MySQL and how to work with databases using PHP.</p>', '2013-02-08 16:09:18'),
(2, 'Panda becomes MySQL ninja', '<p>Jelly-o croissant sugar plum sesame snaps gummies jelly-o marzipan. Marshmallow cotton candy faworki cotton candy cookie cupcake. Lemon drops macaroon candy applicake liquorice candy gingerbread marshmallow sweet roll. Tart gummi bears liquorice.</p>\r\n\r\n<p><img src="images/panda.jpg" alt="Panda">Chocolate bar jelly beans cheesecake oat cake. Liquorice faworki fruitcake cake. Jujubes cake marshmallow sugar plum gingerbread. Jujubes tiramisu powder faworki faworki cheesecake.</p>\r\n\r\n<p>Topping dessert lemon drops pie chocolate chocolate toffee apple pie topping. Tart gingerbread marzipan halvah carrot cake biscuit. Gummi bears marzipan danish candy cupcake. Marshmallow powder candy pastry cupcake muffin.</p>\r\n\r\n<p>Bear claw ice cream gummies candy. Jelly cake candy cake. Halvah tiramisu. Jujubes candy toffee bonbon gummi bears brownie tiramisu cookie.</p>\r\n\r\n<p>Cookie liquorice candy jelly beans chocolate bar bear claw. Chocolate cake tootsie roll sesame snaps apple pie cupcake. Applicake gummi bears powder.</p>', '2013-02-08 16:14:31'),
(3, 'PHP and MySQL work together perfectly', '<p>The new mysqli functions in PHP make it easier, faster and more secure to interface with any MySQL database.<p>\r\n\r\n<p>The &quot;I&quot; in mysqli stands for &quot;Improved&quot;. The improved functions were introduced with PHP5 and should be used with MySQL 4.1.3 or higher.</p>', '2013-02-11 18:22:36');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
