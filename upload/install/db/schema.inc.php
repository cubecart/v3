<?php
if(isset($_POST['dropTables']) && $_POST['dropTables']==1){
$db->misc("DROP TABLE IF EXISTS `".$_POST['dbprefix']."CubeCart_cats_lang`, `".$_POST['dbprefix']."CubeCart_Downloads`, `".$_POST['dbprefix']."CubeCart_Modules`, `".$_POST['dbprefix']."CubeCart_admin_permissions`, `".$_POST['dbprefix']."CubeCart_admin_sections`, `".$_POST['dbprefix']."CubeCart_admin_sessions`, `".$_POST['dbprefix']."CubeCart_admin_users`, `".$_POST['dbprefix']."CubeCart_category`, `".$_POST['dbprefix']."CubeCart_cats_idx`, `".$_POST['dbprefix']."CubeCart_config`, `".$_POST['dbprefix']."CubeCart_currencies`, `".$_POST['dbprefix']."CubeCart_customer`, `".$_POST['dbprefix']."CubeCart_docs`, `".$_POST['dbprefix']."CubeCart_docs_lang`, `".$_POST['dbprefix']."CubeCart_img_idx`, `".$_POST['dbprefix']."CubeCart_inv_lang`, `".$_POST['dbprefix']."CubeCart_inventory`, `".$_POST['dbprefix']."CubeCart_iso_counties`, `".$_POST['dbprefix']."CubeCart_iso_countries`, `".$_POST['dbprefix']."CubeCart_options_bot`, `".$_POST['dbprefix']."CubeCart_options_mid`, `".$_POST['dbprefix']."CubeCart_options_top`, `".$_POST['dbprefix']."CubeCart_order_inv`, `".$_POST['dbprefix']."CubeCart_order_state`, `".$_POST['dbprefix']."CubeCart_order_sum`, `".$_POST['dbprefix']."CubeCart_search`, `".$_POST['dbprefix']."CubeCart_sessions`, `".$_POST['dbprefix']."CubeCart_taxes`, `".$_POST['dbprefix']."CubeCart_SpamBot`, `".$_POST['dbprefix']."CubeCart_blocker`;");
}

//$defCharset = " DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
$defCharset = "";

