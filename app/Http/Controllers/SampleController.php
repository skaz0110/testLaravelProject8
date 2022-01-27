<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    // ここから追加
    public function index()
    {
        return view('sample');
    }
}
