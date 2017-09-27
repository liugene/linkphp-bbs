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
// |               框架启动调度类
// +----------------------------------------------------------------------
namespace assets\controllers\main;
use linkphp\boot\Controller;

class Forum extends Controller
{
    public function main()
    {
        $title = '社区';
        $this->assign('title',$title);
        $this->display();
    }

    public function items()
    {
        $title = '帖子详细';
        $this->assign('title',$title);
        $this->display();
    }
}