<?php
class Custom_Restapi_Model_Api2_Restapi_Rest_Admin_V1 extends Custom_Restapi_Model_Api2_Restapi
{

    public function _create(array $data) {

        $firstName = $data['firstname'];
        $lastName = $data['lastname'];
        $email = $data['email'];
        $password = $data['password'];

        $customer = Mage::getModel("customer/customer");

        $customer->setFirstname($firstName);
        $customer->setLastname($lastName);
        $customer->setEmail($email);
        $customer->setPasswordHash(md5($password));
        $customer->save();

        return $this->_getLocation($customer);
    }

    public function _retrieve() {
        //        in api2.xml <route>/customer/:id</route>
        $id = (int)$this->getRequest()->getParam('id');
        return json_encode(array("testing",$id));
    }

    public function _retrieveCollection() {
        $configValue = Mage::getStoreConfig('sectionName/groupName/fieldName');
        var_dump($configValue);
//        return json_encode(array(
//            'result' =>array("testing" => "Success", "good" => "no good")
//        ));
    }

    public function _update() {

    }

    public function _multiUpdate() {

    }

    public function _delete() {

    }

    public function _multiDelete() {

    }

}
