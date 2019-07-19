<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Http\Librarys\Rest;

class UserController extends BaseController{

    public function index () {

        Rest::msg(200, 'Token生效中');
    }
}