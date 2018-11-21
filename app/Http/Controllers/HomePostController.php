<?php

namespace App\Http\Controllers;

use App\Anabaslik;
use App\Blog;
use App\ForumKonu;
use App\ForumYorum;
use App\Yorum;
use Carbon\Carbon;
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
    public function post_forum_konu_ekle(Request $request){

        $validator=Validator::make($request->all(),[
            'ana_baslik' => 'required',
            'baslik' => 'required',
            'icerik' => 'required'
        ]);
        if ($validator->fails()) {
            $hatalar = $validator->messages()->toJson();
            return response(['durum'=>'error','baslik'=>'Hata','icerik'=>'Doldurulması Zorunlu Alanları Doldurun ']);
        }
        try{
            $user = Auth::User()->id;
            $tarih = str_slug(Carbon::now());
            $slug = str_slug($request->baslik).'-'.$tarih;
            $request->merge(['slug'=>$slug,'yazar'=>$user]);
            ForumKonu::create($request->all());

            return response(['durum'=>'success','baslik'=>'Başarılı','icerik'=>'Kayıt Başarılı']);

        }catch (\Exception $e){
            return response(['durum'=>'error','baslik'=>'Hata','icerik'=>'Kayıt Yapılamadı.','hata'=>$e]);
        }

    }
    public function post_forum_yorum(Request $request,$slug,$ana_konu){
        if (Auth::check()){
            $validator=Validator::make($request->all(),[
                'icerik' => 'required'
            ]);
            if ($validator->fails()) {
                return response(['durum'=>'error','baslik'=>'Hata','icerik'=>'Doldurulması Zorunlu Alanları Doldurun ']);
            }
            $request->merge(['kullanici_id'=> Auth::user()->id,'forum'=>$slug]);

            ForumYorum::create($request->all());
            return response(['durum'=>'success','baslik'=>'Başarılı','icerik'=>'Mesajınız Başarıyla Gönderildi.']);
        }else{
            return view('frontend.giris-yap');
        }



    }
    public function post_konu_sil(Request $request){
        $durum=$request->durum;
        $id=$request->id;
        if ($durum=='sil'){
            try{
                ForumKonu::where('id',$id)->delete();
                return response(['durum'=>'success','baslik'=>'Başarılı','icerik'=>'Silme İşlemi Başarılı.']);
            }catch (\Exception $e){
                return response(['durum'=>'error','baslik'=>'Hata','icerik'=>'Silme İşlemi Hatalı!','hata'=>$e]);
            }
        }
        elseif ($durum == 'gizle'){
            try{
                ForumKonu::where('id',$request->id)->update(['goster'=>'0']);
                return response(['durum'=>'success','baslik'=>'Başarılı','icerik'=>'Gizleme İşlemi Başarılı.']);
            }catch (\Exception $e){
                return response(['durum'=>'error','baslik'=>'Hata','icerik'=>'Gizleme İşlemi Hatalı!','hata'=>$e]);
            }

        }
        elseif ($durum=='goster'){
            try{
                ForumKonu::where('id',$request->id)->update(['goster'=>'1']);
                return response(['durum'=>'success','baslik'=>'Başarılı','icerik'=>'İşlem Başarılı.']);
            }catch (\Exception $e){
                return response(['durum'=>'error','baslik'=>'Hata','icerik'=>'Gösterme İşlemi Hatalı!','hata'=>$e]);
            }

        }
    }
}
