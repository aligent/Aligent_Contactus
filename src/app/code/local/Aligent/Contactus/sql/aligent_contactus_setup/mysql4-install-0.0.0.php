<?php
/**
 * @description Setup script to add add example reasons for contacts form.
 *
 * @category    Aligent
 * @package     Aligent_Contactus
 * @copyright   Copyright (c) 2011 Aligent Consulting. (http://www.aligent.com.au)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 * @author 		Luke Mills <luke@aligent.com.au>
 */

$setup = new Mage_Catalog_Model_Resource_Eav_Mysql4_Setup('core_setup');
$setup->startSetup();

$setup->setConfigData('contacts/contacts/reasons', 'Reason One|Reason Two|Reason Three');

$setup->endSetup();
