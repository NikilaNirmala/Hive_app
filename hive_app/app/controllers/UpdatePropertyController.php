<?php
class UpdatePropertyController
{

    function loadView()
    {
        $this->getPropertyInfo();
        include Helper::absPath('app/views/updateProperty.view.php');
    }

    function getPropertyInfo()
    {
        require_once Helper::absPath('app/models/Property.php');
        $_SESSION['property'] = Property::getProperty($_POST['product_id']);
    }

    function updatePropertyInfo()
    {
        require_once Helper::absPath('app/models/Property.php');
        require_once Helper::absPath('dbconfig.php');
        $title = $_POST['property_title'] ?? '';
        $price = $_POST['price'] ?? 1.00;
        $description = $_POST['property_description'];
        $measurement = $_POST['measurement'] ?? 1;
        $pid = $_SESSION['property']['property_ID'];
        $result = Property::updateProperty($title, $measurement, $price, $pid, $description);
        if ($result) {
            header('location:my_ads');
        }
    }
}
