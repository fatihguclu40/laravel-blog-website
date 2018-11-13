<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'bloglar';
    protected $fillable = ['baslik','icerik','slug','yazar','etiketler','resimler[]'];
}
