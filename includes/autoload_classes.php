<?php
include 'includes/url_path.php';
include 'helpers/paginate.php';
include 'helpers/format_date.php';


spl_autoload_register(function ($class){
    require_once realpath('models/'.$class.'.php');
});

$validator = new Validator;
$announces = new Announces;
