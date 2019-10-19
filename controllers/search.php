<?php
require '../core/setting/config.php';

spl_autoload_register(function ($class_name){

    if(file_exists('../core/'.$class_name.'.php')){
        require_once '../core/'.$class_name.'.php';
    }elseif (file_exists('../Models/'.$class_name.'.php')){
        require_once '../Models/'.$class_name.'.php';
    }

});

$validate = new Validator;
$announces = new Model;


$search = $validate->post('string');
$get = $announces->get('announces', ['id' => $search]);
$response = $get->results();

$data = [];
foreach ($response as $value){
    $data[] = $value->title;
}


echo json_encode($data);