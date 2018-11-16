@extends('backend.app')
@section('icerik')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Kategori Ekle</h3>
                </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <form method="post" id="form" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">Kategoriler</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="ust_kategori" id="">
                                            <option value="0">Üst Kategori</option>
                                            @foreach($kategoriler as $kategori)
                                                <option value="{{$kategori->id}}">{{$kategori->ad}}</option>
                                                @foreach($kategori->children as $altkategori)
                                                    <option value="{{$altkategori->id}}">{{$kategori->ad}}-->{{$altkategori->ad}}</option>
                                                    @foreach($altkategori->children as $altaltkategori)
                                                        <option value="{{$altaltkategori->id}}">{{$kategori->ad}}-->{{$altkategori->ad}}-->{{$altaltkategori->ad}}</option>
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{ Form::bsText('ad','Kategori Adı','',['required'=>'required']) }}



                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
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


    <script>

        $(document).ready(function(){

            $('form').validate();
            $('form').ajaxForm({
                success:function(response){


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