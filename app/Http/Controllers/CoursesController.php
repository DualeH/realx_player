<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;

class CoursesController  extends BaseController
{
    public function index() {
        return view('courses.index');
    }

    public function lesson() {

    }
}