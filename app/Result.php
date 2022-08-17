<?php

namespace app;

use think\Response;
use think\response\Json;

class Result extends Response
{
    static function ok($data)
    {
        return Json(["data" => $data, "msg" => "ok", "success" => true]);
    }
}
