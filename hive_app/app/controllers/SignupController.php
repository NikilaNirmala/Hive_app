<?php
class SignupController
{
    function loadView()
    {
        include Helper::absPath('app/views/signup.view.php');
    }
    function addAccount()
    {
        $username = $this->validateInput($_POST['username'], 'username');
        $email = $this->validateInput($_POST['email'], 'email');
        $password = $this->validateInput($_POST['password'], 'password');
        $cpassword = $this->validateInput($_POST['cpassword'], 'password');
        $role = $_POST['role'];
        if ($username === false) {
            $_SESSION['Message'] =  "Invalid username.";
            $this->loadView();
        } else if ($email === false) {
            $_SESSION['Message'] = "Invalid email address.";
            $this->loadView();
        } else if (!($password === $cpassword)) {
            $_SESSION['Message'] = 'Passwords do not match.';
            $this->loadView();
        } else if ($password === false) {
            $_SESSION['Message'] = "Password must be at least 8 characters.";
            $this->loadView();
        } else {
            require Helper::absPath('app/models/User.php');
            $user = new User($username, $password, $email, $role);
            if ($user->userExists($username)) {

                $_SESSION['Message'] = 'Username is already taken!';
                $this->loadView();
            } else {
                $user->addUser();
            }
        }
    }

    function validateInput($input, $type)
    {
        $input = trim($input);

        switch ($type) {
            case 'username':
                // Allow only alphanumeric characters and underscores, 3-20 characters
                if (preg_match('/^[a-zA-Z0-9_]{3,20}$/', $input)) {
                    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
                }
                return false;

            case 'email':
                $input = filter_var($input, FILTER_SANITIZE_EMAIL);
                return filter_var($input, FILTER_VALIDATE_EMAIL) ? $input : false;

            case 'password':
                // Remove whitespace and sanitize special characters
                $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
                return strlen($input) >= 8 ? $input : false;

            default:
                return false;
        }
    }
}
