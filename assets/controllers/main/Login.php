<?php

// +----------------------------------------------------------------------
// | LinkPHP [ Link All Thing ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 http://linkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liugene <liujun2199@vip.qq.com>
// +----------------------------------------------------------------------
// |               配置类
// +----------------------------------------------------------------------
namespace assets\controllers\main;
use linkphp\boot\Controller;

class login extends Controller
{
    public function main()
    {
        $title = '登入';
        $this->assign('title',$title);
        $this->display();
    }

    public function register()
    {
        $title = '注册';
        $this->assign('title',$title);
        $this->display();
    }
}