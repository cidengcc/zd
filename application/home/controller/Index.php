<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;

class Index extends Base
{
    public function index()
    {
        $gongsi = Db::name('about')->where('aboutID',1)->find();
        //dump($a);
        $this->assign('gongsi',$gongsi);
        return $this->fetch();

    }
}
