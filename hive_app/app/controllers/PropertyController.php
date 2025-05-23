<?php
class PropertyController
{
    function loadView()
    {
        $this->loadProperties();
        include Helper::absPath('app/views/properties.view.php');
    }

    function loadProperties()
    {
        require_once Helper::absPath('app/models/Property.php');
        $_SESSION['props'] = Property::getAllProperties();
    }

    function loadSearchResults()
    {
        require_once Helper::absPath('app/models/Property.php');
        $_SESSION['props'] = Property::filterProperties($_POST['search_word']);
        include Helper::absPath('app/views/properties.view.php');
    }
}
