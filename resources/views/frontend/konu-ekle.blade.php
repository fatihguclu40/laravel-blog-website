@extends('frontend.app')
@section('icerik')
    <div role="main" class="main">

        <section class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Konu Ekle</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->


        <div class="container">

            <div class="row">
                <div class="col-md-6">

                    <div class="alert alert-success hidden" id="contactSuccess">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="alert alert-danger hidden" id="contactError">
                        <strong>Error!</strong> There was an error sending your message.
                    </div>

                    <h2 class="short"><strong>Konu Ekle</strong></h2>
                    <form id="form" action="" method="POST">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Ana Konu Seç</label>
                                    <select class="form-control" name="ana_baslik" id="">
                                        <option value="0">Ana Konu Seçiniz</option>
                                        @foreach($anabasliklar as $anabaslik)
                                            <option value="{{$anabaslik->id}}">{{$anabaslik->baslik}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label>Başlık * </label>
                                    <input type="text" value=""  class="form-control" name="baslik" id="baslik" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Konu *</label>
                                    <textarea  rows="10" class="form-control" name="icerik" id="message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Konu Ekle" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>
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
            $('form').ajaxForm({
                beforeSubmit:function(){
                    swal({
                        title:'<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Loading...</span>',
                        text:'Yükleniyor Bekleyiniz...',
                        showConfirmButton: false
                    })

                },
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