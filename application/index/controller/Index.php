<?php
namespace app\index\controller;

use think\Env;

class Index extends \think\Controller
{
    public function index()
    {
    	dump(model('manage_config')->get());
    }
}
