<?php

namespace app\controller;

use think\facade\View;

class Error
{

    function __call($name, $arguments)
    {
        return View::fetch();
    }
}
