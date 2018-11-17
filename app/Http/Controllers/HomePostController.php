<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Yorum;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePostController extends HomeController
{
    public function post_blog_yorum(Request $request,$slug){
       if (Auth::check()){
           $validator=Validator::make($request->all(),[
               'icerik' => 'required'
           ]);
       }else{
           $validator=Validator::make($request->all(),[
               'isim' => 'required',
               'mail' => 'required|email',
               'icerik' => 'required'
           ]);
       }
        if ($validator->fails()) {
            return response(['durum'=>'error','baslik'=>'Hata','icerik'=>'Doldurulması Zorunlu Alanları Doldurun ']);
        }

        $kategori = explode('/',$slug);
        $request->merge(['blog'=>$kategori[count($kategori)-1]]);
        if (Auth::check()){
            $request->merge(['kullanici_id'=> Auth::user()->id]);
        }
        Yorum::create($request->all());
        return response(['durum'=>'success','baslik'=>'Başarılı','icerik'=>'Mesajınız Başarıyla Gönderildi.']);
    }
}
