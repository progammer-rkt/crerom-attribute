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
* ARAttr Model
*
* @category extension
* @package Rkt_ARAttr
* @author programmer_rkt
*
*/

class Rkt_ARAttr_Model_ARAttr extends Mage_Core_Model_Abstract
{
	/**
	 * holds default values of test attribute
	 * @var array
	 */
	protected $_defaultFieldValues = array(
      'tar_waistlevel' => array(
                    'group' => 'Tarseam Women\'s Slopers', 
                    'type' => 'int',
                    'attribute_set' =>  'Tarseam Women\'s Slopers Attributes', 
                    'backend' => '',
                    'frontend' => '',
                    'label' => 'Tar Waist Level',
                    'input' => 'select',
                    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    'visible' => true,
                    'required' => false,
                    'user_defined' => true,
                    'default' => '-1',
                    'searchable' => false,
                    'filterable' => false,
                    'comparable' => false,
                    'visible_on_front' => true,
                    'visible_in_advanced_search' => false,
                    'used_in_product_listing' => false,
                    'unique' => false,
                    'source' => 'rkt_arattr/aRAttr_source_attribute_demo' 
        ),
      'tar_womenssizes' => array(
                    'group' => 'Tarseam Women\'s Slopers', 
                    'type' => 'int',
                    'attribute_set' =>  'Tarseam Women\'s Slopers Attributes', 
                    'backend' => '',
                    'frontend' => '',
                    'label' => 'Tar Women Sizes',
                    'input' => 'select',
                    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
                    'visible' => true,
                    'required' => false,
                    'user_defined' => true,
                    'default' => '-1',
                    'searchable' => false,
                    'filterable' => false,
                    'comparable' => false,
                    'visible_on_front' => true,
                    'visible_in_advanced_search' => false,
                    'used_in_product_listing' => false,
                    'unique' => false,
                    'source' => 'rkt_arattr/aRAttr_source_attribute_demo' 
        ),
  );
    
    /**
     * constructor
     */
    public function _construct()
    {
        $this->_init('catalog/attribute');
    }

   	/**
    * Use to add an attribute
    * @param  string $code   attribute code
    * @param  array $fields  attribute fields
    * @return mixed     
    */
   	public function installMyAttribute($code, $fields)
   	{
   		if ($code != '') {
   			$resource = Mage::getModel('eav/entity_setup','core_setup');;
   			$entityType = Mage_Catalog_Model_Product::ENTITY;
        $attr = Mage::getModel('catalog/resource_eav_attribute')->loadByCode($entityType,$code);
        if ((int)$attr->getId() > 0) {
          Mage::throwException('Attribute'. $code .' with given code already exists !', true);
   			
        } else {
          
   				$resource->startSetup();
          $resource->addAttribute($entityType, $code, $fields);
          $resource->endSetup();
          return true;
   			}
   		}
   }

   public function removeMyAttribute($code, $fields)
   {
      if ($code != '') {
        $resource = Mage::getModel('eav/entity_setup','core_setup');;
        $entityType = Mage_Catalog_Model_Product::ENTITY;
        $attr = Mage::getModel('catalog/resource_eav_attribute')->loadByCode($entityType,$code);
        if ((int)$attr->getId() > 0) {
           $resource->startSetup();
          $resource->removeAttribute($entityType, $code);
          $resource->endSetup();
          return true;
        
        } else {
          Mage::throwException('Attribute '. $code .' to remove does not exists !', true);          
         
        }
      }
   }

   /**
    * Use to get default fields
    * @return array attribute fields
    */
   public function getDefaultFields()
   {
   		return $this->_defaultFieldValues;
   }

   /**
    * provide resourece
    * @return object Mage_Catalog_Model_Product_Resource_Setup
    */
   protected function _resource()
   {
   		return $this->getResource();
   }
}
