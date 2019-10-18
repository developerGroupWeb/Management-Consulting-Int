<?php


class Request
{
    public $url,
           $view,
           $params;

    public function __construct()
    {
        $this->url = $_SERVER['REQUEST_URI'];
    }
}