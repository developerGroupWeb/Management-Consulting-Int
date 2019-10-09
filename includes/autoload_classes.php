<?php
include 'includes/url_path.php';
include 'helpers/paginate.php';
include 'helpers/format_date.php';
include 'helpers/time_ago.php';


spl_autoload_register(function ($class){
    require_once realpath('models/'.$class.'.php');
});

$validate = new Validator;
$announces = new Model;
$counter = new CounterView;
