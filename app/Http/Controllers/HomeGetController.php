<?php

namespace App\Http\Controllers;

use App\Ayarlar;
use App\Blog;
use App\Hakkimizda;
use App\Kategori;
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
        $kategoriler =Kategori::where('ust_kategori','0')->get();
        $bloglar = Blog::orderBy('id','desc')->get();
        return view('frontend.blog')->with('bloglar',$bloglar)->with('kategoriler',$kategoriler);
    }
    public function get_blog_icerik($slug){

        $kategori = explode('/',$slug);
        $kategoriler =Kategori::where('ust_kategori','0')->get();
        $blog = Blog::where('slug',$kategori[count($kategori)-1])->first();
        if (isset($blog)){
            return view('frontend.blog-detay')->with('blog',$blog)->with('kategoriler',$kategoriler)->with('blog-kategori',$kategori);
        }else{
            $s = $kategori[count($kategori)-1];
            $b = Kategori::where('slug',$s)->get();
            $bloglar = $b[0]->bloglar;
            return view('frontend.blog')->with('bloglar',$bloglar)->with('kategoriler',$kategoriler);
        }
    }
}
