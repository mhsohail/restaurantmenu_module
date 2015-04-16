<?php
/**
 * Livetameion Restaurant Plugin
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * It is available on the World Wide Web at:
 * http://opensource.org/licenses/osl-3.0.php
 * If you are unable to access it on the World Wide Web, please send an email
 * To: javed.alam@cwsinfotech.com.  We will send you a copy of the source file.
 *
 * @category   Restaurant Plugin
 * @package    Livetameion_Restaurant
 * @copyright  Copyright (c) 2014 Livetameion Technology Pvt. Ltd., India
 *             http://www.cwstechnology.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author     Javed Alam <javed.alam@cwsinfotech.com>
 */

/*
getTable('module_alias/table_tag')
table_tag is defined in <entities> tag in etc/config.xml file like below
so in this case, it should be getTable('module_alias/menu') or getTable('module_alias/item')
<entities>
	<menu>
		<table>restaurant_menu</table>
    </menu>
	<item>
		<table>restaurant_menu_item</table>
	</item>
</entities>
*/ 

$installer = $this;
$installer->startSetup();
$installer->run("    
-- DROP TABLE IF EXISTS {$this->getTable('restaurant/menu')};
CREATE TABLE {$this->getTable('restaurant/menu')} (
	`restaurantmenu_id` int(11) NOT NULL AUTO_INCREMENT,
	`merchant_id` int(11) NOT NULL,
	`createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`modifieddate` datetime NOT NULL,
	PRIMARY KEY (`restaurantmenu_id`)
)
ENGINE = InnoDB;"
);

$installer->run("    
-- DROP TABLE IF EXISTS {$this->getTable('restaurant/item')};
CREATE TABLE {$this->getTable('restaurant/item')} (
	`item_id` int(11) NOT NULL AUTO_INCREMENT,
	`restaurantmenu_id` int(11) NOT NULL,
	`name` varchar(255) NOT NULL,
	`image` varchar(255) NOT NULL,
	`price` int(11) NOT NULL,
	`createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`modifieddate` datetime NOT NULL,
	PRIMARY KEY (`item_id`)
)
ENGINE = InnoDB;"
);

// add foreign key constraints
$installer->run("
ALTER TABLE {$this->getTable('restaurant/item')}
ADD CONSTRAINT `fk_restaurant_menu_item_id_restaurant_menu_id`
FOREIGN KEY (`restaurantmenu_id`) REFERENCES `restaurant_menu`(`restaurantmenu_id`) ON UPDATE CASCADE ON DELETE CASCADE;");
  
$installer->endSetup();
