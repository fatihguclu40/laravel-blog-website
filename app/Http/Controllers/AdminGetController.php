<?php

namespace App\Http\Controllers;


use App\Ayarlar;
use App\Blog;
use App\Hakkimizda;

class AdminGetController extends AdminController
{
    public function get_index(){
        return view('backend.index');
    }
    public function get_ayarlar(){

        $ayarlar = Ayarlar::where('id',1)->select('ayarlar.*')->first();
        return view('backend.ayarlar')->with('ayarlar',$ayarlar);

    }
    public function get_hakkimizda(){
        $hakkimizda = Hakkimizda::where('id',1)->select('hakkimizda.*')->first();
        return view('backend.hakkimizda')->with('hakkimizda',$hakkimizda);
    }
    public function get_blog(){

        $bloglar = Blog::all();
        return view('backend.blog')->with('bloglar',$bloglar);
    }
    public function get_blog_ekle(){
        return view('backend.blog-ekle');
    }
    public function get_blog_duzenle($slug){
        $bloglar = Blog::where('slug',$slug)->first();
        return view('backend.blog-duzenle')->with('bloglar',$bloglar);
    }
}
