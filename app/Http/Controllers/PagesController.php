<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function shop()
    {
        return view('pages.shop');
    }
    public function order()
    {
        return view('pages.order');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
