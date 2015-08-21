# Custom-Magento-Rest-Api2
1. define module in app/etc/modules/Custom_Restapi.xml 
2. define model in app/code/local/Custom/Restapi/etc/config.xml
3. define routes in api2.xml -> app/code/local/Custom/Restapi/etc/config.xml
4. extend class age_Api2_Model_Resource in app/code/local/Custom/Restapi/Model/Api2/Restapi/Restapi.php
5. extend class Custom_Restapi_Model_Api2_Restapi in app/code/local/Custom/Restapi/Model/Api2/Restapi/Rest/Admin/V1.php
