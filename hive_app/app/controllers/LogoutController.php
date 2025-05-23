<?php
class LogoutController
{

    function logout()
    {
        session_unset();
        header("location:home");
    }
}
