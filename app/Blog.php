<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'bloglar';
    protected $fillable = ['baslik','icerik','slug','yazar','etiketler','resimler[]','kategori'];


// Model ilişkilendirme (veri tabanında tablo)
    public function parent(){
        // ilk kısım ilişkilendirme yapılacak model
        //ikinci kısım o modelde ilikilendirme yapılacak olan alan
        //son kısım ise şuan bulunduğunuz modeldeki ilişkilendirme yapılacak olan alan
        return $this->belongsTo('App\Kategori','kategori','id');
    }
}
