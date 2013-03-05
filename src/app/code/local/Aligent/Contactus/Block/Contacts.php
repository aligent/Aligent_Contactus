<?php
/**
 * @description    Block to get reasons for the Contacts form
 *
 * @category    Aligent
 * @package     Aligent_Contactus
 * @copyright   Copyright (c) 2011 Aligent Consulting. (http://www.aligent.com.au)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 * @author         Luke Mills <luke@aligent.com.au>
 */

class Aligent_Contactus_Block_Contacts extends Mage_Core_Block_Template
{

    public function getReasons()
    {
        return explode('|', Mage::getStoreConfig('contacts/contacts/reasons'));
    }

}