$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_SpamBot` (
			`uniqueId` varchar(32) NOT NULL, 
			`spamCode` varchar(5) NOT NULL, 
			`userIp` varchar(15) NOT NULL,
			`time` int(10) NOT NULL default '0', 
			PRIMARY KEY  (`uniqueId`), 
			UNIQUE KEY `uniqueId` (`uniqueId`) 
			) ENGINE=MyISAM".$defCharset.";");
			
			
$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_blocker` (
		  `id` int(11) NOT NULL auto_increment,
		  `browser` text NOT NULL,
		  `ip` varchar(15) NOT NULL,
		  `username` varchar(50) NOT NULL,
		  `blockTime` int(10) NOT NULL default '0',
		  `blockLevel` int(1) NOT NULL default '0',
		  `loc` char(1) NOT NULL,
		  `lastTime` int(10) NOT NULL,
		  KEY `id` (`id`)
		) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_config` (
	  `name` varchar(100) NOT NULL default '',
	  `array` text NOT NULL,
	  KEY `name` (`name`)
	) ENGINE=MyISAM".$defCharset.";");
	
		if(writeDbConf($config, "config", $config, $output = FALSE) == TRUE){
			
			$errorWriting = FALSE;
	
		} else {
	
			$errorWriting = TRUE;
			$stepBack = 3;
	
		}
	
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_config` VALUES ('Free_Shipping', 'a:1:{s:8:\"c3RhdHVz\";s:4:\"MQ==\";}');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_config` VALUES ('Print_Order_Form', 'a:15:{s:8:\"YWNObw==\";s:12:\"eHh4eHh4eHg=\";s:12:\"YWNjTmFtZQ==\";s:16:\"Q29tcGFueSBOYW1l\";s:12:\"YWRkcmVzcw==\";s:88:\"QWRkcmVzcyBMaW5lIDEKQWRkcmVzcyBMaW5lIDIKQWRkcmVzcyBMaW5lIDMKQWRkcmVzcyBMaW5lIDQKeHh4eHh4\";s:8:\"YmFuaw==\";s:4:\"MQ==\";s:12:\"YmFua05hbWU=\";s:20:\"WW91ciBCYW5rIFBsYw==\";s:8:\"Y2FyZA==\";s:4:\"MQ==\";s:8:\"Y2FyZHM=\";s:68:\"TWFzdGVyY2FyZCwgVmlzYSwgU3dpdGNoLCBNYWVzdHJvLCBBbWVyaWNhbiBFeHByZXNz\";s:8:\"Y2hlY2s=\";s:4:\"MQ==\";s:8:\"ZGVzYw==\";s:24:\"UG9zdGFsIE9yZGVyIEZvcm0=\";s:8:\"bm90ZXM=\";s:60:\"V2UgY2FuIG9ubHkgYWNjZXB0IHBheW1lbnRzIGluIHh4eCBjdXJyZW5jeS4=\";s:12:\"cGF5YWJsZVRv\";s:24:\"Q29tcGFueSBOYW1lIEx0ZA==\";s:12:\"c29ydENvZGU=\";s:12:\"eHgteHgteHg=\";s:8:\"c3RhdHVz\";s:4:\"MQ==\";s:12:\"ZGVmYXVsdA==\";s:4:\"MQ==\";s:12:\"c3dpZnRDb2Rl\";s:12:\"eHh4eHh4eHg=\";}');");
        
		
	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_cats_lang` (
  `id` int(11) NOT NULL auto_increment,
  `cat_master_id` int(11) NOT NULL default '0',
  `cat_lang` varchar(20) NOT NULL default '',
  `cat_name` varchar(255) NOT NULL default '',
  KEY `id` (`id`)
) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1 ;");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_Downloads` (
	  `id` int(11) NOT NULL auto_increment,
	  `customerId` int(11) NOT NULL default '0',
	  `cart_order_id` varchar(32) NOT NULL default '',
	  `noDownloads` int(11) NOT NULL default '0',
	  `expire` int(11) NOT NULL default '0',
	  `productId` int(11) NOT NULL default '0',
	  `accessKey` varchar(10) NOT NULL default '',
	  KEY `id` (`id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_Modules` (
	  `moduleId` int(11) NOT NULL auto_increment,
	  `module` varchar(10) NOT NULL default '',
	  `folder` varchar(30) NOT NULL default '',
	  `status` smallint(1) NOT NULL default '0',
	  `default` int(1) NOT NULL default '0',
	  KEY `moduleId` (`moduleId`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_Modules` VALUES (1, 'shipping', 'Free_Shipping', 1, 1);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_Modules` VALUES (2, 'gateway', 'Print_Order_Form', 1, 1);");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_admin_permissions` (
	  `permissionId` int(11) NOT NULL auto_increment,
	  `sectId` int(11) NOT NULL default '0',
	  `adminId` int(11) NOT NULL default '0',
	  `read` int(11) NOT NULL default '0',
	  `write` int(11) NOT NULL default '0',
	  `edit` int(11) NOT NULL default '0',
	  `delete` int(11) NOT NULL default '0',
	  PRIMARY KEY  (`permissionId`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");


	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_admin_sections` (
	  `sectId` int(11) NOT NULL auto_increment,
	  `name` varchar(255) NOT NULL default '',
	  `description` text NOT NULL,
	  KEY `sectId` (`sectId`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");


	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_admin_sections` VALUES (1, 'users', 'For the administration of admin users and their permissions.');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_admin_sections` VALUES (2, 'products', 'For the administration of products.');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_admin_sections` VALUES (3, 'categories', 'For the administration of categories.');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_admin_sections` VALUES (4, 'documents', 'For the administration of site documents.');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_admin_sections` VALUES (5, 'customers', 'For the administration of customers details.');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_admin_sections` VALUES (6, 'shipping', 'For the administration of shipping methods.');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_admin_sections` VALUES (7, 'filemanager', 'For the administration of the website images.');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_admin_sections` VALUES (8, 'statistics', 'This section displays store statistics.');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_admin_sections` VALUES (9, 'settings', 'For the administration of the code store settings.');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_admin_sections` VALUES (10, 'orders', 'Access rights for the orders section.');");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_admin_sessions` (
	  `loginId` int(11) NOT NULL auto_increment,
	  `username` varchar(255) NOT NULL default '',
	  `time` int(11) NOT NULL default '0',
	  `ipAddress` varchar(20) NOT NULL default '',
	  `success` int(11) NOT NULL default '0',
	  KEY `loginId` (`loginId`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	
	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_admin_users` (
	  `adminId` int(11) NOT NULL auto_increment,
	  `name` varchar(255) NOT NULL default '',
	  `username` varchar(255) NOT NULL default '',
	  `password` varchar(32) NOT NULL default '',
	  `email` varchar(255) NOT NULL default '',
	  `noLogins` int(11) NOT NULL default '0',
	  `isSuper` int(11) NOT NULL default '0',
	  `notes` text,
	  `failLevel` int(1) NOT NULL default '0',
	  `blockTime` int(10) NOT NULL default '0',
	  `lastTime` int(10) NOT NULL default '0',
	  KEY `adminId` (`adminId`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");


	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_admin_users` VALUES (1, '".$_POST['fullName']."', '".$_POST['username']."', '".md5($_POST['pass'])."', '".$_POST['email']."', 1, 1, 'This user was setup during installation.',0,0,0);");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_category` (
	  `cat_name` text NOT NULL,
	  `cat_id` int(16) NOT NULL auto_increment,
	  `cat_father_id` int(16) NOT NULL default '0',
	  `cat_image` varchar(250) NOT NULL default '',
	  `per_ship` decimal(20,2) NOT NULL default '0.00',
	  `item_ship` decimal(20,2) NOT NULL default '0.00',
	  `item_int_ship` decimal(20,2) NOT NULL default '0.00',
	  `per_int_ship` decimal(20,2) NOT NULL default '0.00',
	  `noProducts` int(11) default '0',
	  PRIMARY KEY  (`cat_id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_category` VALUES ('Test Category', 1, 0, '', 0.00, 0.00, 0.00, 0.00, 1);");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_cats_idx` (
	  `id` int(11) NOT NULL auto_increment,
	  `cat_id` int(11) NOT NULL default '0',
	  `productId` int(11) NOT NULL default '0',
	  KEY `id` (`id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_cats_idx` VALUES (1, 1, 1);");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_currencies` (
	  `currencyId` int(11) NOT NULL auto_increment,
	  `name` varchar(255) NOT NULL default '',
	  `code` varchar(5) NOT NULL default '',
	  `symbolLeft` varchar(10) default NULL,
	  `symbolRight` varchar(10) default NULL,
	  `value` decimal(10,5) NOT NULL default '0.00000',
	  `decimalPlaces` int(11) NOT NULL default '0',
	  `lastUpdated` int(10) NOT NULL default '0',
	  `active` int(1) NOT NULL default '0',
	  KEY `curencyId` (`currencyId`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");


	if($_POST['installCountry']=="US"){

	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (1, 'British Pounds', 'GBP', '£', '', 0.52778, 2, 1111670592, 1);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (2, 'US Dollars', 'USD', '$', '', 1.00000, 2, 1112128377, 1);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (3, 'Euro', 'EUR', '€', '', 0.76626, 2, 1111669701, 1);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (4, 'Japanese Yen', 'JPY', '¥', '', 105.53000, 0, 1111669706, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (5, 'Canadian Dollars', 'CAD', '$', '', 1.23062, 2, 1108994873, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (6, 'Australian Dollars', 'AUD', '$', '', 1.26895, 2, 1108994869, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (7, 'Swiss Francs', 'CHF', 'CHF', '', 1.18312, 2, 1108994881, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (8, 'Russian Rubles', 'RUB', '', 'R', 27.94500, 0, 1108994885, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (9, 'Chinese Yuan', 'CNY', '', 'Yuan', 8.27650, 2, 1108994875, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (10, 'South African Rand', 'ZAR', 'R', '', 5.93606, 0, 1108994883, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (11, 'Mexican Peso', 'MXN', '', 'MXP', 11.05500, 2, 1108994888, 0);");
	
	} elseif($_POST['installCountry']=="UK"){
	
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (1, 'British Pounds', 'GBP', '£', '', 1, 2, 1123759040, 1);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (2, 'US Dollars', 'USD', '$', '', 1.80209, 2, 1123759040, 1);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (3, 'Euro', 'EUR', '€', '', 1.45161, 2, 1123759040, 1);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (4, 'Japanese Yen', 'JPY', '¥', '', 198.955, 0, 1123759040, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (5, 'Canadian Dollars', 'CAD', '$', '', 2.17642, 2, 1123759040, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (6, 'Australian Dollars', 'AUD', '$', '', 2.33844, 2, 1123759040, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (7, 'Swiss Francs', 'CHF', 'CHF', '', 2.25431, 2, 1123759040, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (8, 'Russian Rubles', 'RUB', '', 'R', 51.1162, 0, 1123759040, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (9, 'Chinese Yuan', 'CNY', '', 'Yuan', 14.5977, 2, 1123759040, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (10, 'South African Rand', 'ZAR', 'R', '', 11.5311, 0, 1123759040, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (11, 'Mexican Peso', 'MXN', '', 'MXP', 19.0632, 2, 1123759040, 0);");
	
	} elseif($_POST['installCountry']=="EU"){
	
$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (1, 'British Pounds', 'GBP', '£', '', 0.680478, 2, 1128338492, 1);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (2, 'US Dollars', 'USD', '$', '', 1.19241, 2, 1128338492, 1);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (3, 'Euro', 'EUR', '€', '', 1, 2, 1128338492, 1);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (4, 'Japanese Yen', 'JPY', '¥', '', 135.975, 0, 1128338492, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (5, 'Canadian Dollars', 'CAD', '$', '', 1.38706, 2, 1128338492, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (6, 'Australian Dollars', 'AUD', '$', '', 1.56630, 2, 1128338492, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (7, 'Swiss Francs', 'CHF', 'CHF', '', 1.55269, 2, 1128338492, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (8, 'Russian Rubles', 'RUB', '', 'R', 34.1540, 0, 1128338492, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (9, 'Chinese Yuan', 'CNY', '', 'Yuan', 9.64681, 2, 1128338492, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (10, 'South African Rand', 'ZAR', 'R', '', 7.65157, 0, 1128338492, 0);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_currencies` VALUES (11, 'Mexican Peso', 'MXN', '', 'MXP', 11.05500, 2, 1128338492, 0);");
	
	}

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_customer` (
	  `email` varchar(50) NOT NULL default '',
	  `password` varchar(100) NOT NULL default '',
	  `title` varchar(10) default NULL,
	  `firstName` varchar(255) NOT NULL default '',
	  `lastName` varchar(255) NOT NULL default '',
	  `add_1` varchar(100) NOT NULL default '',
	  `add_2` varchar(100) NOT NULL default '',
	  `town` varchar(100) NOT NULL default '',
	  `county` varchar(100) NOT NULL default '',
	  `zoneId` int(3) NOT NULL default '0',
	  `postcode` varchar(15) NOT NULL default '',
	  `country` char(3) NOT NULL default '',
	  `phone` varchar(20) NOT NULL default '',
	  `mobile` varchar(50) default NULL,
	  `customer_id` int(11) NOT NULL auto_increment,
	  `regTime` int(10) NOT NULL default '0',
	  `ipAddress` varchar(30) NOT NULL default '',
	  `noOrders` int(11) default '0',
	  `optIn1st` int(11) NOT NULL default '0',
	  `htmlEmail` int(11) NOT NULL default '1',
	  `type` int(11) default '0',
	  PRIMARY KEY  (`customer_id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_docs` (
	  `doc_name` varchar(255) NOT NULL default '',
	  `doc_content` text NOT NULL,
	  `doc_id` int(16) NOT NULL auto_increment,
	  KEY `doc_id` (`doc_id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_docs` VALUES ('About Us', 'This can be managed under <span class=\"navTitle\">Documents - Site Documents in the admin control panel.<br/>\r\n</span>', 1);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_docs` VALUES ('Contact Us', 'This can be managed under <span class=\"navTitle\">Documents - Site Documents in the admin control panel.</span><span class=\"navTitle\"/>', 2);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_docs` VALUES ('Terms & Conditions', 'This can be managed under <span class=\"navTitle\">Documents - Site Documents in the admin control panel.</span>', 3);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_docs` VALUES ('Privacy Policy', 'This can be managed under <span class=\"navTitle\">Documents - Site Documents in the admin control panel.</span>', 4);");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_docs_lang` (
	  `id` int(11) NOT NULL auto_increment,
	  `doc_master_id` int(11) NOT NULL default '0',
	  `doc_lang` varchar(20) NOT NULL default '',
	  `doc_name` varchar(255) NOT NULL default '',
	  `doc_content` text NOT NULL,
	  KEY `id` (`id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_img_idx` (
	  `id` int(11) NOT NULL auto_increment,
	  `productId` int(11) NOT NULL default '0',
	  `img` varchar(255) NOT NULL default '',
	  KEY `id` (`id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_inv_lang` (
	  `id` int(11) NOT NULL auto_increment,
	  `name` varchar(255) NOT NULL default '',
	  `prod_lang` varchar(20) NOT NULL default '',
	  `prod_master_id` int(11) NOT NULL default '0',
	  `description` text NOT NULL,
	  KEY `id` (`id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_inventory` (
	  `productId` int(11) NOT NULL auto_increment,
	  `productCode` varchar(60) NOT NULL default '',
	  `quantity` int(16) NOT NULL default '1',
	  `description` text NOT NULL,
	  `image` varchar(250) NOT NULL default '',
	  `noImages` int(11) NOT NULL default '0',
	  `price` decimal(30,2) NOT NULL default '0.00',
	  `name` varchar(250) NOT NULL default '0',
	  `cat_id` int(16) NOT NULL default '0',
	  `popularity` bigint(64) NOT NULL default '0',
	  `sale_price` decimal(30,2) NOT NULL default '0.00',
	  `stock_level` int(11) default '0',
	  `useStockLevel` int(11) default '1',
	  `digital` int(11) NOT NULL default '0',
	  `digitalDir` varchar(255) default NULL,
	  `prodWeight` decimal(10,3) default NULL,
	  `taxType` int(11) default NULL,
	  `showFeatured` int(11) NOT NULL default '1',
	  PRIMARY KEY  (`productId`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_inventory` VALUES (1, 'TESA31', 1, 'This is the main copy for the product.<br/>', '', 0, 10.00, 'Test Product', 1, 5, 6.99, 0, 0, 0, '', 4.00, 1, 1);");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_iso_counties` (
	  `id` int(11) NOT NULL auto_increment,
	  `countryId` int(4) NOT NULL default '0',
	  `abbrev` varchar(4) NOT NULL default '',
	  `name` varchar(40) NOT NULL default '',
	  PRIMARY KEY  (`id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (1, 226, 'AL', 'Alabama');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (2, 226, 'AK', 'Alaska');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (3, 226, 'AS', 'American Samoa');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (4, 226, 'AZ', 'Arizona');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (5, 226, 'AR', 'Arkansas');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (6, 226, 'AF', 'Armed Forces Africa');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (7, 226, 'AA', 'Armed Forces Americas');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (8, 226, 'AC', 'Armed Forces Canada');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (9, 226, 'AE', 'Armed Forces Europe');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (10, 226, 'AM', 'Armed Forces Middle East');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (11, 226, 'AP', 'Armed Forces Pacific');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (12, 226, 'CA', 'California');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (13, 226, 'CO', 'Colorado');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (14, 226, 'CT', 'Connecticut');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (15, 226, 'DE', 'Delaware');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (16, 226, 'DC', 'District of Columbia');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (17, 226, 'FM', 'Federated States Of Micronesia');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (18, 226, 'FL', 'Florida');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (19, 226, 'GA', 'Georgia');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (20, 226, 'GU', 'Guam');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (21, 226, 'HI', 'Hawaii');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (22, 226, 'ID', 'Idaho');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (23, 226, 'IL', 'Illinois');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (24, 226, 'IN', 'Indiana');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (25, 226, 'IA', 'Iowa');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (26, 226, 'KS', 'Kansas');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (27, 226, 'KY', 'Kentucky');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (28, 226, 'LA', 'Louisiana');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (29, 226, 'ME', 'Maine');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (30, 226, 'MH', 'Marshall Islands');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (31, 226, 'MD', 'Maryland');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (32, 226, 'MA', 'Massachusetts');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (33, 226, 'MI', 'Michigan');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (34, 226, 'MN', 'Minnesota');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (35, 226, 'MS', 'Mississippi');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (36, 226, 'MO', 'Missouri');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (37, 226, 'MT', 'Montana');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (38, 226, 'NE', 'Nebraska');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (39, 226, 'NV', 'Nevada');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (40, 226, 'NH', 'New Hampshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (41, 226, 'NJ', 'New Jersey');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (42, 226, 'NM', 'New Mexico');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (43, 226, 'NY', 'New York');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (44, 226, 'NC', 'North Carolina');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (45, 226, 'ND', 'North Dakota');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (46, 226, 'MP', 'Northern Mariana Islands');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (47, 226, 'OH', 'Ohio');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (48, 226, 'OK', 'Oklahoma');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (49, 226, 'OR', 'Oregon');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (50, 226, 'PW', 'Palau');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (51, 226, 'PA', 'Pennsylvania');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (52, 226, 'PR', 'Puerto Rico');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (53, 226, 'RI', 'Rhode Island');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (54, 226, 'SC', 'South Carolina');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (55, 226, 'SD', 'South Dakota');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (56, 226, 'TN', 'Tennessee');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (57, 226, 'TX', 'Texas');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (58, 226, 'UT', 'Utah');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (59, 226, 'VT', 'Vermont');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (60, 226, 'VI', 'Virgin Islands');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (61, 226, 'VA', 'Virginia');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (62, 226, 'WA', 'Washington');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (63, 226, 'WV', 'West Virginia');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (64, 226, 'WI', 'Wisconsin');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (65, 226, 'WY', 'Wyoming');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (66, 38, 'AB', 'Alberta');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (67, 38, 'BC', 'British Columbia');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (68, 38, 'MB', 'Manitoba');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (69, 38, 'NF', 'Newfoundland');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (70, 38, 'NB', 'New Brunswick');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (71, 38, 'NS', 'Nova Scotia');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (72, 38, 'NT', 'Northwest Territories');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (73, 38, 'NU', 'Nunavut');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (74, 38, 'ON', 'Ontario');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (75, 38, 'PE', 'Prince Edward Island');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (76, 38, 'QC', 'Quebec');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (77, 38, 'SK', 'Saskatchewan');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (78, 38, 'YT', 'Yukon Territory');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (79, 80, 'NDS', 'Niedersachsen');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (80, 80, 'BAW', 'Baden-Württemberg');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (81, 80, 'BAY', 'Bayern');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (82, 80, 'BER', 'Berlin');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (83, 80, 'BRG', 'Brandenburg');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (84, 80, 'BRE', 'Bremen');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (85, 80, 'HAM', 'Hamburg');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (86, 80, 'HES', 'Hessen');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (87, 80, 'MEC', 'Mecklenburg-Vorpommern');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (88, 80, 'NRW', 'Nordrhein-Westfalen');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (89, 80, 'RHE', 'Rheinland-Pfalz');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (90, 80, 'SAR', 'Saarland');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (91, 80, 'SAS', 'Sachsen');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (92, 80, 'SAC', 'Sachsen-Anhalt');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (93, 80, 'SCN', 'Schleswig-Holstein');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (94, 80, 'THE', 'Thüringen');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (95, 14, 'WIE', 'Wien');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (96, 14, 'NO', 'Niederösterreich');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (97, 14, 'OO', 'Oberösterreich');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (98, 14, 'SB', 'Salzburg');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (99, 14, 'KN', 'Kärnten');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (100, 14, 'ST', 'Steiermark');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (101, 14, 'TI', 'Tirol');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (102, 14, 'BL', 'Burgenland');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (103, 14, 'VB', 'Voralberg');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (104, 206, 'AG', 'Aargau');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (105, 206, 'AI', 'Appenzell Innerrhoden');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (106, 206, 'APP', 'Appenzell Ausserrhoden');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (107, 206, 'BE', 'Bern');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (108, 206, 'BLA', 'Basel-Landschaft');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (109, 206, 'BS', 'Basel-Stadt');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (110, 206, 'FR', 'Freiburg');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (111, 206, 'GE', 'Genf');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (112, 206, 'GL', 'Glarus');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (113, 206, 'JUB', 'Graubünden');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (114, 206, 'JU', 'Jura');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (115, 206, 'LU', 'Luzern');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (116, 206, 'NEU', 'Neuenburg');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (117, 206, 'NW', 'Nidwalden');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (118, 206, 'OW', 'Obwalden');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (119, 206, 'SG', 'St. Gallen');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (120, 206, 'SH', 'Schaffhausen');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (121, 206, 'SO', 'Solothurn');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (122, 206, 'SZ', 'Schwyz');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (123, 206, 'TG', 'Thurgau');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (124, 206, 'TE', 'Tessin');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (125, 206, 'UR', 'Uri');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (126, 206, 'VD', 'Waadt');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (127, 206, 'VS', 'Wallis');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (128, 206, 'ZG', 'Zug');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (129, 206, 'ZH', 'Zürich');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (130, 199, 'ACOR', 'A Coruña');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (131, 199, 'ALAV', 'Alava');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (132, 199, 'ALBA', 'Albacete');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (133, 199, 'ALIC', 'Alicante');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (134, 199, 'ALME', 'Almeria');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (135, 199, 'ASTU', 'Asturias');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (136, 199, 'AVIL', 'Avila');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (137, 199, 'BADA', 'Badajoz');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (138, 199, 'BALE', 'Baleares');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (139, 199, 'BARC', 'Barcelona');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (140, 199, 'BURG', 'Burgos');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (141, 199, 'CACE', 'Caceres');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (142, 199, 'CADI', 'Cadiz');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (143, 199, 'CANT', 'Cantabria');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (144, 199, 'CAST', 'Castellon');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (145, 199, 'CEUT', 'Ceuta');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (146, 199, 'CIUD', 'Ciudad Real');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (147, 199, 'CORD', 'Cordoba');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (148, 199, 'CUEN', 'Cuenca');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (149, 199, 'GIRO', 'Girona');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (150, 199, 'GRAN', 'Granada');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (151, 199, 'GUAD', 'Guadalajara');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (152, 199, 'GUIP', 'Guipuzcoa');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (153, 199, 'HUEL', 'Huelva');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (154, 199, 'HUES', 'Huesca');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (155, 199, 'JAEN', 'Jaen');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (156, 199, 'LAR', 'La Rioja');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (157, 199, 'LAS', 'Las Palmas');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (158, 199, 'LEON', 'Leon');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (159, 199, 'LLEI', 'Lleida');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (160, 199, 'LUGO', 'Lugo');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (161, 199, 'MADR', 'Madrid');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (162, 199, 'MALA', 'Malaga');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (163, 199, 'MELI', 'Melilla');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (164, 199, 'MURC', 'Murcia');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (165, 199, 'NAVA', 'Navarra');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (166, 199, 'OURE', 'Ourense');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (167, 199, 'PALE', 'Palencia');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (168, 199, 'PONT', 'Pontevedra');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (169, 199, 'SALA', 'Salamanca');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (170, 199, 'SANT', 'Santa Cruz de Tenerife');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (171, 199, 'SEGO', 'Segovia');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (172, 199, 'SEVI', 'Sevilla');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (173, 199, 'SORI', 'Soria');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (174, 199, 'TARR', 'Tarragona');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (175, 199, 'TERU', 'Teruel');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (176, 199, 'TOLE', 'Toledo');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (177, 199, 'VALE', 'Valencia');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (178, 199, 'VALL', 'Valladolid');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (179, 199, 'VIZC', 'Vizcaya');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (180, 199, 'ZAMO', 'Zamora');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (181, 199, 'ZARA', 'Zaragoza');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (182, 225, 'ABE', 'Aberdeen');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (183, 225, 'ABD', 'Aberdeenshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (184, 225, 'AGY', 'Anglesey');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (185, 225, 'ANS', 'Angus');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (186, 225, 'ANT', 'Antrim');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (187, 225, 'ARD', 'Ards');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (188, 225, 'AGB', 'Argyll and Bute');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (189, 225, 'ARM', 'Armagh');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (190, 225, 'BLA', 'Ballymena');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (191, 225, 'BLY', 'Ballymoney');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (192, 225, 'BNB', 'Banbridge');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (193, 225, 'BDG', 'Barking and Dagenham');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (194, 225, 'BNE', 'Barnet');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (195, 225, 'BNS', 'Barnsley');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (196, 225, 'BAS', 'Bath and North East Somerset');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (197, 225, 'BDF', 'Bedfordshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (198, 225, 'BFS', 'Belfast');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (199, 225, 'BEX', 'Bexley');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (200, 225, 'BIR', 'Birmingham');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (201, 225, 'BBD', 'Blackburn with Darwen');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (202, 225, 'BPL', 'Blackpool');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (203, 225, 'BGW', 'Blaenau Gwent');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (204, 225, 'BOL', 'Bolton');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (205, 225, 'BMH', 'Bournemouth');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (206, 225, 'BRC', 'Bracknell Forest');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (207, 225, 'BRD', 'Bradford');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (208, 225, 'BEN', 'Brent');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (209, 225, 'BGE', 'Bridgend');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (210, 225, 'BNH', 'Brighton and Hove');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (211, 225, 'BST', 'Bristol');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (212, 225, 'BRY', 'Bromley');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (213, 225, 'BKM', 'Buckinghamshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (214, 225, 'BUR', 'Bury');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (215, 225, 'CAY', 'Caerphilly');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (216, 225, 'CLD', 'Calderdale');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (217, 225, 'CAM', 'Cambridgeshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (218, 225, 'CMD', 'Camden');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (219, 225, 'CRF', 'Cardiff');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (220, 225, 'CMN', 'Carmarthenshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (221, 225, 'CKF', 'Carrickfergus');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (222, 225, 'CSR', 'Castlereagh');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (223, 225, 'CGN', 'Ceredigion');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (224, 225, 'CHS', 'Cheshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (225, 225, 'CLK', 'Clackmannanshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (226, 225, 'CLR', 'Coleraine');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (227, 225, 'CWY', 'Conwy');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (228, 225, 'CKT', 'Cookstown');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (229, 225, 'CON', 'Cornwall');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (230, 225, 'COV', 'Coventry');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (231, 225, 'CGV', 'Craigavon');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (232, 225, 'CRY', 'Croydon');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (233, 225, 'CMA', 'Cumbria');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (234, 225, 'DAL', 'Darlington');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (235, 225, 'DEN', 'Denbighshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (236, 225, 'DER', 'Derby');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (237, 225, 'DBY', 'Derbyshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (238, 225, 'DRY', 'Derry');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (239, 225, 'DEV', 'Devon');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (240, 225, 'DNC', 'Doncaster');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (241, 225, 'DOR', 'Dorset');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (242, 225, 'DOW', 'Down');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (243, 225, 'DUD', 'Dudley');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (244, 225, 'DGY', 'Dumfries and Galloway');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (245, 225, 'DND', 'Dundee');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (246, 225, 'DGN', 'Dungannon');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (247, 225, 'DUR', 'Durham');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (248, 225, 'EAL', 'Ealing');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (249, 225, 'EAY', 'East Ayrshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (250, 225, 'EDU', 'East Dunbartonshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (251, 225, 'ELN', 'East Lothian');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (252, 225, 'ERW', 'East Renfrewshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (253, 225, 'ERY', 'East Riding of Yorkshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (254, 225, 'ESX', 'East Sussex');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (255, 225, 'EDH', 'Edinburgh');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (256, 225, 'ELS', 'Eilean Siar');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (257, 225, 'ENF', 'Enfield');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (258, 225, 'ESS', 'Essex');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (259, 225, 'FAL', 'Falkirk');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (260, 225, 'FER', 'Fermanagh');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (261, 225, 'FIF', 'Fife');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (262, 225, 'FLN', 'Flintshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (263, 225, 'GAT', 'Gateshead');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (264, 225, 'GLG', 'Glasgow');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (265, 225, 'GLS', 'Gloucestershire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (266, 225, 'GRE', 'Greenwich');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (267, 225, 'GSY', 'Guernsey');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (268, 225, 'GWN', 'Gwynedd');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (269, 225, 'HCK', 'Hackney');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (270, 225, 'HAL', 'Halton');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (271, 225, 'HMF', 'Hammersmith and Fulham');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (272, 225, 'HAM', 'Hampshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (273, 225, 'HRY', 'Haringey');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (274, 225, 'HRW', 'Harrow');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (275, 225, 'HPL', 'Hartlepool');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (276, 225, 'HAV', 'Havering');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (277, 225, 'HEF', 'Herefordshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (278, 225, 'HRT', 'Hertfordshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (279, 225, 'HLD', 'Highland');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (280, 225, 'HIL', 'Hillingdon');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (281, 225, 'HNS', 'Hounslow');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (282, 225, 'IVC', 'Inverclyde');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (283, 225, 'IOM', 'Isle of Man');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (284, 225, 'IOW', 'Isle of Wight');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (285, 225, 'IOS', 'Isles of Scilly');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (286, 225, 'ISL', 'Islington');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (287, 225, 'JSY', 'Jersey');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (288, 225, 'KEC', 'Kensington and Chelsea');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (289, 225, 'KEN', 'Kent');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (290, 225, 'KHL', 'Kingston upon Hull');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (291, 225, 'KTT', 'Kingston upon Thames');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (292, 225, 'KIR', 'Kirklees');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (293, 225, 'KWL', 'Knowsley');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (294, 225, 'LBH', 'Lambeth');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (295, 225, 'LAN', 'Lancashire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (296, 225, 'LRN', 'Larne');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (297, 225, 'LDS', 'Leeds');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (298, 225, 'LCE', 'Leicester');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (299, 225, 'LEC', 'Leicestershire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (300, 225, 'LEW', 'Lewisham');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (301, 225, 'LMV', 'Limavady');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (302, 225, 'LIN', 'Lincolnshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (303, 225, 'LSB', 'Lisburn');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (304, 225, 'LIV', 'Liverpool');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (305, 225, 'LND', 'London');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (306, 225, 'LUT', 'Luton');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (307, 225, 'MFT', 'Magherafelt');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (308, 225, 'MAN', 'Manchester');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (309, 225, 'MDW', 'Medway');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (310, 225, 'MTY', 'Merthyr Tydfil');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (311, 225, 'MRT', 'Merton');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (312, 225, 'MDB', 'Middlesbrough');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (313, 225, 'MLN', 'Midlothian');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (314, 225, 'MIK', 'Milton Keynes');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (315, 225, 'MON', 'Monmouthshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (316, 225, 'MRY', 'Moray');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (317, 225, 'MYL', 'Moyle');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (318, 225, 'NTL', 'Neath Port Talbot');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (319, 225, 'NET', 'Newcastle upon Tyne');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (320, 225, 'NWM', 'Newham');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (321, 225, 'NWP', 'Newport');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (322, 225, 'NYM', 'Newry and Mourne');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (323, 225, 'NTA', 'Newtownabbey');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (324, 225, 'NFK', 'Norfolk');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (325, 225, 'NTH', 'Northamptonshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (326, 225, 'NAY', 'North Ayrshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (327, 225, 'NDN', 'North Down');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (328, 225, 'NEL', 'North East Lincolnshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (329, 225, 'NLK', 'North Lanarkshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (330, 225, 'NLN', 'North Lincolnshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (331, 225, 'NSM', 'North Somerset');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (332, 225, 'NTY', 'North Tyneside');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (333, 225, 'NBL', 'Northumberland');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (334, 225, 'NYK', 'North Yorkshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (335, 225, 'NGM', 'Nottingham');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (336, 225, 'NTT', 'Nottinghamshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (337, 225, 'OLD', 'Oldham');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (338, 225, 'OMH', 'Omagh');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (339, 225, 'ORK', 'Orkney Islands');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (340, 225, 'OXF', 'Oxfordshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (341, 225, 'PEM', 'Pembrokeshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (342, 225, 'PKN', 'Perthshire and Kinross');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (343, 225, 'PTE', 'Peterborough');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (344, 225, 'PLY', 'Plymouth');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (345, 225, 'POL', 'Poole');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (346, 225, 'POR', 'Portsmouth');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (347, 225, 'POW', 'Powys');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (348, 225, 'RDG', 'Reading');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (349, 225, 'RDB', 'Redbridge');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (350, 225, 'RCC', 'Redcar and Cleveland');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (351, 225, 'RFW', 'Renfrewshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (352, 225, 'RCT', 'Rhondda, Cynon, Taff');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (353, 225, 'RIC', 'Richmond upon Thames');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (354, 225, 'RCH', 'Rochdale');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (355, 225, 'ROT', 'Rotherham');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (356, 225, 'RUT', 'Rutland');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (357, 225, 'SHN', 'Saint Helens');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (358, 225, 'SLF', 'Salford');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (359, 225, 'SAW', 'Sandwell');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (360, 225, 'SCB', 'Scottish Borders');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (361, 225, 'SFT', 'Sefton');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (362, 225, 'SHF', 'Sheffield');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (363, 225, 'ZET', 'Shetland Islands');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (364, 225, 'SHR', 'Shropshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (365, 225, 'SLG', 'Slough');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (366, 225, 'SOL', 'Solihull');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (367, 225, 'SOM', 'Somerset');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (368, 225, 'STH', 'Southampton');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (369, 225, 'SAY', 'South Ayrshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (370, 225, 'SOS', 'Southend-on-Sea');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (371, 225, 'SGC', 'South Gloucestershire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (372, 225, 'SLK', 'South Lanarkshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (373, 225, 'STY', 'South Tyneside');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (374, 225, 'SWK', 'Southwark');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (375, 225, 'STS', 'Staffordshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (376, 225, 'STG', 'Stirling');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (377, 225, 'SKP', 'Stockport');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (378, 225, 'STT', 'Stockton-on-Tees');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (379, 225, 'STE', 'Stoke-on-Trent');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (380, 225, 'STB', 'Strabane');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (381, 225, 'SFK', 'Suffolk');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (382, 225, 'SND', 'Sunderland');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (383, 225, 'SRY', 'Surrey');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (384, 225, 'STN', 'Sutton');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (385, 225, 'SWA', 'Swansea');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (386, 225, 'SWD', 'Swindon');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (387, 225, 'TAM', 'Tameside');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (388, 225, 'TFW', 'Telford and Wrekin');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (389, 225, 'THR', 'Thurrock');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (390, 225, 'TOB', 'Torbay');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (391, 225, 'TOF', 'Torfaen');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (392, 225, 'TWH', 'Tower Hamlets');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (393, 225, 'TRF', 'Trafford');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (394, 225, 'VGL', 'Vale of Glamorgan');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (395, 225, 'WKF', 'Wakefield');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (396, 225, 'WLL', 'Walsall');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (397, 225, 'WFT', 'Waltham Forest');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (398, 225, 'WND', 'Wandsworth');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (399, 225, 'WRT', 'Warrington');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (400, 225, 'WAR', 'Warwickshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (401, 225, 'WBK', 'West Berkshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (402, 225, 'WDU', 'West Dunbartonshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (403, 225, 'WLN', 'West Lothian');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (404, 225, 'WSM', 'Westminster');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (405, 225, 'WSX', 'West Sussex');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (406, 225, 'WGN', 'Wigan');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (407, 225, 'WIL', 'Wiltshire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (408, 225, 'WNM', 'Windsor and Maidenhead');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (409, 225, 'WRL', 'Wirral');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (410, 225, 'WOK', 'Wokingham');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (411, 225, 'WLV', 'Wolverhampton');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (412, 225, 'WOR', 'Worcestershire');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (413, 225, 'WRX', 'Wrexham');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (414, 225, 'YOR', 'York');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (415, 103, 'CW', 'Carlow');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (416, 103, 'CN', 'Cavan');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (417, 103, 'CE', 'Clare');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (418, 103, 'C', 'Cork');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (419, 103, 'DL', 'Donegal');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (420, 103, 'D', 'Dublin');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (421, 103, 'G', 'Galway');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (422, 103, 'KY', 'Kerry');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (423, 103, 'KE', 'Kildare');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (424, 103, 'KK', 'Kilkenny');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (425, 103, 'LS', 'Laoighis');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (426, 103, 'LM', 'Leitrim');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (427, 103, 'LK', 'Limerick');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (428, 103, 'LD', 'Longford');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (429, 103, 'LH', 'Louth');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (430, 103, 'MO', 'Mayo');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (431, 103, 'MH', 'Meath');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (432, 103, 'MN', 'Monaghan');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (433, 103, 'OY', 'Offaly');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (434, 103, 'RN', 'Roscommon');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (435, 103, 'SO', 'Sligo');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (436, 103, 'TA', 'Tipperary');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (437, 103, 'WD', 'Waterford');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (438, 103, 'WH', 'Westmeath');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (439, 103, 'WX', 'Wexford');");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_counties` VALUES (440, 103, 'WW', 'Wicklow');");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_iso_countries` (
	  `id` int(11) NOT NULL auto_increment,
	  `iso` char(2) NOT NULL default '',
	  `printable_name` varchar(80) NOT NULL default '',
	  `iso3` char(3) default NULL,
	  `numcode` smallint(6) default NULL,
	  PRIMARY KEY  (`iso`),
	  KEY `id` (`id`),
	  KEY `id_2` (`id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");


	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (1, 'AF', 'Afghanistan', 'AFG', 4);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (2, 'AL', 'Albania', 'ALB', 8);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (3, 'DZ', 'Algeria', 'DZA', 12);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (4, 'AS', 'American Samoa', 'ASM', 16);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (5, 'AD', 'Andorra', 'AND', 20);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (6, 'AO', 'Angola', 'AGO', 24);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (7, 'AI', 'Anguilla', 'AIA', 660);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (8, 'AQ', 'Antarctica', NULL, NULL);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (9, 'AG', 'Antigua and Barbuda', 'ATG', 28);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (10, 'AR', 'Argentina', 'ARG', 32);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (11, 'AM', 'Armenia', 'ARM', 51);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (12, 'AW', 'Aruba', 'ABW', 533);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (13, 'AU', 'Australia', 'AUS', 36);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (14, 'AT', 'Austria', 'AUT', 40);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (15, 'AZ', 'Azerbaijan', 'AZE', 31);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (16, 'BS', 'Bahamas', 'BHS', 44);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (17, 'BH', 'Bahrain', 'BHR', 48);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (18, 'BD', 'Bangladesh', 'BGD', 50);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (19, 'BB', 'Barbados', 'BRB', 52);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (20, 'BY', 'Belarus', 'BLR', 112);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (21, 'BE', 'Belgium', 'BEL', 56);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (22, 'BZ', 'Belize', 'BLZ', 84);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (23, 'BJ', 'Benin', 'BEN', 204);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (24, 'BM', 'Bermuda', 'BMU', 60);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (25, 'BT', 'Bhutan', 'BTN', 64);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (26, 'BO', 'Bolivia', 'BOL', 68);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (27, 'BA', 'Bosnia and Herzegovina', 'BIH', 70);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (28, 'BW', 'Botswana', 'BWA', 72);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (29, 'BV', 'Bouvet Island', NULL, NULL);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (30, 'BR', 'Brazil', 'BRA', 76);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (31, 'IO', 'British Indian Ocean Territory', NULL, NULL);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (32, 'BN', 'Brunei Darussalam', 'BRN', 96);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (33, 'BG', 'Bulgaria', 'BGR', 100);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (34, 'BF', 'Burkina Faso', 'BFA', 854);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (35, 'BI', 'Burundi', 'BDI', 108);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (36, 'KH', 'Cambodia', 'KHM', 116);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (37, 'CM', 'Cameroon', 'CMR', 120);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (38, 'CA', 'Canada', 'CAN', 124);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (39, 'CV', 'Cape Verde', 'CPV', 132);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (40, 'KY', 'Cayman Islands', 'CYM', 136);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (41, 'CF', 'Central African Republic', 'CAF', 140);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (42, 'TD', 'Chad', 'TCD', 148);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (43, 'CL', 'Chile', 'CHL', 152);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (44, 'CN', 'China', 'CHN', 156);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (45, 'CX', 'Christmas Island', NULL, NULL);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (46, 'CC', 'Cocos (Keeling) Islands', NULL, NULL);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (47, 'CO', 'Colombia', 'COL', 170);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (48, 'KM', 'Comoros', 'COM', 174);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (49, 'CG', 'Congo', 'COG', 178);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (50, 'CD', 'Congo, the Democratic Republic of the', 'COD', 180);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (51, 'CK', 'Cook Islands', 'COK', 184);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (52, 'CR', 'Costa Rica', 'CRI', 188);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (53, 'CI', 'Cote D''Ivoire', 'CIV', 384);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (54, 'HR', 'Croatia', 'HRV', 191);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (55, 'CU', 'Cuba', 'CUB', 192);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (56, 'CY', 'Cyprus', 'CYP', 196);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (57, 'CZ', 'Czech Republic', 'CZE', 203);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (58, 'DK', 'Denmark', 'DNK', 208);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (59, 'DJ', 'Djibouti', 'DJI', 262);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (60, 'DM', 'Dominica', 'DMA', 212);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (61, 'DO', 'Dominican Republic', 'DOM', 214);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (62, 'EC', 'Ecuador', 'ECU', 218);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (63, 'EG', 'Egypt', 'EGY', 818);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (64, 'SV', 'El Salvador', 'SLV', 222);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (65, 'GQ', 'Equatorial Guinea', 'GNQ', 226);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (66, 'ER', 'Eritrea', 'ERI', 232);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (67, 'EE', 'Estonia', 'EST', 233);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (68, 'ET', 'Ethiopia', 'ETH', 231);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (69, 'FK', 'Falkland Islands (Malvinas)', 'FLK', 238);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (70, 'FO', 'Faroe Islands', 'FRO', 234);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (71, 'FJ', 'Fiji', 'FJI', 242);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (72, 'FI', 'Finland', 'FIN', 246);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (73, 'FR', 'France', 'FRA', 250);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (74, 'GF', 'French Guiana', 'GUF', 254);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (75, 'PF', 'French Polynesia', 'PYF', 258);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (76, 'TF', 'French Southern Territories', NULL, NULL);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (77, 'GA', 'Gabon', 'GAB', 266);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (78, 'GM', 'Gambia', 'GMB', 270);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (79, 'GE', 'Georgia', 'GEO', 268);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (80, 'DE', 'Germany', 'DEU', 276);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (81, 'GH', 'Ghana', 'GHA', 288);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (82, 'GI', 'Gibraltar', 'GIB', 292);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (83, 'GR', 'Greece', 'GRC', 300);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (84, 'GL', 'Greenland', 'GRL', 304);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (85, 'GD', 'Grenada', 'GRD', 308);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (86, 'GP', 'Guadeloupe', 'GLP', 312);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (87, 'GU', 'Guam', 'GUM', 316);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (88, 'GT', 'Guatemala', 'GTM', 320);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (89, 'GN', 'Guinea', 'GIN', 324);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (90, 'GW', 'Guinea-Bissau', 'GNB', 624);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (91, 'GY', 'Guyana', 'GUY', 328);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (92, 'HT', 'Haiti', 'HTI', 332);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (93, 'HM', 'Heard Island and Mcdonald Islands', NULL, NULL);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (94, 'VA', 'Holy See (Vatican City State)', 'VAT', 336);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (95, 'HN', 'Honduras', 'HND', 340);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (96, 'HK', 'Hong Kong', 'HKG', 344);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (97, 'HU', 'Hungary', 'HUN', 348);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (98, 'IS', 'Iceland', 'ISL', 352);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (99, 'IN', 'India', 'IND', 356);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (100, 'ID', 'Indonesia', 'IDN', 360);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (101, 'IR', 'Iran, Islamic Republic of', 'IRN', 364);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (102, 'IQ', 'Iraq', 'IRQ', 368);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (103, 'IE', 'Ireland', 'IRL', 372);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (104, 'IL', 'Israel', 'ISR', 376);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (105, 'IT', 'Italy', 'ITA', 380);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (106, 'JM', 'Jamaica', 'JAM', 388);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (107, 'JP', 'Japan', 'JPN', 392);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (108, 'JO', 'Jordan', 'JOR', 400);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (109, 'KZ', 'Kazakhstan', 'KAZ', 398);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (110, 'KE', 'Kenya', 'KEN', 404);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (111, 'KI', 'Kiribati', 'KIR', 296);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (112, 'KP', 'Korea, Democratic People''s Republic of', 'PRK', 408);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (113, 'KR', 'Korea, Republic of', 'KOR', 410);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (114, 'KW', 'Kuwait', 'KWT', 414);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (115, 'KG', 'Kyrgyzstan', 'KGZ', 417);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (116, 'LA', 'Lao People''s Democratic Republic', 'LAO', 418);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (117, 'LV', 'Latvia', 'LVA', 428);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (118, 'LB', 'Lebanon', 'LBN', 422);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (119, 'LS', 'Lesotho', 'LSO', 426);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (120, 'LR', 'Liberia', 'LBR', 430);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (121, 'LY', 'Libyan Arab Jamahiriya', 'LBY', 434);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (122, 'LI', 'Liechtenstein', 'LIE', 438);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (123, 'LT', 'Lithuania', 'LTU', 440);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (124, 'LU', 'Luxembourg', 'LUX', 442);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (125, 'MO', 'Macao', 'MAC', 446);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (126, 'MK', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (127, 'MG', 'Madagascar', 'MDG', 450);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (128, 'MW', 'Malawi', 'MWI', 454);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (129, 'MY', 'Malaysia', 'MYS', 458);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (130, 'MV', 'Maldives', 'MDV', 462);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (131, 'ML', 'Mali', 'MLI', 466);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (132, 'MT', 'Malta', 'MLT', 470);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (133, 'MH', 'Marshall Islands', 'MHL', 584);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (134, 'MQ', 'Martinique', 'MTQ', 474);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (135, 'MR', 'Mauritania', 'MRT', 478);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (136, 'MU', 'Mauritius', 'MUS', 480);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (137, 'YT', 'Mayotte', NULL, NULL);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (138, 'MX', 'Mexico', 'MEX', 484);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (139, 'FM', 'Micronesia, Federated States of', 'FSM', 583);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (140, 'MD', 'Moldova, Republic of', 'MDA', 498);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (141, 'MC', 'Monaco', 'MCO', 492);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (142, 'MN', 'Mongolia', 'MNG', 496);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (143, 'MS', 'Montserrat', 'MSR', 500);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (144, 'MA', 'Morocco', 'MAR', 504);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (145, 'MZ', 'Mozambique', 'MOZ', 508);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (146, 'MM', 'Myanmar', 'MMR', 104);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (147, 'NA', 'Namibia', 'NAM', 516);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (148, 'NR', 'Nauru', 'NRU', 520);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (149, 'NP', 'Nepal', 'NPL', 524);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (150, 'NL', 'Netherlands', 'NLD', 528);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (151, 'AN', 'Netherlands Antilles', 'ANT', 530);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (152, 'NC', 'New Caledonia', 'NCL', 540);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (153, 'NZ', 'New Zealand', 'NZL', 554);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (154, 'NI', 'Nicaragua', 'NIC', 558);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (155, 'NE', 'Niger', 'NER', 562);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (156, 'NG', 'Nigeria', 'NGA', 566);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (157, 'NU', 'Niue', 'NIU', 570);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (158, 'NF', 'Norfolk Island', 'NFK', 574);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (159, 'MP', 'Northern Mariana Islands', 'MNP', 580);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (160, 'NO', 'Norway', 'NOR', 578);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (161, 'OM', 'Oman', 'OMN', 512);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (162, 'PK', 'Pakistan', 'PAK', 586);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (163, 'PW', 'Palau', 'PLW', 585);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (164, 'PS', 'Palestinian Territory, Occupied', NULL, NULL);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (165, 'PA', 'Panama', 'PAN', 591);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (166, 'PG', 'Papua New Guinea', 'PNG', 598);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (167, 'PY', 'Paraguay', 'PRY', 600);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (168, 'PE', 'Peru', 'PER', 604);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (169, 'PH', 'Philippines', 'PHL', 608);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (170, 'PN', 'Pitcairn', 'PCN', 612);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (171, 'PL', 'Poland', 'POL', 616);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (172, 'PT', 'Portugal', 'PRT', 620);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (173, 'PR', 'Puerto Rico', 'PRI', 630);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (174, 'QA', 'Qatar', 'QAT', 634);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (175, 'RE', 'Reunion', 'REU', 638);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (176, 'RO', 'Romania', 'ROM', 642);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (177, 'RU', 'Russian Federation', 'RUS', 643);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (178, 'RW', 'Rwanda', 'RWA', 646);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (179, 'SH', 'Saint Helena', 'SHN', 654);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (180, 'KN', 'Saint Kitts and Nevis', 'KNA', 659);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (181, 'LC', 'Saint Lucia', 'LCA', 662);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (182, 'PM', 'Saint Pierre and Miquelon', 'SPM', 666);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (183, 'VC', 'Saint Vincent and the Grenadines', 'VCT', 670);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (184, 'WS', 'Samoa', 'WSM', 882);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (185, 'SM', 'San Marino', 'SMR', 674);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (186, 'ST', 'Sao Tome and Principe', 'STP', 678);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (187, 'SA', 'Saudi Arabia', 'SAU', 682);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (188, 'SN', 'Senegal', 'SEN', 686);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (189, 'CS', 'Serbia and Montenegro', NULL, NULL);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (190, 'SC', 'Seychelles', 'SYC', 690);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (191, 'SL', 'Sierra Leone', 'SLE', 694);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (192, 'SG', 'Singapore', 'SGP', 702);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (193, 'SK', 'Slovakia', 'SVK', 703);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (194, 'SI', 'Slovenia', 'SVN', 705);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (195, 'SB', 'Solomon Islands', 'SLB', 90);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (196, 'SO', 'Somalia', 'SOM', 706);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (197, 'ZA', 'South Africa', 'ZAF', 710);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (198, 'GS', 'South Georgia and the South Sandwich Islands', NULL, NULL);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (199, 'ES', 'Spain', 'ESP', 724);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (200, 'LK', 'Sri Lanka', 'LKA', 144);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (201, 'SD', 'Sudan', 'SDN', 736);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (202, 'SR', 'Suriname', 'SUR', 740);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (203, 'SJ', 'Svalbard and Jan Mayen', 'SJM', 744);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (204, 'SZ', 'Swaziland', 'SWZ', 748);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (205, 'SE', 'Sweden', 'SWE', 752);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (206, 'CH', 'Switzerland', 'CHE', 756);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (207, 'SY', 'Syrian Arab Republic', 'SYR', 760);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (208, 'TW', 'Taiwan, Province of China', 'TWN', 158);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (209, 'TJ', 'Tajikistan', 'TJK', 762);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (210, 'TZ', 'Tanzania, United Republic of', 'TZA', 834);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (211, 'TH', 'Thailand', 'THA', 764);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (212, 'TL', 'Timor-Leste', NULL, NULL);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (213, 'TG', 'Togo', 'TGO', 768);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (214, 'TK', 'Tokelau', 'TKL', 772);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (215, 'TO', 'Tonga', 'TON', 776);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (216, 'TT', 'Trinidad and Tobago', 'TTO', 780);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (217, 'TN', 'Tunisia', 'TUN', 788);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (218, 'TR', 'Turkey', 'TUR', 792);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (219, 'TM', 'Turkmenistan', 'TKM', 795);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (220, 'TC', 'Turks and Caicos Islands', 'TCA', 796);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (221, 'TV', 'Tuvalu', 'TUV', 798);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (222, 'UG', 'Uganda', 'UGA', 800);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (223, 'UA', 'Ukraine', 'UKR', 804);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (224, 'AE', 'United Arab Emirates', 'ARE', 784);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (225, 'GB', 'United Kingdom', 'GBR', 826);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (226, 'US', 'United States', 'USA', 840);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (227, 'UM', 'United States Minor Outlying Islands', NULL, NULL);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (228, 'UY', 'Uruguay', 'URY', 858);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (229, 'UZ', 'Uzbekistan', 'UZB', 860);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (230, 'VU', 'Vanuatu', 'VUT', 548);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (231, 'VE', 'Venezuela', 'VEN', 862);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (232, 'VN', 'Viet Nam', 'VNM', 704);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (233, 'VG', 'Virgin Islands, British', 'VGB', 92);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (234, 'VI', 'Virgin Islands, U.s.', 'VIR', 850);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (235, 'WF', 'Wallis and Futuna', 'WLF', 876);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (236, 'EH', 'Western Sahara', 'ESH', 732);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (237, 'YE', 'Yemen', 'YEM', 887);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (238, 'ZM', 'Zambia', 'ZMB', 894);");
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_iso_countries` VALUES (239, 'ZW', 'Zimbabwe', 'ZWE', 716);");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_options_bot` (
	  `assign_id` int(32) NOT NULL auto_increment,
	  `product` int(11) NOT NULL default '0',
	  `option_id` int(32) NOT NULL default '0',
	  `value_id` int(32) NOT NULL default '0',
	  `option_price` decimal(30,2) NOT NULL default '0.00',
	  `option_symbol` char(1) NOT NULL default '',
	  PRIMARY KEY  (`assign_id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_options_mid` (
	  `value_id` int(16) NOT NULL auto_increment,
	  `value_name` varchar(30) NOT NULL default '',
	  `father_id` int(16) NOT NULL default '0',
	  PRIMARY KEY  (`value_id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_options_top` (
	  `option_id` int(16) NOT NULL auto_increment,
	  `option_name` varchar(30) NOT NULL default '',
	  PRIMARY KEY  (`option_id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_order_inv` (
  `productId` int(11) NOT NULL default '0',
  `productCode` varchar(255) NOT NULL default '',
  `name` varchar(225) NOT NULL default '',
  `quantity` int(32) NOT NULL default '0',
  `price` decimal(30,2) NOT NULL default '0.00',
  `cart_order_id` varchar(30) NOT NULL default '',
  `id` int(32) NOT NULL auto_increment,
  `product_options` text NOT NULL,
  `digital` int(1) NOT NULL default '0',
  `stockUpdated` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_order_sum` (
	  `cart_order_id` varchar(30) NOT NULL default '',
	  `customer_id` int(11) NOT NULL default '0',
	  `name` varchar(225) NOT NULL default '',
	  `add_1` varchar(225) NOT NULL default '',
	  `add_2` varchar(225) NOT NULL default '',
	  `town` varchar(225) NOT NULL default '',
	  `county` varchar(225) NOT NULL default '',
	  `postcode` varchar(225) NOT NULL default '',
	  `country` varchar(225) NOT NULL default '',
	  `name_d` varchar(225) NOT NULL default '',
	  `add_1_d` varchar(225) NOT NULL default '',
	  `add_2_d` varchar(225) NOT NULL default '',
	  `town_d` varchar(225) NOT NULL default '',
	  `county_d` varchar(225) NOT NULL default '',
	  `postcode_d` varchar(225) NOT NULL default '',
	  `country_d` varchar(225) NOT NULL default '',
	  `phone` varchar(225) NOT NULL default '',
	  `mobile` varchar(255) default NULL,
	  `subtotal` decimal(30,2) NOT NULL default '0.00',
	  `prod_total` decimal(30,2) NOT NULL default '0.00',
	  `total_tax` decimal(30,2) NOT NULL default '0.00',
	  `total_ship` decimal(30,2) NOT NULL default '0.00',
	  `status` int(16) NOT NULL default '1',
	  `sec_order_id` varchar(30) default NULL,
	  `ip` varchar(20) NOT NULL default '',
	  `time` int(10) NOT NULL default '0',
	  `email` varchar(225) NOT NULL default '',
	  `comments` text,
	  `ship_date` varchar(50) default NULL,
	  `shipMethod` varchar(255) default NULL,
	  `gateway` varchar(50) NOT NULL default '',
	  `currency` varchar(5) NOT NULL default '',
	  `customer_comments` text,
	  PRIMARY KEY  (`cart_order_id`)
	) ENGINE=MyISAM".$defCharset.";");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_search` (
	  `searchstr` varchar(255) NOT NULL default '',
	  `hits` int(64) NOT NULL default '0',
	  `id` int(64) NOT NULL auto_increment,
	  PRIMARY KEY  (`id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_sessions` (
	  `sessId` varchar(32) NOT NULL default '',
	  `basket` text,
	  `timeStart` int(11) NOT NULL default '0',
	  `timeLast` int(11) NOT NULL default '0',
	  `customer_id` int(11) NOT NULL default '0',
	  `location` varchar(255) default NULL,
	  `lang` varchar(20) default NULL,
	  `currency` char(3) default NULL,
	  PRIMARY KEY  (`sessId`)
	) ENGINE=MyISAM".$defCharset.";");

	$db->misc("CREATE TABLE `".$_POST['dbprefix']."CubeCart_taxes` (
	  `id` int(11) NOT NULL auto_increment,
	  `taxName` varchar(50) NOT NULL default '',
	  `percent` decimal(7,4) NOT NULL default '0.0000',
	  KEY `id` (`id`)
	) ENGINE=MyISAM".$defCharset." AUTO_INCREMENT=1;");

	if($_POST['installCountry']=="US"){
		$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_taxes` VALUES (1, 'Standard Tax', 7.5000);");
	} elseif($_POST['installCountry']=="UK"){
		$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_taxes` VALUES (1, 'Standard Tax', 17.5000);");
	} elseif($_POST['installCountry']=="EU") {
		$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_taxes` VALUES (1, 'Standard Tax', 19.0000);");
	}
	$db->misc("INSERT INTO `".$_POST['dbprefix']."CubeCart_taxes` VALUES (2, 'Tax Exempt', 0.0000);");
?>