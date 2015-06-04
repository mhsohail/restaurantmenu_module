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

class Livetameion_Restaurant_Model_Resource_Setup extends Mage_Eav_Model_Entity_Setup {
	
	public function getDefaultEntities() {
		return array(
			Livetameion_Restaurant_Model_Menu::ENTITY => array(
				'entity_model' => 'restaurant/menu',
				'table' => 'restaurant/menu', /* Maps to the config.xml > global > models > restaurant_resource > entities > menu */
				'attributes' => array(
					'menu_title' => array(
						'type' => 'varchar',
						'label' => 'Menu Title',
                        'input' => 'text',
                        'required' => false,
                        'sort_order' => 10,
                        'position' => 10,
                        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    ),                     
                    'menu_type' => array(
                        'type' => 'varchar',
                        'label' => 'Menu Type',
                        'input' => 'text',
                        'required' => false,
                        'sort_order' => 20,
                        'position' => 20,
                        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    ),  
                    'menu_category' => array(
                        'type' => 'varchar',
                        'label' => 'Menu Category',
                        'input' => 'text',
                        'required' => false,
						'sort_order' => 30,
                        'position' => 30,
                        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    ),
                )
            )
        );
    }
	
}
