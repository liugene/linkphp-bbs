<?php
namespace assets\controllers\main;
use linkphp\boot\Controller;
use util\sms\SendSms;
use util\curl\Curl;
use Flc\Alidayu\Client;
use Flc\Alidayu\App;
use Flc\Alidayu\Requests\AlibabaAliqinFcSmsNumSend;
use system\safe\LoginAuth;
use util\redis\Redis;
use util\sms\drives\liugene\alisms\SmsSdk;
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
