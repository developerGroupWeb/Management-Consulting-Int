<?php
spl_autoload_register(function ($class_name){

    if(file_exists('../core/'.$class_name.'.php')){
        require_once '../core/'.$class_name.'.php';
    }elseif (file_exists('../Models/'.$class_name.'.php')){
        require_once '../Models/'.$class_name.'.php';
    }

});

$validate = new Validator;
$announces = new Model;


if(!empty($_POST['submit'])){


    $err = [];
    $messages = [];

    $messages['id'] = date('dmYHis');
    $messages['first']   = $validate->post('first_name');
    $messages['last']    = $validate->post('last_name');
    $messages['email']   = $validate->post('email');
    $messages['subject'] = $validate->post('subject');
    $messages['message'] = $validate->post('message');
    $messages['date'] = date('d-m-Y H:i:s');



    //if($validate->success() == true){

        //Data base name
        $base = '../data/messages.json';

        // I retrieve all messages json
        $data = file_get_contents($base);

        //I convert the Json into a table so I can add a new mew message
        $data = json_decode($data, true);
        $data[] = $messages;

        //Convert back to Json
        $data = json_encode($data);
        file_put_contents($base, $data);

        $err['success'] = "Your message has been sent";
    }

    echo json_encode($err);
//}