<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class Cases extends Base
{
    public function index()
    {
        $info = info();
        if (!empty($info['type'])){
            if(in_array($info['type'],[1,2,3,4,5,6,7,8])){
                $type = $info['type'];
            }else{
                $type = 1;
            }
        }else{
            $type = 1;
        }
        $list = Db::name('articles')->alias('a')->join('article_img i','a.article_imgID = i.article_imgID','left')->where('a.type',$type)->order('a.orderby asc')->select();
        $type = Db::name('articles')->where('articlesID','<',9)->select();
        $this->assign('type',$type);
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
