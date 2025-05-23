<?php
class AdminMemberManageController
{
    function loadView()
    {
        $this->loadMemberInfo();
        include Helper::absPath('app/views/adminMemberManage.view.php');
    }

    function loadMemberInfo()
    {
        require_once Helper::absPath('app/models/User.php');
        $_SESSION['user_info']  = User::getUsers();
    }

    function blockUser()
    {
        require_once Helper::absPath('app/models/User.php');
        $user_id = $_POST['uid'];
        User::updateToBlock($user_id);
        header("location:member_manage");
    }

    function unblockUser()
    {

        require_once Helper::absPath('app/models/User.php');
        $user_id = $_POST['uid'];
        User::updateToActive($user_id);
        header("location:member_manage");
    }
}
