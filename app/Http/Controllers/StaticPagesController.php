<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IndexModel as IndexModel;
class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static_pages/home');
    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function about()
    {
        return view('static_pages/about');
    }

    public function ceshi_page(){
        return view('static_pages/ceshi_page');
    }
}
