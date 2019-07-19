<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Librarys\Rest;

class BaseController extends Controller
{

    function __construct(Request $request)
    {
        // var_dump($request);
        // 允许跨域
        header("Access-Control-Allow-Origin: *");

        // 忽略登录接口
        $ignorePathList = array('login');
        if (!in_array($request->path(), $ignorePathList)) {
            self::checkToken($request);
        }
    }

    /**
     * header token 校验
     */
    function checkToken(Request $request)
    {
        $token = $request->header('token', '');
        if ($token == '') {
            Rest::msg(403, 'token不能为空');
        } else {
            $check_result  = self::checkTokenResult($token);
            // token 失效 跳转登录
            if (!$check_result) {
                Rest::err(403);
            }
        }
    }

    /**
     * 模拟token校验结果
     */
    function checkTokenResult($token)
    {
        if ($token != '123') {
            return false;
        } else {
            return true;
        }
    }
}
