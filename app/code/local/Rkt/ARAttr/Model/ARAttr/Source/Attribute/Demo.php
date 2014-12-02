<?php
/**
* Magento
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License 3.0 (OSL-3.0)
* that is bundled with this package in the file LICENSE_rkt_arattr.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to rajeevphpdeveloper@gmail.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* This extension is only be used with Magento. It is used to change Magento's
* custom behaviour. To get more details on what this module does, please have a look on
* About_rkt_arattr.txt in the root folder
*
*/
/**
* ARAttr product attribute source
*
* @category extension
* @package rkt_arattr
* @author programmer_rkt
*
*/

class Rkt_ARAttr_Model_ARAttr_Source_Attribute_Demo 
    extends Mage_Eav_Model_Entity_Attribute_Source_Abstract {

    /**
     * Use to create options for product attribute 
     *
     * @return array
     */
    public function getAllOptions()
    {
        if (is_null($this->_options)) {
            $this->_options = array(
                array(
                    'label' => Mage::helper('rkt_arattr')->__('..Select Demo Values..'),
                    'value' => -1,
                ),
                array(
                    'label' => Mage::helper('rkt_arattr')->__('Demo Value 1'),
                    'value' => 1
                ),
                array(
                    'label' => Mage::helper('rkt_arattr')->__('Demo Value 2'),
                    'value' => 2
                ),
                array(
                    'label' => Mage::helper('rkt_arattr')->__('Demo Value 3'),
                    'value' => 3
                ),
                array(
                    'label' => Mage::helper('rkt_arattr')->__('Demo Value 4'),
                    'value' => 4
                ),
            );
        }
        return $this->_options;
    }
 
    /**
     * Use to return options for product attribute
     *
     * @return array
     */
    public function toOptionArray()
    {
        return $this->getAllOptions();
    }
}