Create & Remove Attribute (crerom-attribute)
=============================================

A magento extension that will allow us to create and remove any number of attributes by a single click !!!

Facts
-----

-  version: `1.0.0`
-  `extension on GitHub <https://github.com/progammer-rkt/crerom-attribute/>`
-  `direct download link <https://github.com/progammer-rkt/crerom-attribute/archive/master.zip>`

Description
-----------

This is a simple extension which will allow us to remove or create any number of product attributes by a single click.

Extension adds a new submenus under `Catalog` menu. One submenu for installing configured attribute and other one for removing configured attributes. Configured attributes means attributes which are speified inside this module. So this extension is good platform to learn how to create and remove a prodcut attribute programmatically. Inside the model of this extension, there is a protected variable which is supposed to hold array of attributes. You can edit this file and make necessary changes.

This extension only has an admin interface. If the exension is properly installed, then you can see a submenu in this format

    Catalog
    |____________ Manage My Custom Attribute
             |____________ Install My Attribute
             |____________ Uninstall My Attribute
            

When you click on `Install My Attribute`, all those attributes which are configured with this module will get created instantly. You can configure your custom attributes like this.

Open the file `app/code/local/Rkt/ARAttr/Model/ARAttr.php`. You can find a protected variable which is defined like this.

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

This is just a demo array which I put intentionally to show you how can configure your custom attributes. So this means, even if you didn't configure your own custom attributes, by default this extension will create two attributes for you. Due to this, it is very important to edit this protected variable before porforming an install/uninstall click !

In order to uninstall the attributes, you need to click on the submenu `Uninstall My Attribute`. When click on this, the extension will take  into consider the same protected variable. Suppose you need to uninstall the same attributes that we created her. Then in that case, the protected variable to should configure like this.

    /**
	 * holds default values of test attribute
	 * @var array
	 */
	 protected $_defaultFieldValues = array(
      'tar_waistlevel' => array(),
       'tar_womenssizes' => array(),
    );

Along with this, you can perform this operation by observing to events that are providing by this module. `rkt_arattr_my_attribute_install` for installing attributes and  `rkt_arattr_my_attribute_remove` for removing attributes. In both cases, you can access this protected array like this.

    public function MyObserver($observer)
    {
      $myAttributes = $observer->getEvent()->getMyAttributes();
    }


Requirements
------------

-  PHP >= 5.2.0
-  Mage\_Core

Compatibility
-------------

-  Magento 1.8, 1.9, 1.9.1.0
-  Most probably work for all version >= 1.5

Installation Instructions
-------------------------

1. Download the extension from here and unzip it.

2. Makes sure `app` folder has proper permission.

3. Go to Magento root directory and merge `app` directory there.

4. Make sure extension is installed properly by verifying through `System  >  Configuration  >  Advanced`

Uninstallation
--------------

You can uninstall the extension manually as follows

1. Go to `app/code/local/`. You can find an `Rkt` directory. Remove it.

2. Go to `app/design/adminhtml/default/default/layout/`. You will find a file `rkt_arattr.xml`. Remove it.

3. Go to `app/design/adminhtml/default/default/template/`. You will find a directory `rkt_arattr`. Remove it.

4. Finally go to `app/etc/modules`. You will find a file `Rkt_ARAttr.xml`. Remove it.

You are done.

Support
-------

If you have any issues with this extension, open an issue on
`GitHub <https://github.com/progammer-rkt/crerom-attribute/issues>`.

Contribution
------------

Any contribution is highly appreciated. The best way to contribute code
is to open a `pull request on
GitHub <https://help.github.com/articles/using-pull-requests>`.

Developer
---------

| Rajeev K Tomy (programmer-rkt)

| Official Site : `<http://rajeev-k-tomy.blogspot.in/>`

| Twitter @rajKtomy` <https://twitter.com/rajKtomy>`_

License
-------

`OSL - Open Software Licence 3.0 <http://opensource.org/licenses/osl-3.0.php>`_

Copyright
---------

|copy| 2014 Company

