

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";





CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;



INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Jordan 1 Black Toe', 'black_toe_j1.png', 1200.00),
(2, 'Yeezy 350 v2 Dazzling Blue', 'blue_yeezy_350.png', 400.00),
(3, 'Jordan 4 Bred', 'bred_j4.png', 900.00),
(4, 'Yeezy 350 v2 Bred', 'bred_yeezy_350.png', 600.00),
(5, 'Dior B23 Black', 'dior_canvas.png', 1800.00),
(6, 'Fear of God Hoodie Black', 'fog_black_hoodie.png', 200.00),
(7, 'Fear of God Tee Black', 'fog_black_tee.png', 150.00),
(8, 'Fear of God Hoodie Oatmeal', 'fog_oatmeal_hoodie.png', 200.00),
(9, 'Fear of God Hoodie White', 'fog_white_hoodie.png', 200.00),
(10, 'Kaws x North Face Hoodie', 'kaws_nf_hoodie.png', 250.00),
(11, 'Nocta Hoodie Cardinal', 'nocta_hoodie.png', 300.00),
(12, 'Nocta Puffer Jacket Gold', 'nocta_jacket.png', 1000.00),
(13, 'Off-White belt Yellow', 'ow_belt.png', 180.00),
(14, 'Supreme Beanie Black', 'supreme_beanie.png', 70.00),
(15, 'Supreme Brick', 'supreme_brick2.png', 300.00),
(16, 'Supreme Coffee Maker', 'supreme_coffeemaker2.png', 220.00),
(17, 'Supreme Sling Bag Black', 'supreme_sidebag.png', 130.00),
(18, 'Supreme Work Gloves', 'supreme_workgloves.png', 50.00),
(19, 'Vlone Hoodie Palm Angels', 'vlone_hoodie.png', 350.00),
(20, 'Vlone Tee JW', 'vlone_jw_tee.png', 80.00),
(21, 'Vlone Tee JW 2', 'vlone_jw_tee2.png', 80.00),
(22, 'Vlone Tee Pop Smoke', 'vlone_pop_tee.png', 100.00),
(23, 'Yeezy x Gap Hoodie Black', 'yeezy_gap_hoodie.png', 160.00),
(24, 'Yeezy x Gap Puffer Jacket Black', 'yeezy_gap_jacket.png', 330.00);



