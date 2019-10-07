<?php
spl_autoload_register(function ($class){
    require_once ('../models/'.$class.'.php');
});
$counter = new CounterView;

echo $view = $counter->number_views('1254784');
//echo json_encode($view);