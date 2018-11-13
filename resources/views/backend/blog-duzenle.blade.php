@extends('backend.app')
@section('icerik')
    @php
        $sayi =1;
    @endphp
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Blog Düzenle</h3>
                </div>


            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">

                            <div class="row">

                                @php
                                    $sira=1;
                                @endphp
                                @foreach($resimler=Storage::disk('uploads')->files('img/blog/'.$bloglar->slug) as $resim)
                                    <div class="col-md-55" id="resim{{$sira}}">
                                        <div class="thumbnail">
                                            <div class="image view view-first">
                                                <img style="width: 100%; display: block;" src="/uploads/{{$resim}}"
                                                     alt="image"/>
                                                <div class="mask">
                                                    <p>&nbsp;</p>
                                                    <a onclick="sil('{{$sira}}','{{$resim}}')" class="btn btn-danger"><i
                                                                class="fa fa-times"></i></a>
                                                    <div class="tools tools-bottom">
                                                        <form action="" id="form" method="post">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="resim" value="{{$resim}}">
                                                            <button type="submit" class="btn btn-danger"></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $sayi++;
                                        $sira++;
                                    @endphp
                                @endforeach

                            </div>

                            <form method="post" id="form" data-parsley-validate class="form-horizontal form-label-left"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">Yeni Resim
                                        Ekle</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" name="resimler[]" multiple
                                               class="form-control col-md-7 col-xs-12 ">
                                    </div>
                                </div>
                                {{ Form::bsText('baslik','Başlık *',$bloglar->baslik,['required'=>'required']) }}
                                {{ Form::bsText('etiketler','Etiketler *',$bloglar->etiketler,['required'=>'required']) }}
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                           for="last_name">İçerik *</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="icerik" class="form-control col-md-7 col-xs-12 ckeditor"
                                                  cols="30" rows="10" required>
                                            {{$bloglar->icerik}}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <input type="hidden" name="sayi" value="{{$sayi}}">
                                        <button type="submit" class="btn btn-success">Kaydet</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="/css/sweetalert2.min.css">
@endsection

@section('js')

    <script type="text/javascript" src="/js/jquery.form.min.js"></script>
    <script type="text/javascript" src="/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/js/messages_tr.min.js"></script>
    <script type="text/javascript" src="/js/sweetalert2.min.js"></script>
    <script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="/js/ckeditor/config.js"></script>

    <script>

        function sil(r, resim) {
            var sira = r;
            console.log(sira);
            swal({
                title: "Silmek istediğinizden emin misiniz?",
                text: "Sildiğinizde geri dönüşüm olmayacaktır.",
                type: "warning",
                showCancelButton: true,
                cancelButtonText: 'İptal',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet, Sil!'
            }).then(function () {
                //var CSRF_TOKEN=$('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "Post",
                    url: '',
                    data: {
                        'resim': resim,
                        "_token": "{{ csrf_token() }}",
                    },
                    beforeSubmit: function () {
                        swal({
                            title: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Loading...</span>',
                            text: 'Yükleniyor lütfen beyleyiniz...',
                            showConfirmButton: false
                        })
                    },
                    success: function (response) {
                        if (response.durum == "success") {
                            document.getElementById("resim" + sira).remove();
                        }
                        swal(
                            response.baslik,
                            response.icerik,
                            response.durum
                        );
                    }
                })
            })
        }﻿
    </script>

    <script>

        $(document).ready(function () {

            $('form').validate();
            $('form').ajaxForm({
                beforeSubmit: function () {
                    swal({
                        title: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Loading...</span>',
                        text: 'Yükleniyor Bekleyiniz...',
                        showConfirmButton: false
                    })

                },

                beforeSerialize: function () {
                    for (instance in CKEDITOR.instances) CKEDITOR.instances[instance].updateElement();
                },
                success: function (response) {


                    swal({

                        type: response.durum,
                        title: response.baslik,
                        text: response.icerik,
                        showConfirmButton: true

                    })

                }

            });
        });


    </script>
@endsection