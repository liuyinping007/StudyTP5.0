<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
    function index()
    {
       // $request = \think\Request::instance();
       // echo $request->root() ;
//        echo __DIR__;
        
        return $this->fetch();
    }
    
    function welcome()
    {
        return $this->fetch();
    }
}
