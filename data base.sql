/*
SQLyog Ultimate v12.2.6 (64 bit)
MySQL - 10.4.6-MariaDB : Database - jicscw_dev
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jicscw_dev` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `jicscw_dev`;

/*Table structure for table `anzsic_code` */

DROP TABLE IF EXISTS `anzsic_code`;

CREATE TABLE `anzsic_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=821 DEFAULT CHARSET=latin1;

/*Data for the table `anzsic_code` */

insert  into `anzsic_code`(`id`,`name`,`parent_id`) values 
(1,'Agriculture, Forestry and Fishing',0),
(2,'Mining',0),
(3,'Manufacturing',0),
(4,'Electricity, Gas, Water and Waste Services',0),
(5,'Construction',0),
(6,'Wholesale Trade',0),
(7,'Retail Trade',0),
(8,'Accommodation and Food Services',0),
(9,'Transport, Postal and Warehousing',0),
(10,'Information Media and Telecommunications',0),
(11,'Financial and Insurance Services',0),
(12,'Rental, Hiring and Real Estate Services',0),
(13,'Professional, Scientific and Technical Services',0),
(14,'Administrative and Support Services',0),
(15,'Public Administration and Safety',0),
(16,'Education and Training',0),
(17,'Health Care and Social Assistance',0),
(18,'Arts and Recreation Services',0),
(19,'Other Services',0),
(20,'Agriculture',1),
(21,'Aquaculture',1),
(22,'Forestry and Logging',1),
(23,'Fishing, Hunting and Trapping',1),
(24,'Agriculture, Forestry and Fishing Support Services',1),
(25,'Coal Mining',2),
(26,'Oil and Gas Extraction',2),
(27,'Metal Ore Mining',2),
(28,'Non-Metallic Mineral Mining and Quarrying',2),
(29,'Exploration and Other Mining Support Services',2),
(30,'Food Product Manufacturing',3),
(31,'Beverage and Tobacco Product Manufacturing',3),
(32,'Textile, Leather, Clothing and Footwear Manufacturing',3),
(33,'Wood Product Manufacturing',3),
(34,'Pulp, Paper and Converted Paper Product Manufacturing',3),
(35,'Printing (including the Reproduction of Recorded Media)',3),
(36,'Petroleum and Coal Product Manufacturing',3),
(37,'Basic Chemical and Chemical Product Manufacturing',3),
(38,'Polymer Product and Rubber Product Manufacturing',3),
(39,'Non-Metallic Mineral Product Manufacturing',3),
(40,'Primary Metal and Metal Product Manufacturing',3),
(41,'Fabricated Metal Product Manufacturing',3),
(42,'Transport Equipment Manufacturing',3),
(43,'Machinery and Equipment Manufacturing',3),
(44,'Furniture and Other Manufacturing',3),
(45,'Electricity Supply',4),
(46,'Gas Supply',4),
(47,'Water Supply, Sewerage and Drainage Services',4),
(48,'Waste Collection, Treatment and Disposal Services',4),
(49,'Building Construction',5),
(50,'Heavy and Civil Engineering Construction',5),
(51,'Construction Services',5),
(52,'Basic Material Wholesaling',6),
(53,'Machinery and Equipment Wholesaling',6),
(54,'Motor Vehicle and Motor Vehicle Parts Wholesaling',6),
(55,'Grocery, Liquor and Tobacco Product Wholesaling',6),
(56,'Other Goods Wholesaling',6),
(57,'Commission-Based Wholesaling',6),
(58,'Motor Vehicle and Motor Vehicle Parts Retailing',7),
(59,'Fuel Retailing',7),
(60,'Food Retailing',7),
(61,'Other Store-Based Retailing',7),
(62,'Non-Store Retailing and Retail Commission-Based Buying and/or Selling',7),
(63,'Accommodation',8),
(64,'Food and Beverage Services',8),
(65,'Road Transport',9),
(66,'Rail Transport',9),
(67,'Water Transport',9),
(68,'Air and Space Transport',9),
(69,'Other Transport',9),
(70,'Postal and Courier Pick-up and Delivery Services',9),
(71,'Transport Support Services',9),
(72,'Warehousing and Storage Services',9),
(73,'Publishing (except Internet and Music Publishing)',10),
(74,'Motion Picture and Sound Recording Activities',10),
(75,'Broadcasting (except Internet)',10),
(76,'Internet Publishing and Broadcasting',10),
(77,'Telecommunications Services',10),
(78,'Internet Service Providers, Web Search Portals and Data Processing Services',10),
(79,'Library and Other Information Services',10),
(80,'Finance',11),
(81,'Insurance and Superannuation Funds',11),
(82,'Auxiliary Finance and Insurance Services',11),
(83,'Rental and Hiring Services (except Real Estate)',12),
(84,'Property Operators and Real Estate Services',12),
(85,'Professional, Scientific and Technical Services (Except Computer System Design and Related Services)',13),
(86,'Computer System Design and Related Services',13),
(87,'Administrative Services',14),
(88,'Building Cleaning, Pest Control and Other Support Services',14),
(89,'Public Administration',15),
(90,'Defence',15),
(91,'Public Order, Safety and Regulatory Services',15),
(92,'Preschool and School Education',16),
(93,'Tertiary Education',16),
(94,'Adult, Community and Other Education',16),
(95,'Hospitals',17),
(96,'Medical and Other Health Care Services',17),
(97,'Residential Care Services',17),
(98,'Social Assistance Services',17),
(99,'Heritage Activities',18),
(100,'Creative and Performing Arts Activities',18),
(101,'Sports and Recreation Activities',18),
(102,'Gambling Activities',18),
(103,'Repair and Maintenance',19),
(104,'Personal and Other Services',19),
(105,'Private Households Employing Staff and Undifferentiated Goods- and Service-Producing Activities of Households for Own Use',19),
(106,'Nursery and Floriculture Production',20),
(107,'Mushroom and Vegetable Growing',20),
(108,'Fruit and Tree Nut Growing',20),
(109,'Sheep, Beef Cattle and Grain Farming',20),
(110,'Other Crop Growing',20),
(111,'Dairy Cattle Farming',20),
(112,'Poultry Farming',20),
(113,'Deer Farming',20),
(114,'Other Livestock Farming',20),
(115,'Aquaculture',21),
(116,'Forestry and Logging',22),
(117,'Fishing',23),
(118,'Hunting and Trapping',23),
(119,'Forestry Support Services',24),
(120,'Agriculture and Fishing Support Services',24),
(121,'Coal Mining',25),
(122,'Oil and Gas Extraction',26),
(123,'Metal Ore Mining',27),
(124,'Construction Material Mining',28),
(125,'Other Non-Metallic Mineral Mining and Quarrying',28),
(126,'Exploration',29),
(127,'Other Mining Support Services',29),
(128,'Meat and Meat Product Manufacturing',30),
(129,'Seafood Processing',30),
(130,'Dairy Product Manufacturing',30),
(131,'Fruit and Vegetable Processing',30),
(132,'Oil and Fat Manufacturing',30),
(133,'Grain Mill and Cereal Product Manufacturing',30),
(134,'Bakery Product Manufacturing',30),
(135,'Sugar and Confectionery Manufacturing',30),
(136,'Other Food Product Manufacturing',30),
(137,'Beverage Manufacturing',31),
(138,'Cigarette and Tobacco Product Manufacturing',31),
(139,'Textile Manufacturing',32),
(140,'Leather Tanning, Fur Dressing and Leather Product Manufacturing',32),
(141,'Textile Product Manufacturing',32),
(142,'Knitted Product Manufacturing',32),
(143,'Clothing and Footwear Manufacturing',32),
(144,'Log Sawmilling and Timber Dressing',33),
(145,'Other Wood Product Manufacturing',33),
(146,'Pulp, Paper and Paperboard Manufacturing',34),
(147,'Converted Paper Product Manufacturing',34),
(148,'Printing and Printing Support Services',35),
(149,'Reproduction of Recorded Media',35),
(150,'Petroleum and Coal Product Manufacturing',36),
(151,'Basic Chemical Manufacturing',37),
(152,'Basic Polymer Manufacturing',37),
(153,'Fertiliser and Pesticide Manufacturing',37),
(154,'Pharmaceutical and Medicinal Product Manufacturing',37),
(155,'Cleaning Compound and Toiletry Preparation Manufacturing',37),
(156,'Other Basic Chemical Product Manufacturing',37),
(157,'Polymer Product Manufacturing',38),
(158,'Natural Rubber Product Manufacturing',38),
(159,'Glass and Glass Product Manufacturing',39),
(160,'Ceramic Product Manufacturing',39),
(161,'Cement, Lime, Plaster and Concrete Product Manufacturing',39),
(162,'Other Non-Metallic Mineral Product Manufacturing',39),
(163,'Basic Ferrous Metal Manufacturing',40),
(164,'Basic Ferrous Metal Product Manufacturing',40),
(165,'Basic Non-Ferrous Metal Manufacturing',40),
(166,'Basic Non-Ferrous Metal Product Manufacturing',40),
(167,'Iron and Steel Forging',41),
(168,'Structural Metal Product Manufacturing',41),
(169,'Metal Container Manufacturing',41),
(170,'Sheet Metal Product Manufacturing (except Metal Structural and Container Products)',41),
(171,'Other Fabricated Metal Product Manufacturing',41),
(172,'Motor Vehicle and Motor Vehicle Part Manufacturing',42),
(173,'Other Transport Equipment Manufacturing',42),
(174,'Professional and Scientific Equipment Manufacturing',43),
(175,'Computer and Electronic Equipment Manufacturing',43),
(176,'Electrical Equipment Manufacturing',43),
(177,'Domestic Appliance Manufacturing',43),
(178,'Pump, Compressor, Heating and Ventilation Equipment Manufacturing',43),
(179,'Specialised Machinery and Equipment Manufacturing',43),
(180,'Other Machinery and Equipment Manufacturing',43),
(181,'Furniture Manufacturing',44),
(182,'Other Manufacturing',44),
(183,'Electricity Generation',45),
(184,'Electricity Transmission',45),
(185,'Electricity Distribution',45),
(186,'On Selling Electricity and Electricity Market Operation',45),
(187,'Gas Supply',46),
(188,'Water Supply, Sewerage and Drainage Services',47),
(189,'Waste Collection Services',48),
(190,'Waste Treatment, Disposal and Remediation Services',48),
(191,'Residential Building Construction',49),
(192,'Non-Residential Building Construction',49),
(193,'Heavy and Civil Engineering Construction',50),
(194,'Land Development and Site Preparation Services',51),
(195,'Building Structure Services',51),
(196,'Building Installation Services',51),
(197,'Building Completion Services',51),
(198,'Other Construction Services',51),
(199,'Agricultural Product Wholesaling',52),
(200,'Mineral, Metal and Chemical Wholesaling',52),
(201,'Timber and Hardware Goods Wholesaling',52),
(202,'Specialised Industrial Machinery and Equipment Wholesaling',53),
(203,'Other Machinery and Equipment Wholesaling',53),
(204,'Motor Vehicle and Motor Vehicle Parts Wholesaling',54),
(205,'Grocery, Liquor and Tobacco Product Wholesaling',55),
(206,'Textile, Clothing and Footwear Wholesaling',56),
(207,'Pharmaceutical and Toiletry Goods Wholesaling',56),
(208,'Furniture, Floor Covering and Other Goods Wholesaling',56),
(209,'Commission-Based Wholesaling',57),
(210,'Motor Vehicle Retailing',58),
(211,'Motor Vehicle Parts and Tyre Retailing',58),
(212,'Fuel Retailing',59),
(213,'Supermarket and Grocery Stores',60),
(214,'Specialised Food Retailing',60),
(215,'Furniture, Floor Coverings, Houseware and Textile Goods Retailing',61),
(216,'Electrical and Electronic Goods Retailing',61),
(217,'Hardware, Building and Garden Supplies Retailing',61),
(218,'Recreational Goods Retailing',61),
(219,'Clothing, Footwear and Personal Accessory Retailing',61),
(220,'Department Stores',61),
(221,'Pharmaceutical and Other Store-Based Retailing',61),
(222,'Non-Store Retailing',62),
(223,'Retail Commission-Based Buying and/or Selling',62),
(224,'Accommodation',63),
(225,'Cafes, Restaurants and Takeaway Food Services',64),
(226,'Pubs, Taverns and Bars',64),
(227,'Clubs (Hospitality)',64),
(228,'Road Freight Transport',65),
(229,'Road Passenger Transport',65),
(230,'Rail Freight Transport',66),
(231,'Rail Passenger Transport',66),
(232,'Water Freight Transport',67),
(233,'Water Passenger Transport',67),
(234,'Air and Space Transport',68),
(235,'Scenic and Sightseeing Transport',69),
(236,'Pipeline and Other Transport',69),
(237,'Postal and Courier Pick-up and Delivery Services',70),
(238,'Airport Operations and Other Air Transport Support Services',71),
(239,'Other Transport Support Services',71),
(240,'Warehousing and Storage Services',72),
(241,'Newspaper, Periodical, Book and Directory Publishing',73),
(242,'Software Publishing',73),
(243,'Motion Picture and Video Activities',74),
(244,'Sound Recording and Music Publishing',74),
(245,'Radio Broadcasting',75),
(246,'Television Broadcasting',75),
(247,'Internet Publishing and Broadcasting',76),
(248,'Telecommunications Services',77),
(249,'Internet Service Providers and Web Search Portals',78),
(250,'Data Processing, Web Hosting and Electronic Information Storage Services',78),
(251,'Libraries and Archives',79),
(252,'Other Information Services',79),
(253,'Central Banking',80),
(254,'Depository Financial Intermediation',80),
(255,'Non-Depository Financing',80),
(256,'Financial Asset Investing',80),
(257,'Life Insurance',81),
(258,'Health and General Insurance',81),
(259,'Superannuation Funds',81),
(260,'Auxiliary Finance and Investment Services',82),
(261,'Auxiliary Insurance Services',82),
(262,'Motor Vehicle and Transport Equipment Rental and Hiring',83),
(263,'Farm Animal and Bloodstock Leasing',83),
(264,'Other Goods and Equipment Rental and Hiring',83),
(265,'Non-Financial Intangible Assets (Except Copyrights) Leasing',83),
(266,'Property Operators',84),
(267,'Real Estate Services',84),
(268,'Scientific Research Services',85),
(269,'Architectural, Engineering and Technical Services',85),
(270,'Legal and Accounting Services',85),
(271,'Advertising Services',85),
(272,'Market Research and Statistical Services',85),
(273,'Management and Related Consulting Services',85),
(274,'Veterinary Services',85),
(275,'Other Professional, Scientific and Technical Services',85),
(276,'Computer System Design and Related Services',86),
(277,'Employment Services',87),
(278,'Travel Agency and Tour Arrangement Services',87),
(279,'Other Administrative Services',87),
(280,'Building Cleaning, Pest Control and Gardening Services',88),
(281,'Packaging Services',88),
(282,'Central Government Administration',89),
(283,'State Government Administration',89),
(284,'Local Government Administration',89),
(285,'Justice',89),
(286,'Government Representation',89),
(287,'Defence',90),
(288,'Public Order and Safety Services',91),
(289,'Regulatory Services',91),
(290,'Preschool Education',92),
(291,'School Education',92),
(292,'Tertiary Education',93),
(293,'Adult, Community and Other Education',94),
(294,'Educational Support Services',94),
(295,'Hospitals',95),
(296,'Medical Services',96),
(297,'Pathology and Diagnostic Imaging Services',96),
(298,'Allied Health Services',96),
(299,'Other Health Care Services',96),
(300,'Residential Care Services',97),
(301,'Child Care Services',98),
(302,'Other Social Assistance Services',98),
(303,'Museum Operation',99),
(304,'Parks and Gardens Operations',99),
(305,'Creative and Performing Arts Activities',100),
(306,'Sports and Physical Recreation Activities',101),
(307,'Horse and Dog Racing Activities',101),
(308,'Amusement and Other Recreation Activities',101),
(309,'Gambling Activities',102),
(310,'Automotive Repair and Maintenance',103),
(311,'Machinery and Equipment Repair and Maintenance',103),
(312,'Other Repair and Maintenance',103),
(313,'Personal Care Services',104),
(314,'Funeral, Crematorium and Cemetery Services',104),
(315,'Other Personal Services',104),
(316,'Religious Services',104),
(317,'Civic, Professional and Other Interest Group Services',104),
(318,'Private Households Employing Staff and Undifferentiated Goods- and Service-Producing Activities of Households for Own Use',105),
(319,'Nursery Production (Under Cover)',106),
(320,'Nursery Production (Outdoors)',106),
(321,'Turf Growing',106),
(322,'Floriculture Production (Under Cover)',106),
(323,'Floriculture Production (Outdoors)',106),
(324,'Mushroom Growing',107),
(325,'Vegetable Growing (Under Cover)',107),
(326,'Vegetable Growing (Outdoors)',107),
(327,'Grape Growing',108),
(328,'Kiwifruit Growing',108),
(329,'Berry Fruit Growing',108),
(330,'Apple and Pear Growing',108),
(331,'Stone Fruit Growing',108),
(332,'Citrus Fruit Growing',108),
(333,'Olive Growing',108),
(334,'Other Fruit and Tree Nut Growing',108),
(335,'Sheep Farming (Specialised)',109),
(336,'Beef Cattle Farming (Specialised)',109),
(337,'Beef Cattle Feedlots (Specialised)',109),
(338,'Sheep-Beef Cattle Farming',109),
(339,'Grain-Sheep or Grain-Beef Cattle Farming',109),
(340,'Rice Growing',109),
(341,'Other Grain Growing',109),
(342,'Sugar Cane Growing',110),
(343,'Cotton Growing',110),
(344,'Other Crop Growing n.e.c.',110),
(345,'Dairy Cattle Farming',111),
(346,'Poultry Farming (Meat)',112),
(347,'Poultry Farming (Eggs)',112),
(348,'Deer Farming',113),
(349,'Horse Farming',114),
(350,'Pig Farming',114),
(351,'Beekeeping',114),
(352,'Other Livestock Farming n.e.c.',114),
(353,'Offshore Longline and Rack Aquaculture',115),
(354,'Offshore Caged Aquaculture',115),
(355,'Onshore Aquaculture',115),
(356,'Forestry',116),
(357,'Logging',116),
(358,'Rock Lobster and Crab Potting',117),
(359,'Prawn Fishing',117),
(360,'Line Fishing',117),
(361,'Fish Trawling, Seining and Netting',117),
(362,'Other Fishing',117),
(363,'Hunting and Trapping',118),
(364,'Forestry Support Services',119),
(365,'Cotton Ginning',120),
(366,'Shearing Services',120),
(367,'Other Agriculture and Fishing Support Services',120),
(368,'Coal Mining',121),
(369,'Oil and Gas Extraction',122),
(370,'Iron Ore Mining',123),
(371,'Bauxite Mining',123),
(372,'Copper Ore Mining',123),
(373,'Gold Ore Mining',123),
(374,'Mineral Sand Mining',123),
(375,'Nickel Ore Mining',123),
(376,'Silver-Lead-Zinc Ore Mining',123),
(377,'Other Metal Ore Mining',123),
(378,'Gravel and Sand Quarrying',124),
(379,'Other Construction Material Mining',124),
(380,'Other Non-Metallic Mineral Mining and Quarrying',125),
(381,'Petroleum Exploration',126),
(382,'Mineral Exploration',126),
(383,'Other Mining Support Services',126),
(384,'Meat Processing',127),
(385,'Poultry Processing',127),
(386,'Cured Meat and Smallgoods Manufacturing',127),
(387,'Seafood Processing',128),
(388,'Milk and Cream Processing',129),
(389,'Ice Cream Manufacturing',129),
(390,'Cheese and Other Dairy Product Manufacturing',129),
(391,'Fruit and Vegetable Processing',130),
(392,'Oil and Fat Manufacturing',131),
(393,'Grain Mill Product Manufacturing',132),
(394,'Cereal, Pasta and Baking Mix Manufacturing',132),
(395,'Bread Manufacturing (Factory based)',133),
(396,'Cake and Pastry Manufacturing (Factory based)',133),
(397,'Bakery Product Manufacturing (Non-factory based)',133),
(398,'Biscuit Manufacturing (Factory baseda)',133),
(399,'Sugar Manufacturing',134),
(400,'Confectionery Manufacturing',134),
(401,'Potato, Corn and Other Crisp Manufacturing',135),
(402,'Prepared Animal and Bird Feed Manufacturing',135),
(403,'Other Food Product Manufacturing n.e.c.',136),
(404,'Soft Drink, Cordial and Syrup Manufacturing',136),
(405,'Beer Manufacturing',136),
(406,'Spirit Manufacturing',136),
(407,'Wine and Other Alcoholic Beverage Manufacturing',137),
(408,'Cigarette and Tobacco Product Manufacturing',138),
(409,'Wool Scouring',139),
(410,'Natural Textile Manufacturing',139),
(411,'Synthetic Textile Manufacturing',139),
(412,'Leather Tanning, Fur Dressing and Leather Product Manufacturing',140),
(413,'Textile Floor Covering Manufacturing',140),
(414,'Rope, Cordage and Twine Manufacturing',141),
(415,'Cut and Sewn Textile Product Manufacturing',141),
(416,'Textile Finishing and Other Textile Product Manufacturing',141),
(417,'Knitted Product Manufacturing',142),
(418,'Clothing Manufacturing',143),
(419,'Footwear Manufacturing',143),
(420,'Log Sawmilling',144),
(421,'Wood Chipping',144),
(422,'Timber Resawing and Dressing',144),
(423,'Prefabricated Wooden Building Manufacturing',145),
(424,'Wooden Structural Fitting and Component Manufacturing',145),
(425,'Veneer and Plywood Manufacturing',145),
(426,'Reconstituted Wood Product Manufacturing',145),
(427,'Other Wood Product Manufacturing n.e.c.',145),
(428,'Pulp, Paper and Paperboard Manufacturing',146),
(429,'Corrugated Paperboard and Paperboard Container Manufacturing',147),
(430,'Paper Bag Manufacturing',147),
(431,'Paper Stationery Manufacturing',147),
(432,'Sanitary Paper Product Manufacturing',147),
(433,'Other Converted Paper Product Manufacturing',147),
(434,'Printing',148),
(435,'Printing Support Services',148),
(436,'Reproduction of Recorded Media',149),
(437,'Petroleum Refining and Petroleum Fuel Manufacturing',150),
(438,'Other Petroleum and Coal Product Manufacturing',150),
(439,'Industrial Gas Manufacturing',151),
(440,'Basic Organic Chemical Manufacturing',151),
(441,'Basic Inorganic Chemical Manufacturing',151),
(442,'Synthetic Resin and Synthetic Rubber Manufacturing',152),
(443,'Other Basic Polymer Manufacturing',152),
(444,'Fertiliser Manufacturing',153),
(445,'Pesticide Manufacturing',153),
(446,'Human Pharmaceutical and Medicinal Product Manufacturing',154),
(447,'Veterinary Pharmaceutical and Medicinal Product Manufacturing',154),
(448,'Cleaning Compound Manufacturing',155),
(449,'Cosmetic and Toiletry Preparation Manufacturing',155),
(450,'Photographic Chemical Product Manufacturing',156),
(451,'Explosive Manufacturing',156),
(452,'Other Basic Chemical Product Manufacturing n.e.c.',156),
(453,'Polymer Film and Sheet Packaging Material Manufacturing',157),
(454,'Rigid and Semi-Rigid Polymer Product Manufacturing',157),
(455,'Polymer Foam Product Manufacturing',157),
(456,'Tyre Manufacturing',157),
(457,'Adhesive Manufacturing',157),
(458,'Paint and Coatings Manufacturing',157),
(459,'Other Polymer Product Manufacturing',157),
(460,'Natural Rubber Product Manufacturing',158),
(461,'Glass and Glass Product Manufacturing',159),
(462,'Clay Brick Manufacturing',160),
(463,'Other Ceramic Product Manufacturing',160),
(464,'Cement and Lime Manufacturing',161),
(465,'Plaster Product Manufacturing',161),
(466,'Concrete Product Manufacturing',161),
(467,'Ready-Mixed Concrete Manufacturing',162),
(468,'Other Non-Metallic Mineral Product Manufacturing',163),
(469,'Iron Smelting and Steel Manufacturing',163),
(470,'Iron and Steel Casting',164),
(471,'Steel Pipe and Tube Manufacturing',164),
(472,'Alumina Production',165),
(473,'Aluminium Smelting',165),
(474,'Copper, Silver, Lead and Zinc Smelting and Refining',165),
(475,'Other Basic Non-Ferrous Metal Manufacturing',165),
(476,'Non-Ferrous Metal Casting',166),
(477,'Aluminium Rolling, Drawing, Extruding',166),
(478,'Other Basic Non-Ferrous Metal Product Manufacturing',167),
(479,'Iron and Steel Forging',167),
(480,'Structural Steel Fabricating',168),
(481,'Prefabricated Metal Building Manufacturing',168),
(482,'Architectural Aluminium Product Manufacturing',168),
(483,'Metal Roof and Guttering Manufacturing (except Aluminium)',169),
(484,'Other Structural Metal Product Manufacturing',169),
(485,'Boiler, Tank and Other Heavy Gauge Metal Container Manufacturing',169),
(486,'Sheet Metal Product Manufacturing (except Metal Structural and Container',170),
(487,'Spring and Wire Product Manufacturing',171),
(488,'Nut, Bolt, Screw and Rivet Manufacturing',171),
(489,'Metal Coating and Finishing',171),
(490,'Other Fabricated Metal Product Manufacturing n.e.c.',171),
(491,'Motor Vehicle Manufacturing',172),
(492,'Motor Vehicle Body and Trailer Manufacturing',172),
(493,'Automotive Electrical Component Manufacturing',172),
(494,'Other Motor Vehicle Parts Manufacturing',172),
(495,'Shipbuilding and Repair Services',173),
(496,'Boatbuilding and Repair Services',173),
(497,'Railway Rolling Stock Manufacturing and Repair Services',173),
(498,'Aircraft Manufacturing and Repair Services',173),
(499,'Other Transport Equipment Manufacturing n.e.c.',173),
(500,'Photographic, Optical and Ophthalmic Equipment Manufacturing',174),
(501,'Medical and Surgical Equipment Manufacturing',174),
(502,'Other Professional and Scientific Equipment Manufacturing',174),
(503,'Computer and Electronic Office Equipment Manufacturing',175),
(504,'Communication Equipment Manufacturing',175),
(505,'Other Electronic Equipment Manufacturing',175),
(506,'Electric Cable and Wire Manufacturing',176),
(507,'Electric Lighting Equipment Manufacturing',176),
(508,'Other Electrical Equipment Manufacturing',176),
(509,'Whiteware Appliance Manufacturing',177),
(510,'Other Domestic Appliance Manufacturing',177),
(511,'Pump and Compressor Manufacturing',178),
(512,'Fixed Space Heating, Cooling and Ventilation Equipment Manufacturing',178),
(513,'Agricultural Machinery and Equipment Manufacturing',179),
(514,'Mining and Construction Machinery Manufacturing',179),
(515,'Machine Tool and Parts Manufacturing',179),
(516,'Other Specialised Machinery and Equipment Manufacturing',179),
(517,'Lifting and Material Handling Equipment Manufacturing',180),
(518,'Other Machinery and Equipment Manufacturing n.e.c.',180),
(519,'Wooden Furniture and Upholstered Seat Manufacturing',181),
(520,'Metal Furniture Manufacturing',181),
(521,'Mattress Manufacturing',181),
(522,'Other Furniture Manufacturing',181),
(523,'Jewellery and Silverware Manufacturing',182),
(524,'Toy, Sporting and Recreational Product Manufacturing',182),
(525,'Other Manufacturing n.e.c.',182),
(526,'Fossil Fuel Electricity Generation',183),
(527,'Hydro-Electricity Generation',183),
(528,'Other Electricity Generation',183),
(529,'Electricity Transmission',184),
(530,'Electricity Distribution',185),
(531,'On Selling Electricity and Electricity Market Operation',186),
(532,'Gas Supply',187),
(533,'Water Supply',188),
(534,'Sewerage and Drainage Services',188),
(535,'Solid Waste Collection Services',189),
(536,'Other Waste Collection Services',189),
(537,'Waste Treatment and Disposal Services',190),
(538,'Waste Remediation and Materials Recovery Services',190),
(539,'House Construction',191),
(540,'Other Residential Building Construction',191),
(541,'Non-Residential Building Construction',192),
(542,'Road and Bridge Construction',193),
(543,'Other Heavy and Civil Engineering Construction',193),
(544,'Land Development and Subdivision',194),
(545,'Site Preparation Services',194),
(546,'Concreting Services',195),
(547,'Bricklaying Services',195),
(548,'Roofing Services',195),
(549,'Structural Steel Erection Services',195),
(550,'Plumbing Services',196),
(551,'Electrical Services',196),
(552,'Air Conditioning and Heating Services',196),
(553,'Fire and Security Alarm Installation Services',196),
(554,'Other Building Installation Services',196),
(555,'Plastering and Ceiling Services',197),
(556,'Carpentry Services',197),
(557,'Tiling and Carpeting Services',197),
(558,'Painting and Decorating Services',197),
(559,'Glazing Services',197),
(560,'Landscape Construction Services',198),
(561,'Hire of Construction Machinery with Operator',198),
(562,'Other Construction Services n.e.c.',198),
(563,'Wool Wholesaling',199),
(564,'Cereal Grain Wholesaling',199),
(565,'Other Agricultural Product Wholesaling',199),
(566,'Petroleum Product Wholesaling',200),
(567,'Metal and Mineral Wholesaling',200),
(568,'Industrial and Agricultural Chemical Product Wholesaling',200),
(569,'Timber Wholesaling',201),
(570,'Plumbing Goods Wholesaling',201),
(571,'Other Hardware Goods Wholesaling',201),
(572,'Agricultural and Construction Machinery Wholesaling',202),
(573,'Other Specialised Industrial Machinery and Equipment Wholesaling',202),
(574,'Professional and Scientific Goods Wholesaling',203),
(575,'Computer and Computer Peripheral Wholesaling',203),
(576,'Telecommunication Goods Wholesaling',203),
(577,'Other Electrical and Electronic Goods Wholesaling',203),
(578,'Other Machinery and Equipment Wholesaling n.e.c.',203),
(579,'Car Wholesaling',204),
(580,'Commercial Vehicle Wholesaling',204),
(581,'Trailer and Other Motor Vehicle Wholesaling',204),
(582,'Motor Vehicle New Parts Wholesaling',204),
(583,'Motor Vehicle Dismantling and Used Parts Wholesaling',204),
(584,'General Line Grocery Wholesaling',205),
(585,'Meat, Poultry and Smallgoods Wholesaling',205),
(586,'Dairy Produce Wholesaling',205),
(587,'Fish and Seafood Wholesaling',205),
(588,'Fruit and Vegetable Wholesaling',205),
(589,'Liquor and Tobacco Product Wholesaling',205),
(590,'Other Grocery Wholesaling',205),
(591,'Textile Product Wholesaling',206),
(592,'Clothing and Footwear Wholesaling',206),
(593,'Pharmaceutical and Toiletry Goods Wholesaling',207),
(594,'Furniture and Floor Covering Wholesaling',208),
(595,'Jewellery and Watch Wholesaling',208),
(596,'Kitchen and Diningware Wholesaling',208),
(597,'Toy and Sporting Goods Wholesaling',208),
(598,'Book and Magazine Wholesaling',208),
(599,'Paper Product Wholesaling',208),
(600,'Other Goods Wholesaling n.e.c.',208),
(601,'Commission-Based Wholesaling',209),
(602,'Car Retailing',210),
(603,'Motor Cycle Retailing',210),
(604,'Trailer and Other Motor Vehicle Retailing',210),
(605,'Motor Vehicle Parts Retailing',211),
(606,'Tyre Retailing',211),
(607,'Fuel Retailing',212),
(608,'Supermarket and Grocery Stores',213),
(609,'Fresh Meat, Fish and Poultry Retailing',214),
(610,'Fruit and Vegetable Retailing',214),
(611,'Liquor Retailing',214),
(612,'Other Specialised Food Retailing',214),
(613,'Furniture Retailing',215),
(614,'Floor Coverings Retailing',215),
(615,'Houseware Retailing',215),
(616,'Manchester and Other Textile Goods Retailing',215),
(617,'Electrical, Electronic and Gas Appliance Retailing',216),
(618,'Computer and Computer Peripheral Retailing',216),
(619,'Other Electrical and Electronic Goods Retailing',216),
(620,'Hardware and Building Supplies Retailing',217),
(621,'Garden Supplies Retailing',217),
(622,'Sport and Camping Equipment Retailing',218),
(623,'Entertainment Media Retailing',218),
(624,'Toy and Game Retailing',218),
(625,'Newspaper and Book Retailing',218),
(626,'Marine Equipment Retailing',218),
(627,'Clothing Retailing',219),
(628,'Footwear Retailing',219),
(629,'Watch and Jewellery Retailing',219),
(630,'Other Personal Accessory Retailing',219),
(631,'Department Stores\n',220),
(632,'Pharmaceutical, Cosmetic and Toiletry Goods Retailing',221),
(633,'Stationery Goods Retailing',221),
(634,'Antique and Used Goods Retailing',221),
(635,'Flower Retailing',221),
(636,'Other Store-Based Retailing n.e.c.',221),
(637,'Non-Store Retailing',222),
(638,'Retail Commission-Based Buying and/or Selling',223),
(639,'Accommodation',224),
(640,'Cafes and Restaurants',225),
(641,'Takeaway Food Services',225),
(642,'Catering Services',225),
(643,'Pubs, Taverns and Bars',226),
(644,'Clubs (Hospitality)',227),
(645,'Road Freight Transport',228),
(646,'Interurban and Rural Bus Transport',229),
(647,'Urban Bus Transport (Including Tramway)',229),
(648,'Taxi and Other Road Transport',229),
(649,'Rail Freight Transport',230),
(650,'Rail Passenger Transport',231),
(651,'Water Freight Transport',232),
(652,'Water Passenger Transport',233),
(653,'Air and Space Transport',234),
(654,'Scenic and Sightseeing Transport',235),
(655,'Pipeline Transport',236),
(656,'Other Transport n.e.c.',236),
(657,'Postal Services',237),
(658,'Courier Pick-up and Delivery Services',237),
(659,'Stevedoring Services',238),
(660,'Port and Water Transport Terminal Operations',238),
(661,'Other Water Transport Support Services',238),
(662,'Airport Operations and Other Air Transport Support Services',239),
(663,'Customs Agency Services',240),
(664,'Freight Forwarding Services',240),
(665,'Other Transport Support Services n.e.c.',240),
(666,'Grain Storage Services',241),
(667,'Other Warehousing and Storage Services',241),
(668,'Newspaper Publishing',241),
(669,'Magazine and Other Periodical Publishing',241),
(670,'Book Publishing',241),
(671,'Directory and Mailing List Publishing',241),
(672,'Other Publishing (except Software, Music and Internet)',241),
(673,'Software Publishing',242),
(674,'Motion Picture and Video Production',243),
(675,'Motion Picture and Video Distribution',243),
(676,'Motion Picture Exhibition',243),
(677,'Post-production Services and Other Motion Picture and Video Activities',243),
(678,'Music Publishing',244),
(679,'Music and Other Sound Recording Activities',245),
(680,'Radio Broadcasting',246),
(681,'Free-to-Air Television Broadcasting',247),
(682,'Cable and Other Subscription Broadcasting',247),
(683,'Internet Publishing and Broadcasting',248),
(684,'Wired Telecommunications Network Operation',249),
(685,'Other Telecommunications Network Operation',249),
(686,'Other Telecommunications Services',249),
(687,'Internet Service Providers and Web Search Portals',250),
(688,'Data Processing and Web Hosting Services',251),
(689,'Electronic Information Storage Services',251),
(690,'Libraries and Archives',252),
(691,'Other Information Services',252),
(692,'Central Banking',253),
(693,'Banking',254),
(694,'Building Society Operation',254),
(695,'Credit Union Operation',254),
(696,'Other Depository Financial Intermediation',254),
(697,'Non-Depository Financing',255),
(698,'Financial Asset Investing',256),
(699,'Life Insurance',257),
(700,'Health Insurance',258),
(701,'General Insurance',258),
(702,'Superannuation Funds',259),
(703,'Financial Asset Broking Services',260),
(704,'Other Auxiliary Finance and Investment Services',260),
(705,'Auxiliary Insurance Services',261),
(706,'Passenger Car Rental and Hiring',262),
(707,'Other Motor Vehicle and Transport Equipment Rental and Hiring',262),
(708,'Farm Animal and Bloodstock Leasing',263),
(709,'Heavy Machinery and Scaffolding Rental and Hiring',264),
(710,'Video and Other Electronic Media Rental and Hiring',264),
(711,'Other Goods and Equipment Rental and Hiring n.e.c.',264),
(712,'Non-Financial Intangible Assets (Except Copyrights) Leasing',265),
(713,'Architectural Services',266),
(714,'Surveying and Mapping Services',266),
(715,'Engineering Design and Engineering Consulting Services',266),
(716,'Other Specialised Design Services',266),
(717,'Scientific Testing and Analysis Services',266),
(718,'Legal Services',267),
(719,'Accounting Services',267),
(720,'Advertising Services',268),
(721,'Market Research and Statistical Services',269),
(722,'Corporate Head Office Management Services',270),
(723,'Management Advice and Related Consulting Services',270),
(724,'Veterinary Services',271),
(725,'Professional Photographic Services',272),
(726,'Other Professional, Scientific and Technical Services n.e.c.',272),
(727,'Computer System Design and Related Services',273),
(728,'Employment Placement and Recruitment Services',274),
(729,'Labour Supply Services',274),
(730,'Travel Agency and Tour Arrangement Services',275),
(731,'Office Administrative Services',276),
(732,'Document Preparation Services',276),
(733,'Credit Reporting and Debt Collection Services',276),
(734,'Call Centre Operation',276),
(735,'Other Administrative Services n.e.c.',276),
(736,'Building and Other Industrial Cleaning Services',277),
(737,'Building Pest Control Services',277),
(738,'Gardening Services',277),
(739,'Packaging Services',278),
(740,'Central Government Administration',279),
(741,'State Government Administration',280),
(742,'Local Government Administration',281),
(743,'Justice',282),
(744,'Domestic Government Representation',283),
(745,'Foreign Government Representation',283),
(746,'Defence',284),
(747,'Public Order and Safety Services',285),
(748,'Police Services',285),
(749,'Investigation and Security Services',285),
(750,'Fire Protection and Other Emergency Services',285),
(751,'Correctional and Detention Services',285),
(752,'Other Public Order and Safety Services',285),
(753,'Regulatory Services',286),
(754,'Preschool Education',287),
(755,'Primary Education',288),
(756,'Secondary Education',288),
(757,'Combined Primary and Secondary Education',288),
(758,'Special School Education',288),
(759,'Technical and Vocational Education and Training',289),
(760,'Higher Education',289),
(761,'Sports and Physical Recreation Instruction',290),
(762,'Arts Education',290),
(763,'Adult, Community and Other Education n.e.c.',290),
(764,'Educational Support Services',291),
(765,'Hospitals (Except Psychiatric Hospitals)',292),
(766,'Psychiatric Hospitals',292),
(767,'General Practice Medical Services',283),
(768,'Specialist Medical Services',283),
(769,'Pathology and Diagnostic Imaging Services',284),
(770,'Dental Services',285),
(771,'Optometry and Optical Dispensing',285),
(772,'Physiotherapy Services',285),
(773,'Chiropractic and Osteopathic Services',285),
(774,'Other Allied Health Services',285),
(775,'Ambulance Services',286),
(776,'Other Health Care Services n.e.c.',286),
(777,'Aged Care Residential Services',287),
(778,'Other Residential Care Services',287),
(779,'child care Services',288),
(780,'Social Assistance Services',289),
(781,'Museum Operation',290),
(782,'Zoological and Botanical Gardens Operation',291),
(783,'Nature Reserves and Conservation Parks Operation',291),
(784,'Performing Arts Operation',292),
(785,'Creative Artists, Musicians, Writers and Performers',292),
(786,'Performing Arts Venue Operation',292),
(787,'Health and Fitness Centres and Gymnasia Operation',293),
(788,'Sports and Physical Recreation Clubs and Sports Professionals',293),
(789,'Sports and Physical Recreation Venues, Grounds and Facilities Operation',293),
(790,'Sports and Physical Recreation Administrative Service',293),
(791,'Horse and Dog Racing Administration and Track Operation',294),
(792,'Other Horse and Dog Racing Activities',294),
(793,'Amusement Parks and Centres Operation',295),
(794,'Amusement and Other Recreational Activities n.e.c.',295),
(795,'Casino Operation',296),
(796,'Lottery Operation',296),
(797,'Other Gambling Activities',296),
(798,'Automotive Electrical Services',297),
(799,'Automotive Body, Paint and Interior Repair',297),
(800,'Other Automotive Repair and Maintenance',297),
(801,'Domestic Appliance Repair and Maintenance',298),
(802,'Electronic (except Domestic Appliance) and Precision Equipment Repair',298),
(803,'Other Machinery and Equipment Repair and Maintenance',298),
(804,'Clothing and Footwear Repair',299),
(805,'Other Repair and Maintenance n.e.c.',299),
(806,'Hairdressing and Beauty Services',300),
(807,'Diet and Weight Reduction Centre Operation',300),
(808,'Funeral, Crematorium and Cemetery Services',301),
(809,'Laundry and Dry-Cleaning Services',302),
(810,'Photographic Film Processing',302),
(811,'Parking Services',302),
(812,'Brothel Keeping and Prostitution Services',302),
(813,'Other Personal Services n.e.c.',302),
(814,'Religious Services',303),
(815,'Business and Professional Association Services',304),
(816,'Labour Association Services',304),
(817,'Other Interest Group Services n.e.c.',304),
(818,'Private Households Employing Staff',305),
(819,'Undifferentiated Goods-Producing Activities of Private Households for Own Use',305),
(820,'Undifferentiated Service-Producing Activities of Private Households for Own Use',305);

/*Table structure for table `company_information` */

DROP TABLE IF EXISTS `company_information`;

CREATE TABLE `company_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` int(4) DEFAULT NULL,
  `entity_name` varchar(50) DEFAULT NULL,
  `entity_type` varchar(100) DEFAULT NULL,
  `abn` varchar(25) DEFAULT NULL,
  `can` varchar(25) DEFAULT NULL,
  `rbn` varchar(25) DEFAULT NULL,
  `equity` varchar(25) DEFAULT NULL,
  `date_established` date DEFAULT NULL,
  `confidentiality` varchar(30) DEFAULT NULL,
  `portfolio` varchar(25) DEFAULT NULL,
  `unit_no` varchar(10) DEFAULT NULL,
  `street_no` varchar(10) DEFAULT NULL,
  `street_name` varchar(100) DEFAULT NULL,
  `suburb` varchar(10) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pose_code` varchar(50) DEFAULT NULL,
  `contact_type_1` varchar(25) DEFAULT NULL,
  `contact_type_2` varchar(25) DEFAULT NULL,
  `anzic_division` varchar(30) DEFAULT NULL,
  `anzic_sub_division` varchar(30) DEFAULT NULL,
  `anzic_group` varchar(30) DEFAULT NULL,
  `anzic_class` varchar(30) DEFAULT NULL,
  `primary_division` varchar(30) DEFAULT NULL,
  `primary_sub_division` varchar(30) DEFAULT NULL,
  `primary_group` varchar(30) DEFAULT NULL,
  `primary_class` varchar(30) DEFAULT NULL,
  `secondary_division` varchar(30) DEFAULT NULL,
  `secondary_sub_division` varchar(30) DEFAULT NULL,
  `secondary_group` varchar(30) DEFAULT NULL,
  `secondary_class` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `CompanyName` (`entity_name`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `company_information` */

insert  into `company_information`(`id`,`country`,`entity_name`,`entity_type`,`abn`,`can`,`rbn`,`equity`,`date_established`,`confidentiality`,`portfolio`,`unit_no`,`street_no`,`street_name`,`suburb`,`state`,`pose_code`,`contact_type_1`,`contact_type_2`,`anzic_division`,`anzic_sub_division`,`anzic_group`,`anzic_class`,`primary_division`,`primary_sub_division`,`primary_group`,`primary_class`,`secondary_division`,`secondary_sub_division`,`secondary_group`,`secondary_class`) values 
(1,2,'Shanila and Sons','1','1','1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(2,3,NULL,'aggregated','qwertyui','qwertyuio','qwertyuikl','qwertyui',NULL,'public',NULL,'dkfjogidfn','kndfijgn','MDFKNG','KDMFHIG','dfkngj',NULL,'mobile','mobile','14',NULL,'281','742','15','91','289','760',NULL,NULL,NULL,'792'),
(3,5,NULL,'aggregated','qwertyui','qwertyuio','qwertyuikl','qwertyui',NULL,'public',NULL,'dkfjogidfn','kndfijgn','MDFKNG','KDMFHIG','dfkngj',NULL,'mobile','mobile','14',NULL,'281','742','15','91','289','760',NULL,NULL,NULL,'792'),
(4,1,'qwertyuio','aggregated','qwertyui','qwertyuio','qwertyuikl','qwertyui','2019-10-09','public','1','dkfjogidfn','kndfijgn','MDFKNG','KDMFHIG','dfkngj','1234567','mobile','mobile','14',NULL,'281','742','15','91','289','760',NULL,'94','294','792'),
(5,9,'qwertyuio','aggregated','qwertyui','qwertyuio','qwertyuikl','qwertyui','2019-10-09','public','1','dkfjogidfn','kndfijgn','MDFKNG','KDMFHIG','dfkngj','1234567','mobile','mobile','14',NULL,'281','742','15','91','289','760',NULL,'94','294','792'),
(6,2,'qweqwe','association','wefkjiwejf','kseiofj','knswef','kndjgh','2018-09-18','asic','0','rjgklng','nkgjnkdfng','lkfjnwnef','hdfgueporg','skfingjd erng8m','iwekfmifh','mobile','land_line','5',NULL,'196','550','5','51','196','550',NULL,NULL,NULL,'809'),
(7,4,'aasaa','aggregated','','asasas','','','0000-00-00','public',NULL,'','','','','','','land_line','land_line','17',NULL,'298','801','17','96','299','804','17','98','302','809'),
(8,1,'aasaa','aggregated','','asasas','','','0000-00-00','public',NULL,'','','','','','','land_line','land_line','17',NULL,'298','801','17','96','299','804','17','98','302','809'),
(9,2,'okwef','aggregated','','wkremgf','','','0000-00-00','public',NULL,'','','','','','','land_line','land_line','15','91','289','759','12','84','267','718','8','64','225','809'),
(10,7,'asdasdasd','aggregated','sdfsd','dgdsfgd','dasdsd','sdfsdfs','2019-10-16','public','1','','','','werwerwer','','','land_line','mobile','2','91','289','801','5','84','267','718','10','64','225','809'),
(11,7,'dfvsdfsdf','aggregated','','sdfsdf','','','2019-10-15','public',NULL,'','','','','','','land_line','land_line','1','91','289','801','5',NULL,NULL,NULL,'6',NULL,NULL,NULL),
(12,1,'krgk','aggregated','','moh','','','0000-00-00','public','1','','','','','','','land_line','land_line','1','1','1','1','1','1','1','1','1','1','1','1'),
(13,7,'asdasdasd','aggregated','sdfsd','dgdsfgd','dasdsd','sdfsdfs','2019-10-16','public','1','','','','','','','land_line','mobile','2','91','289','801','5','84','267','718','10','64','225','809'),
(14,7,'asdasdasd','aggregated','sdfsd','dgdsfgd','dasdsd','sdfsdfs','2019-10-16','public','1','','','','','','','land_line','mobile','2','91','289','801','5','84','267','718','10','64','225','809'),
(15,7,'asdasdasd','aggregated','sdfsd','dgdsfgd','dasdsd','sdfsdfs','2019-10-16','public','1','','','','asdasdasda','','','land_line','mobile','1','1','1','1','1','1','1','1','1','1','1','1');

/*Table structure for table `quantitave_input` */

DROP TABLE IF EXISTS `quantitave_input`;

CREATE TABLE `quantitave_input` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `abn` int(11) DEFAULT NULL,
  `acn` int(11) DEFAULT NULL,
  `company_name` varchar(50) NOT NULL,
  `rounding` char(10) NOT NULL,
  `base_currency` char(10) NOT NULL,
  `quality` char(10) NOT NULL,
  `reporting_period_months` char(10) NOT NULL,
  `scope` char(10) NOT NULL,
  `confidentiality_record` char(10) NOT NULL,
  `financial_year` char(10) NOT NULL,
  `month` char(10) NOT NULL,
  `timstamp` datetime NOT NULL,
  `sales` decimal(10,0) NOT NULL,
  `cost_of_sales` decimal(10,2) NOT NULL,
  `gross_profit` decimal(10,2) NOT NULL,
  `other_income` decimal(10,2) NOT NULL,
  `depreciation` decimal(10,2) NOT NULL,
  `amortisation` decimal(10,2) NOT NULL,
  `impairment` decimal(10,2) NOT NULL,
  `interest_expense_gross` decimal(10,2) NOT NULL,
  `operating_lease_expense` decimal(10,2) NOT NULL,
  `finance_lease_hire_purchase_charges` decimal(10,2) NOT NULL,
  `non_recurring_gains_losses` decimal(10,2) NOT NULL,
  `other_gains_losses` decimal(10,2) NOT NULL,
  `other_expenses` decimal(10,2) NOT NULL,
  `ebit` decimal(10,2) NOT NULL,
  `ebitda` decimal(10,2) NOT NULL,
  `normalised_ebitda` decimal(10,2) NOT NULL,
  `profit_before_tax` decimal(10,2) NOT NULL,
  `profit_before_tax_after_abnormals` decimal(10,2) NOT NULL,
  `tax_benefit_expense` decimal(10,2) NOT NULL,
  `profit_after_tax` decimal(10,2) NOT NULL,
  `distribution_ordividends` decimal(10,2) NOT NULL,
  `other_post_tax_items_gains_losses` decimal(10,2) NOT NULL,
  `profit_after_tax_distribution` decimal(10,2) NOT NULL,
  `assets` decimal(10,2) NOT NULL,
  `cash` decimal(10,2) NOT NULL,
  `trade_debtors` decimal(10,2) NOT NULL,
  `total_inventories` decimal(10,2) NOT NULL,
  `loans_to_related_parties` decimal(10,2) NOT NULL,
  `other_current_assets` decimal(10,2) NOT NULL,
  `total_current_assets` decimal(10,2) NOT NULL,
  `fixed_assets` decimal(10,2) NOT NULL,
  `net_intangibles` decimal(10,2) NOT NULL,
  `other_non_current_assets` decimal(10,2) NOT NULL,
  `trade_creditors` decimal(10,2) NOT NULL,
  `interest_bearing_debt` decimal(10,2) NOT NULL,
  `loan_from_related_parties` decimal(10,2) NOT NULL,
  `other_current_liabilities` decimal(10,2) NOT NULL,
  `other_non_current_liabilities` decimal(10,2) NOT NULL,
  `share_capital` decimal(10,2) NOT NULL,
  `preference_shares` decimal(10,2) NOT NULL,
  `treasury_shares` decimal(10,2) NOT NULL,
  `equity_ownerships` decimal(10,2) NOT NULL,
  `total_reserves` decimal(10,2) NOT NULL,
  `retained_earnings` decimal(10,2) NOT NULL,
  `minority_interest` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `net_operating_cashflow` decimal(10,2) NOT NULL,
  `contingent_liabilities` decimal(10,2) NOT NULL,
  `other_commitments` decimal(10,2) NOT NULL,
  `total_operating_lease_outstanding` decimal(10,2) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2342316 DEFAULT CHARSET=latin1;

/*Data for the table `quantitave_input` */

insert  into `quantitave_input`(`record_id`,`abn`,`acn`,`company_name`,`rounding`,`base_currency`,`quality`,`reporting_period_months`,`scope`,`confidentiality_record`,`financial_year`,`month`,`timstamp`,`sales`,`cost_of_sales`,`gross_profit`,`other_income`,`depreciation`,`amortisation`,`impairment`,`interest_expense_gross`,`operating_lease_expense`,`finance_lease_hire_purchase_charges`,`non_recurring_gains_losses`,`other_gains_losses`,`other_expenses`,`ebit`,`ebitda`,`normalised_ebitda`,`profit_before_tax`,`profit_before_tax_after_abnormals`,`tax_benefit_expense`,`profit_after_tax`,`distribution_ordividends`,`other_post_tax_items_gains_losses`,`profit_after_tax_distribution`,`assets`,`cash`,`trade_debtors`,`total_inventories`,`loans_to_related_parties`,`other_current_assets`,`total_current_assets`,`fixed_assets`,`net_intangibles`,`other_non_current_assets`,`trade_creditors`,`interest_bearing_debt`,`loan_from_related_parties`,`other_current_liabilities`,`other_non_current_liabilities`,`share_capital`,`preference_shares`,`treasury_shares`,`equity_ownerships`,`total_reserves`,`retained_earnings`,`minority_interest`,`balance`,`net_operating_cashflow`,`contingent_liabilities`,`other_commitments`,`total_operating_lease_outstanding`,`user_id`) values 
(1,1,1,'Shanila and Sons','1','LKR','1','1','1','1','1','1','2000-01-01 00:00:00',1,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1),
(2,1,1,'Shanila and Sons','1','LKR','1','1','1','1','1','1','2000-01-01 00:00:00',1,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1),
(2343,346547567,234523564,'Shanila and Sons','1','dfb','fdgv','4','dfbd','cfvb','2013','4','0000-00-00 00:00:00',1,12.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,0.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1),
(23413,346547567,234523564,'Shanila and Sons','1','dfb','fdgv','4','dfbd','cfvb','2013','4','0000-00-00 00:00:00',1,12.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,0.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1),
(234213,346547567,234523564,'Shanila and Sons','1','dfb','fdgv','4','dfbd','cfvb','2013','4','0000-00-00 00:00:00',1,12.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,0.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1),
(2342313,346547567,234523564,'Shanila and Sons','1','dfb','fdgv','4','dfbd','cfvb','2013','4','0000-00-00 00:00:00',1,12.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,10.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,0.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1),
(2342314,1,1,'Shanila and Sons','1','LKR','1','1','1','1','1','1','2000-01-01 00:00:00',1,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1),
(2342315,1,1,'Shanila and Sons','1','LKR','1','1','1','1','1','1','2000-01-01 00:00:00',1,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1.00,1);

/*Table structure for table `report_repository` */

DROP TABLE IF EXISTS `report_repository`;

CREATE TABLE `report_repository` (
  `report_id` int(11) NOT NULL,
  `report_code` char(20) NOT NULL,
  `report_type` char(10) NOT NULL,
  `report_year` int(4) NOT NULL,
  `report_title` varchar(50) NOT NULL,
  `report_url` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `report_repository` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email_id` varchar(20) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `permission_id` int(11) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `telephone` int(15) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `forget_password_code` varchar(250) DEFAULT NULL,
  `first_loging` int(2) DEFAULT 1,
  PRIMARY KEY (`user_id`,`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='user table';

/*Data for the table `user` */

insert  into `user`(`user_id`,`user_name`,`firstname`,`lastname`,`email_id`,`designation`,`permission_id`,`address`,`telephone`,`password`,`email`,`forget_password_code`,`first_loging`) values 
(1,'sha','123123','Pathirana','sdss','CEO',1,'address',123456789,'$2y$10$WL8K5bSDlc9K7DyEmhnf5ODpcmDxuNSjjcxrqZhUXtyK5QSNCKdp2',NULL,'634ce7ce900c69940392039639232c99',0),
(3,'abc','abcabc','Meka hari','','junior_analyst',3,'test',1234567890,'$2y$10$DMvbIdcWeHu2TpDY7NmDUO8//QdaJa7yhDRxykdiU5gnnlX2lKBHW','roo@dksdfmskf.cos','b2b9554b258addf5c1cb35d7c253861c',1),
(6,'roosri','Chalinga','hettiarachchi',NULL,'senior_analyst',2,'qwertyuiop[asdfghjkl;zxcvbnm,.',123456789,'$2y$10$QSYKcKu5.K0qBsE23C5gDeP8QgwTy14/v1yhn/c4TDk.oeFy8F3w6','roosrichalingahettiarachchi@gmail.com','1c4a6d577f5f2dee932166c25a550615',1);

/*Table structure for table `user_permission` */

DROP TABLE IF EXISTS `user_permission`;

CREATE TABLE `user_permission` (
  `permission_set_id` int(11) NOT NULL,
  `permission_set_name` varchar(50) DEFAULT NULL,
  `related_table_id` int(11) DEFAULT NULL,
  `read_permission` tinyint(1) DEFAULT 0,
  `write_permission` tinyint(1) DEFAULT 0,
  `delete_permission` tinyint(1) DEFAULT 0,
  `insert_permission` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`permission_set_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_permission` */

insert  into `user_permission`(`permission_set_id`,`permission_set_name`,`related_table_id`,`read_permission`,`write_permission`,`delete_permission`,`insert_permission`) values 
(1,'manager',0,0,0,0,0),
(2,'admin',1,1,1,0,1),
(3,'analyst',NULL,1,1,1,0);

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `permission_set_id` int(11) NOT NULL,
  `role_name` varchar(45) NOT NULL,
  PRIMARY KEY (`role_id`,`permission_set_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_role` */

insert  into `user_role`(`role_id`,`permission_set_id`,`role_name`) values 
(1,1,'Test Role');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
