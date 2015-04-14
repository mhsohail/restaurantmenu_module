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
	ALTER TABLE {$this->getTable('restaurant/item')}
	ADD COLUMN `category` VARCHAR(255) NOT NULL AFTER `price`;");

$installer->endSetup();
