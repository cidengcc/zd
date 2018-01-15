<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;

class Index extends Base
{
    public function index()
    {
        $gongsi = Db::name('about')->where('aboutID',1)->find();
        $this->assign('gongsi',$gongsi);
//        $card_number = Db::name('Card')->alias('c')->join('user u','c.userID = u.userID','left')->where($where)->find();

        $list1 = Db::name('articles')->alias('a')->join('article_img i','a.article_imgID = i.article_imgID','left')->where('a.orderby',1)->select();
        $this->assign('list1',$list1);
        $list2 = Db::name('articles')->alias('a')->join('article_img i','a.article_imgID = i.article_imgID','left')->limit(8)->order('a.orderby asc')->select();
        $this->assign('list2',$list2);
        return $this->fetch();

    }


}
