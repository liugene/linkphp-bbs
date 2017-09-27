<?php
namespace assets\controllers\main;
use linkphp\boot\Controller;
class Home extends Controller
{
	public function main()
    {
        //phpinfo();
        $title = 'linkphp';
        $this->assign('title',$title);
		$this->display();
	}
}
