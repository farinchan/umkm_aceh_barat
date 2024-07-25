<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'menu' => 'home',
            'submenu' => ''
        ];
        return view('front.pages.home.index', $data);
    }
}
