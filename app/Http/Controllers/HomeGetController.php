<?php

namespace App\Http\Controllers;

use App\Ayarlar;
use App\Blog;
use App\Hakkimizda;
use Illuminate\Http\Request;

class HomeGetController extends HomeController
{
    public function get_index(){
        return view('frontend.index');
    }
    public function get_index_yonlendir (){
        return redirect('/');
    }

    public function get_iletisim(){
        $ayarlar = Ayarlar::where('id',1)->select('ayarlar.*')->first();
        return view('frontend.iletisim')->with('ayarlar',$ayarlar);
    }

    public function get_hakkimizda(){
        $hakkimizda = Hakkimizda::where('id',1)->select('hakkimizda.*')->first();
        return view('frontend.hakkimizda')->with('hakkimizda',$hakkimizda);

    }
    public function get_blog(){
        $bloglar = Blog::orderBy('id','desc')->get();
        return view('frontend.blog')->with('bloglar',$bloglar);
    }
    public function get_blog_icerik($slug){
        $blog = Blog::where('slug',$slug)->first();
        return view('frontend.blog-detay')->with('blog',$blog);
    }
}
