Magento 2 Custom Tab
==============================

Custom Tab extension for Magento 2 allow to add product disclaimer from admin section on product view page. 

Features
==============================
->Admin can enable module from admin configuraton.
->Admin can set product disclaimer text in admin.
->product disclaimer can be visible on product detail page.


# Module Instruction
->Go to stores->configuration->custom tab->general->Module Enable ->YES
->Go to stores->configuration->custom tab->general->Display Product Text ->Add product disclaimer text here->save configuration
->clear cache after configuration save.


# Installation Instruction

* Copy the content to the Magento 2 `app/code/Custom/Tab`
* Run command:
<b>php bin/magento setup:upgrade</b>
* Run command:
<b>php bin/magento setup:di:compile</b>
* Run Command:
<b>php bin/magento setup:static-content:deploy -f</b>
* Now Flush Cache: <b>php bin/magento cache:flush</b>
