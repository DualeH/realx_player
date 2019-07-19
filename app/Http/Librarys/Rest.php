<?php

namespace App\Http\Librarys;

/**
 * Response 响应类
 */
class Rest
{

    static function data($data = array(), $message = '')
    {
        self::_out(200, $message, $data);
    }

    static function msg($code = 200, $message = '')
    {
        self::_out($code, $message);
    }

    static function err($code = 200)
    {
        self::_out($code, self::_getCodeMsg($code));
    }

    static private function _out($code, $message = '', $data = array())
    {
        header("Content-Type: application/json");
        $array = array(
            'code'  =>  $code,
            'msg'   =>  $message,
            'data'  =>  $data
        );
        echo json_encode($array);
        exit;
    }

    static private function _getCodeMsg($code = 0)
    {
        $codeMsgArr = array(

            '200'       =>  '成功',

            '403'       =>  '用户身份失效',
        );

        if (empty($codeMsgArr[$code])) {
            return '';
        } else {
            return $codeMsgArr[$code];
        }
    }
}
