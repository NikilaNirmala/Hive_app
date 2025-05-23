<?php
class MemberAdsController
{

    function loadView()
    {
        $this->getMyAds();
        include Helper::absPath('app/views/memberAds.view.php');
    }

    function getMyAds()
    {
        require_once Helper::absPath('app/models/Property.php');
        $_SESSION['myAds'] = Property::getUserProperties($_SESSION['ID']);
    }
}
