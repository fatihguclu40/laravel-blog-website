@extends('backend.app')
@section('icerik')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Ana Sayfa</h3>
                </div>


            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">
                            <form method="post" id="form" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                            {{csrf_field()}}
                                {{ Form::bsText('baslik','Başlık *','',['required'=>'required']) }}
                                {{ Form::bsText('kisa_aciklama','Kısa Açıklama *','',['required'=>'required']) }}
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
                            if (response.durum=='success'){
                                document.getElementById('form').reset();
                            }


                        }

                    });
                });



            </script>

@endsection