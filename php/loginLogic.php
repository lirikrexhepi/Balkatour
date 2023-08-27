<?php
    require "../config.php";

    if(isset($_POST['submit']))
    {
        // Check if the keys exist in the $_POST array
        if(isset($_POST['username']) && isset($_POST['password']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if(empty($username) || empty($password))
            {
                echo "Please fill in your username and password";
            }
            else
            {
                $sql = "SELECT ID, username, fullname, password FROM users WHERE username=:username";
                $selectUser = $con->prepare($sql);
                $selectUser->bindParam(":username", $username);
                $selectUser->execute();

                $data = $selectUser->fetch();

                if($data == false)
                {
                    echo "Username <b>$username</b> doesn't exist";
                }
                else
                {
                    if(password_verify($password, $data['password']))
                    {
                        // Start the session before using session variables
                        session_start();
                        
                        $_SESSION['username'] = $data['username'];
                        $_SESSION['fullname'] = $data['fullname'];
                        header('Location: ../index.html');
                        exit; // Make sure to exit after redirecting
                    }
                    else
                    {
                        echo "Password doesn't match";
                    }
                }
            }
        }
        else
        {
            echo "Username and password keys are not set in the form submission.";
        }
    }
?>
