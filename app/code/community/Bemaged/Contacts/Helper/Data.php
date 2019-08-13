<?php
/**
 * Bemaged_Contacts
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * http://opensource.org/licenses/OSL-3.0
 *
 * @package      Bemaged_Contacts
 * @copyright    Copyright (c) 2015 Matthijs IJsseldijk (http://www.bemaged.com)
 * @author       Matthijs IJsseldijk <hello@bemaged.com>
 * @license      http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

/**
 * Class Bemaged_Contacts_Helper_Data
 */
class Bemaged_Contacts_Helper_Data extends Mage_Contacts_Helper_Data
{
    /**
     * Config paths for using throughout the code
     */
    const XML_PATH_MAPURL       = 'bemaged_contacts/settings/map';

    /**
     * Get Map URL
     *
     * @param string $store
     * @return string
     */
    public function getMapUrl($store = null)
    {
        return Mage::getStoreConfig(self::XML_PATH_MAPURL, $store);
    }
}