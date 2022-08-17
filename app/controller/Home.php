<?php

namespace app\controller;

use think\facade\View;

class Home
{
    public function hello()
    {
        return View::fetch();
    }
}
