@extends('backend.app')
@section('icerik')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Hakkımızda</h3>
                </div>
                
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">
                            <form action="" method="post" id="form" data-parsley-validate class="form-horizontal form-label-left">

                                {{csrf_field()}}

                                {{ Form::bsText('vizyon','Vizyonumuz',$hakkimizda->vizyon) }}
                                {{ Form::bsText('misyon','Misyonumuz',$hakkimizda->misyon) }}
                                {{ Form::bsText('kisa_yazi','Kısa Yazı ',$hakkimizda->kisa_yazi) }}
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last_name">Açıklama</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="icerik" class="form-control col-md-7 col-xs-12"  id="" cols="30" rows="10">{{$hakkimizda->icerik}}</textarea>
                                    </div>
                                </div>
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
                beforeSubmit:function(){

                },
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