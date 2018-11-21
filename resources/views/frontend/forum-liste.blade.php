@extends('frontend.app')
@section('icerik')

    <div role="main" class="main">

        <section class="page-top">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <h1>Forumlar</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row">
                <div class="col-md-9">
                    <div class="blog-posts">
                        @php($konular =$anabaslik ->forumkonu()->paginate(3) )
                        @foreach($konular as $konu)
                            @if(($konu->goster == '1') || (Auth::check() && Auth::user()->yetki > 0))
                            <article class="post post-large" id="{{$konu->id}}" style="margin-bottom: 0;">
                                <div class="post-content">
                                    <article class="post post-large" style="margin-bottom: 0;">
                                        <div class="post-date">
                                            @php($zaman=$konu->created_at)
                                            @php($zaman->setLocale('tr'))
                                            <span class="day">{{$zaman->format('d')}}</span>
                                            <span class="month">{{$zaman->format('M')}}</span>
                                        </div>

                                        <div class="post-content">

                                            <h4 style="padding-top: 7px;"><a
                                                        href="/forum/{{$anabaslik->slug}}/{{$konu->slug}}">{{$konu->baslik}}</a>
                                            </h4>
                                            <div class="post-meta">
                                                <span><i class="fa fa-user"></i> By <a
                                                            href="#">{{$konu->user->name}}</a> </span>
                                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a
                                                            href="#">News</a> </span>
                                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                                @if(Auth::user()&&Auth::user()->id > 0)
                                                    <span><i class="fa fa-comments"></i> <a href="#"
                                                                                            onclick="konusil('sil',{{$konu->id}})">Konuyu Sil</a></span>
                                                    @if($konu->goster == '1')
                                                        <span><i class="fa fa-comments"></i> <a href="#"
                                                                                                onclick="konusil('gizle',{{$konu->id}})">Konuyu Gizle</a></span>
                                                    @else
                                                        <span><i class="fa fa-comments"></i> <a href="#"
                                                                                                onclick="konusil('goster',{{$konu->id}})">Konuyu Göster</a></span>

                                                    @endif
                                                @endif
                                            </div>

                                        </div>
                                    </article>

                                </div>
                            </article>
                            @endif
                        @endforeach

                        {{$konular->links()}}
                    </div>
                </div>

                @include('.frontend.forum-sidebar');
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


        function konusil(durum, id) {

            swal({
                title: 'Emin misiniz?',
                text: 'İşlemi Geri Alamazsınız!',
                type: 'warning',
                showCancelButton: true,
                cancelButtonText: 'İptal',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet'
            }).then(function () {

                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "Post",
                    url: '/forum/konu_sil',
                    data: {
                        'id': id,
                        'durum': durum,
                        '_token': CSRF_TOKEN
                    },

                    success: function (response) {
                        if (response.durum == 'success') {
                            document.getElementById(id).remove();
                        }
                        swal(
                            response.baslik,
                            response.icerik,
                            response.durum
                        );


                    }
                })
            })
        }


    </script>
@endsection