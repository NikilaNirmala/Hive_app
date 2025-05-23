<?php
class AgentRequestsController
{

    function loadView()
    {
        $this->getMemberRequests();
        include Helper::absPath('app/views/agentRequest.view.php');
    }
    function getMemberRequests()
    {
        require_once Helper::absPath('app/models/Request.php');
        $requests = Request::getRequests();
        $_SESSION['requests'] = $requests;
    }
    function deleteRequest()
    {
        require_once Helper::absPath('app/models/Request.php');
        $result = Request::removeRequest($_POST['req_id']);
        if ($result) {
            header('location:show_req');
        }
    }
}
