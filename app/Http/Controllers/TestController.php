<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        // viewファイルのtests/testに飛ぶ
        return view('tests.test');
    }
}
