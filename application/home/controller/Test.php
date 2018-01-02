<?php
namespace app\home\controller;

use       think\Controller;
use       think\Db;
class Test extends Controller
{
    public function a()
    {
        $data['title'] = '商业综合体';
        $data['type'] = rand(1,8);
        $data['area'] = '100m2';
        $data['designer'] = '任建军';
        $data['team'] = '臻邸国际团队';
        $data['administer'] = '臻邸国际团队';
        $data['content'] = '工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍工程介绍';
        $data['orderby'] = rand(1,100);
        $data['time'] = time();
        $data['deleting'] = 1;
        $data['article_imgID'] = 1;
        for ($x=1; $x<=10; $x++) {
            $re = Db::name('articles')->insert($data);
            $a[] = $re;
        }
        return $a;
    }
}
