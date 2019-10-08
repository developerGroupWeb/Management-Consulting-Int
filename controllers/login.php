<?php

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])){

    $log = $validate->email_or_phone('email_or_phone');
    $pass = $validate->password('password');

    if($validate->success() == true){


        $result = $announces->get('admins', ['user_name', '=', $log]);

        if($result->count() === 0){
            $validate->flash['row_email'] = 'This email or number does not correspond to a user';
        }else{

            $result = $announces->builderGet('admin', ['admin', '=', $log, 'and', 'pass', '=', $pass]);

            if($result->count() == 0){
                $validate->flash['row_email'] = 'Your password is incorrect';
            }else{

                $_SESSION['email'] = $log;
                $_SESSION['password'] = $pass;
                header('Location:?view=profile');
            }
        }


    }
}