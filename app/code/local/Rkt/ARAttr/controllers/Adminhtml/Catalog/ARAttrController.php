<?php
/**
* Magento
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License 3.0 (OSL-3.0)
* that is bundled with this package in the file LICENSE_Rkt_ARAttr.txt.
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
* About_Rkt_ARAttr.txt in the root folder
*
*/
/**
* sizechart admin controller
*
* @category extension
* @package Rkt_ARAttr
* @author programmer_rkt
*
*/
class Rkt_ARAttr_Adminhtml_Catalog_ARAttrController extends Mage_Adminhtml_Controller_Action
{
	/**
     * Install custom attribute action
     */
    public function installAction()
    {
        
        $model = Mage::getModel('rkt_arattr/aRAttr');
        try {

            //get default attribute configurations
            $attributes = $model->getDefaultFields();

            //adding provision to change the attribute values
            Mage::dispatchEvent('rkt_arattr_my_attribute_install', array(
                'my_attributes'    => $attributes
            ));

            //create a new attribute if it does not exist !
            foreach ($attributes as $attributeCode => $fields) {
                if ($attributeCode != '' && $fields != '') {
                    if ($model->installMyAttribute($attributeCode, $fields)) {
                        Mage::getSingleton('core/session')->addSuccess('Attribute '. $attributeCode .' Created Successfully');
                    }
                     
                } else{
                    Mage::throwException('Cannot install the attribute with code '.$attributeCode, true);
                }
            }
        } catch (Mage_Core_Exception $e) {
            Mage::getSingleton('adminhtml/session')->addWarning('Oops ! Some problem occured while installing attribute');
            Mage::log('Exception :' . $e, '', 'rkt_arattr.log');
        }
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * Uninstall custom attribute action
     */
    public function removeAction()
    {
        
        $model = Mage::getModel('rkt_arattr/aRAttr');
        try {

            //get default attribute configurations
            $attributes = $model->getDefaultFields();

            //adding provision to change the attribute values
            Mage::dispatchEvent('rkt_arattr_my_attribute_remove', array(
                'my_attributes'    => $attributes
            ));

            //create a new attribute if it does not exist !
            foreach ($attributes as $attributeCode => $fields) {
                if ($attributeCode != '' && $fields != '') {
                    if ($model->removeMyAttribute($attributeCode, $fields)) {

                        Mage::getSingleton('core/session')->addSuccess('Attribute '. $attributeCode .' removed Successfully'); 
                    }
                    
                } else{
                    Mage::throwException('Cannot uninstall the attribute with code '.$attributeCode, true);
                }
            }
        } catch (Mage_Core_Exception $e) {
            Mage::getSingleton('adminhtml/session')->addWarning('Oops ! Some problem occured while removing attribute');
            Mage::log('Exception :' . $e, '', 'rkt_arattr.log'); 
        }
        $this->loadLayout();
        $this->renderLayout();
    }

}