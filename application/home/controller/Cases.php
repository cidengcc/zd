<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class Cases extends Base
{
    public function index()
    {
        $list = Db::name('articles')->select();
        $this->assign('list',$list);
        return $this->fetch();
    }

    /**
     * 案例详情
     */
    public function case_detail()
    {
        $info = info();
        $where['articlesID'] = $info['articlesID'];
        $list = Db::name('articles')->where($where)->find();
        $img = Db::name('article_img')->where($where)->find();
        $this->assign('img',$img);
        $this->assign('list',$list);
        return $this->fetch();
    }
}
