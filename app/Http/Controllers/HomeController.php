<?php

namespace App\Http\Controllers;

use App\Ayarlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class HomeController extends Controller
{
    public function __construct(){
        $ayarlar = Ayarlar::all();
        View::share('ayarlar',$ayarlar);
    }
    public function index()
    {
        return view('/home');
    }
}
