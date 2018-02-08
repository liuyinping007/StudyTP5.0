<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        $this->assign("name","michael");
        return $this->fetch();
    }
}
