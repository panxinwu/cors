<?php
namespace app\index\controller;

class Index
{
    public function index($name = 'World')
    {
        $array = array('a'=>'bbbb','c'=>'ddddd');
        return json_encode($array);
    }
    public function userInfo()
    {
    $origin = '*';
    $request_method = $_SERVER['REQUEST_METHOD'];
 
    if ($request_method === 'OPTIONS') {
 
        header('Access-Control-Allow-Origin:'.$origin);
        header('Access-Control-Allow-Credentials:true');
        header('Access-Control-Allow-Methods:GET, POST, OPTIONS');
 
        header('Access-Control-Max-Age:1728000');
        header('Content-Type:text/plain charset=UTF-8');
        header('Content-Length: 0',true);
 
        header('status: 204');
        header('HTTP/1.0 204 No Content');
 
    }
 
    if ($request_method === 'POST') {
 
        header('Access-Control-Allow-Origin:'.$origin);
        header('Access-Control-Allow-Credentials:true');
        header('Access-Control-Allow-Methods:GET, POST, OPTIONS');
 
    }
 
    if ($request_method === 'GET') {
 
        header('Access-Control-Allow-Origin:'.$origin);
        header('Access-Control-Allow-Credentials:true');
        header('Access-Control-Allow-Methods:GET, POST, OPTIONS');
 
    }



        $array = array('userName'=>'Panda','age'=>'18', 'noPay'=>'20');
        return json_encode($array);
    }
}