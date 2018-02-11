<?php
namespace app\home\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        dump(config("view_replace_str"));
        $this->assign("name",ROOT_PATH);
        return $this->fetch();
    }
}
