<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function main() {
    	return view('main-test');
    }

    public function dashboard() {
    	return view('dashboard');
    }
}
