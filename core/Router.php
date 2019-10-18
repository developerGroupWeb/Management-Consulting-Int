<?php


class Router
{
    /**
     * @param $url
     * @param $request
     * @return bool
     *  Allows parser url to be retrieved by the Request object to Dispatcher object
     */
    static function parse($url, $request){

        $url = filter_var(trim($url, '/'),FILTER_SANITIZE_URL);

        $params = explode('/', $url);

        $request->view = $params[0];
        $request->params = array_slice($params, 1);

        return true;
    }
}