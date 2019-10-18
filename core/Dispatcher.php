<?php


class Dispatcher
{
    private  $request;

    public function __construct()
    {
        $this->request = new Request();

        # Injection Request object
       Router::parse($this->request->url, $this->request);

       $view   = $this->request->view;
       $params = $this->request->params;


        $views = scandir('views');

        if(in_array($view.'.php', $views)){

            $content = "views/".$view.'.php';

        }else{
            header("Location:main.php");
        }

        if((isset($_SESSION['email']) || isset($_SESSION['password'])) && $view !== 'admin')
        {
            header("Location:?view=admin");
        }

        $controllers = scandir('controllers');

        if(in_array($view.'.php', $controllers)){

            require_once ('controllers/'.$view.'.php');
        }


        require_once ('./views/templates/base.php');

    }
}