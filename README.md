Magento 2 Custom Product
==============================

Custom Product extension for Magento 2 allow to add,delete,update from admin end.This also allow to perform respective action via Api.

Features
==============================

<ul>
<li>Admin can add,edit,delete</li>
<li>Admin can set store view for specific products.</li>
<li>Admin can also set USER permission for this module</li>
  <ul>
    <li>Api Features:</li>
    <li>save product End point: POST {store-url}/rest/V1/custom-product/product</li>
    <li>Get list of product by search criteria End point: GET {store-url}}/rest/V1/custom-product/product/search/? searchCriteria[filter_groups][0][filters][0][field]=product_id& searchCriteria[filter_groups][0][filters][0][value]=33</li>
    <li>Get product by ID End point: GET {store-url}/rest/V1/custom-product/product/:productId</li>
    <li>Update product by product id End point: GET {store-url}/rest/V1/custom-product/product/:productId</li>
    <li>Delete product by product id End point: DELETE {store-url}/rest/V1/custom-product/product/:productId</li>
  </ul>



# Installation Instruction

* Copy the content of the repo to the Magento 2 `app/code/Custom/Product`
* Run command:
<b>php bin/magento setup:upgrade</b>
* Run command:
<b>php bin/magento setup:di:compile</b>
* Run Command:
<b>php bin/magento setup:static-content:deploy -f</b>
* Now Flush Cache: <b>php bin/magento cache:flush</b>
