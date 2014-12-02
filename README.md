Create & Remove Attribute (crerom-attribute)
=============================================

A magento extension that will allow us to create and remove any number of attributes by a single click !!!

Facts
-----

-  version: 1.0.0
-  `extension on
   GitHub <https://github.com/progammer-rkt/crerom-attribute/>`
-  `direct download
   link <https://github.com/progammer-rkt/crerom-attribute/archive/master.zip>`_

Description
-----------

This is a simple extension which will allow us to remove or create any number of product attributes by a single click.

Extension adds a new submenus under `Catalog` menu. One submenu for installing configured attribute and other one for removing configured attributes. Configured attributes means attributes which are speified inside this module. So this extension is good platform to learn how to create and remove a prodcut attribute programmatically. Inside the model of this extension, there is a protected variable which is supposed to hold array of attributes. You can edit this file and make necessary changes.



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
GitHub <https://help.github.com/articles/using-pull-requests>`_.

Developer
---------

| Rajeev K Tomy (programmer-rkt)

|  Official Site : `<http://rajeev-k-tomy.blogspot.in/>`_
|  Twitter @rajKtomy` <https://twitter.com/rajKtomy>`_

License
-------

`OSL - Open Software Licence
3.0 <http://opensource.org/licenses/osl-3.0.php>`_

Copyright
---------

|copy| 2014 Company

