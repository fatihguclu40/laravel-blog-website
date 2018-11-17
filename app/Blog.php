<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'bloglar';
    protected $fillable = ['baslik','icerik','slug','yazar','etiketler','resimler[]','kategori'];


// Model ilişkilendirme (veri tabanında tablo)

    public function parent(){
        return $this->belongsTo('App\Kategori','kategori','id');
    }

    public function yorumlar(){
        return $this->hasMany('App\Yorum','blog','slug');
    }
    public function user(){
        return $this->hasOne('App\User','id','yazar');
    }
}
