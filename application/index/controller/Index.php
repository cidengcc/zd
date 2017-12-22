<?php
namespace app\index\controller;

use think\Db;

class Index extends  Base
{
    public function index()
    {
        //$a = Db::name('about')->select();
        //dump($a);
        //$this->assign('a','你好');
        return $this->fetch();
    }
}
