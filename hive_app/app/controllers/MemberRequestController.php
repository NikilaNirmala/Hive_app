<?php
class MemberRequestController
{
    function loadView()
    {

        include Helper::absPath('app/views/memberRequestAgent.view.php');
    }

    function createRequest()
    {
        require_once Helper::absPath('app/models/Request.php');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $request = new Request($name, $email, $title, $description);
        $result = $request->addRequest();
        if ($result) {
            $_SESSION['Message'] = 'Message successfully sent to agents!';
            header('location:request_agent');
        } else {
            return false;
        }
    }
}
