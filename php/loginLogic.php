<?php
    require "../config.php";

    $userErr = $passErr = '';
    if(isset($_POST['action']) && $_POST['action'] == 'login'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE userType=1 AND username=:username";
        $prep = $con->prepare($sql);
        $prep->bindParam(':username', $username);
        $prep->execute();
        
        $data = $prep->fetch(PDO::FETCH_ASSOC);

        if(!$data){
            $userErr = 'username error';
        } else{
            $userErr = '';

            if(!password_verify($password, $data['password'])){
                $passErr = 'pass error';
            } else{
                $passErr = '';
                if(!$data['verified']){
                    $_SESSION['verify'] = $username;
                    $userErr = 'account not verified';
                } else{
                    $_SESSION['user'] = $username;
                    $userErr = '';
                }
            }
        }

        
        $response = [$userErr, $passErr];
        
        if($userErr == '' && $passErr == ''){
            $response = [$userErr, $passErr, 'logged'];
        } else{
            $response = [$userErr, $passErr];
        }

        echo json_encode($response);
    }