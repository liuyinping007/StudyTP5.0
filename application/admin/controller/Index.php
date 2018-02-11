<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
    function index()
    {
       // $request = \think\Request::instance();
       // echo $request->root() ;
       echo $_SERVER['DOCUMENT_ROOT'];
        return $this->fetch();
    }
}
