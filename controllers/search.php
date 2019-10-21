<?php
require '../core/setting/Config.php';

spl_autoload_register(function ($class_name){

    if(file_exists('../core/'.$class_name.'.php')){
        require_once '../core/'.$class_name.'.php';
    }elseif (file_exists('../models/'.$class_name.'.php')){
        require_once '../models/'.$class_name.'.php';
    }

});

$validate = new Validator;
$announces = new Model;


$search = $validate->post('string');
$get = $announces->find('announces', 'title', $search);

$data = [];

if(count($get) > 0){


    foreach ($get as $value){

        $data[] = "<li><a href='/announce/{$value->id}'>$value->title</a> </li>";
    }

}else{

    $data[] = "<li class='text-danger'>No result found</li>";
}

echo json_encode($data);

