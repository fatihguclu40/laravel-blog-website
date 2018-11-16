@extends('backend.app')
@section('icerik')

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Plain Page</h3>
                </div>


            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">
                            <table class="table" name="table" id="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ad</th>
                                    <th>Sil</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($kategoriler as $kategori)
                                    <tr>
                                        <th scope="row">{{$kategori->id}}</th>
                                        <td>{{$kategori->ad}}</td>
                                        <td><button class="btn btn-danger" onclick="sil(this,{{$kategori->id}})">Sil</button></td>
                                    </tr>
                                    @foreach($kategori->children as $altkategori)
                                        <tr>
                                            <th scope="row">{{$altkategori->id}}</th>
                                            <td>{{$kategori->ad}}-->{{$altkategori->ad}}</td>
                                            <td><button class="btn btn-danger" onclick="sil(this,{{$altkategori->id}})">Sil</button></td>
                                        </tr>
                                        @foreach($altkategori->children as $altaltkategori)
                                            <tr>
                                                <th scope="row">{{$altaltkategori->id}}</th>
                                                <td>{{$kategori->ad}}-->{{$altkategori->ad}}-->{{$altaltkategori->ad}}</td>
                                                <td><button class="btn btn-danger" onclick="sil(this,{{$altaltkategori->id}})">Sil</button></td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
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
    <script type="text/javascript" src="/js/sweetalert2.min.js"></script>
    <script>

        function sil(r, id) {
            var sira = r.parentNode.parentNode.rowIndex;

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
                $.ajax
                ({
                    type: "Post",
                    url: '',
                    data: {
                        'id': id,
                        '_token': "{{csrf_token()}}"
                    },
                    success: function (response) {
                        if (response.durum == "success") {
                            document.getElementById("table").deleteRow(sira);
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
@endsection