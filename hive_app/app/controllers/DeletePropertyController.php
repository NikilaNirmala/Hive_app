<?php
class DeletePropertyController
{

    function deleteProperty()
    {
        require_once Helper::absPath('app/models/Property.php');
        require_once Helper::absPath('dbconfig.php');
        $pid = $_POST['property_ID'];

        Property::deleteProperty($pid);
        header('location:my_ads');
    }
}
