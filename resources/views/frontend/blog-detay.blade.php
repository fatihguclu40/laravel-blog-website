@extends('frontend.app')
@section('icerik')

<div role="main" class="main">

    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog Post</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <div class="blog-posts single-post">

                    <article class="post post-large blog-single-post">
                        <div class="post-image">
                            <div class="owl-carousel" data-plugin-options='{"items":1}'>
                                @foreach($resimler=Storage::disk('uploads')->files('img/blog/'.$blog->slug) as $resim)
                                    <div>
                                        <div class="img-thumbnail">
                                            <img class="img-responsive" src="/uploads/{{$resim}}" alt="" style="width: 1280px;height: 500px">
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="post-date">
                            <span class="day">10</span>
                            <span class="month">Jan</span>
                        </div>

                        <div class="post-content">

                            <h2><a href="blog-post.html">{{$blog->baslik}}</a></h2>

                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                            </div>

                            {{$blog->icerik}}

                            <div class="post-block post-share">
                                <h3><i class="fa fa-share"></i>Share this post</h3>

                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_pinterest_pinit"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                </div>
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                                <!-- AddThis Button END -->

                            </div>

                            <div class="post-block post-author clearfix">
                                <h3><i class="fa fa-user"></i>Author</h3>
                                <div class="img-thumbnail">
                                    <a href="blog-post.html">
                                        <img src="img/avatar.jpg" alt="">
                                    </a>
                                </div>
                                <p><strong class="name"><a href="#">John Doe</a></strong></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
                            </div>

                            <div class="post-block post-comments clearfix">
                                <h3><i class="fa fa-comments"></i>Comments (3)</h3>

                                <ul class="comments">
                                    <li id="yorumlar"></li>
                                    @foreach($blog->yorumlar->where('ust_yorum','0') as $yorum)
                                    <li>
                                        <div class="comment">
                                            <div class="img-thumbnail">
                                                <img class="avatar" alt="" src="img/avatar-2.jpg">
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-arrow"></div>
                                                <span class="comment-by">
																<strong>
                                                                    @if($yorum->kullanici_id > 0)
                                                                        {{$yorum->user->name}}
                                                                        @else
                                                                        {{$yorum->isim}}
                                                                        @endif
                                                                </strong>
																<span class="pull-right">
																	<span> <a onclick="altyorum({{$yorum->id}})"><i class="fa fa-reply"></i> Cevapla</a></span>
																</span>
															</span>
                                                <p>{{$yorum->icerik}}</p>
                                                @php($zaman=$yorum->created_at)
                                                @php($zaman->setLocale('tr'))
                                                <span class="date pull-right">{{$zaman->diffForHumans()}}</span>
                                            </div>
                                        </div>


                                        <ul class="comments reply">
                                            @foreach($yorum->children as $altyorum)
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail">
                                                        <img class="avatar" alt="" src="img/avatar-3.jpg">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
																		<strong>
                                                                            @if($altyorum->kulanici_id>0)
                                                                                {{$altyorum->user->name}}
                                                                            @else
                                                                                {{$altyorum->isim}}
                                                                            @endif
                                                                        </strong>
																		<span class="pull-right">
																			<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																		</span>
																	</span>
                                                        <p>{{$altyorum->icerik}}</p>
                                                        <span class="date pull-right">{{$altyorum->created_at->diffForHumans()}}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach

                                </ul>

                            </div>

                            <div class="post-block post-leave-comment">
                                <h3>Leave a comment</h3>

                                <form action="" method="post" id="form">
                                    {{csrf_field()}}
                                    <div id="altyorum"></div>

                                    @if(!\Illuminate\Support\Facades\Auth::check())
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Adınız *</label>
                                                <input type="text" value="" maxlength="100" class="form-control" name="isim" id="isim">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Mail Adresiniz *</label>
                                                <input type="email" value="" maxlength="100" class="form-control" name="mail" id="mail">
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Yorum *</label>
                                                <textarea maxlength="5000" rows="10" class="form-control" name="icerik" id="icerik"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" value="Gönder" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </article>

                </div>
            </div>

            @include('frontend.blog-sidebar')
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

        function altyorum(id){
            var hidden ='<input type="hidden" value="'+id+'" name="ust_yorum">';
            document.getElementById('altyorum').innerHTML = hidden;
        }

        $(document).ready(function(){
            $('form').validate();
            $('form').ajaxForm({
                success:function(response){
                    swal(
                        response.baslik,
                        response.icerik,
                        response.durum
                    );
                    if (response.durum=='success'){
                        var isim = document.getElementById('isim').value;
                        var icerik = document.getElementById('icerik').value;
                        var mesaj =  '<div class="comment">'+
                            '<div class="img-thumbnail">'+
                            '<img class="avatar" alt="" src="img/avatar.jpg">'+
                            '</div>'+
                            '<div class="comment-block">'+
                            '<div class="comment-arrow">'+
                            '</div>'+
                            '<span class="comment-by">'+
                            '<strong>'+isim+'</strong>'+
                            '<span class="pull-right">'+
                            '<span>'+
                            '<a href="#"><i class="fa fa-reply"></i> Reply</a>'+
                            '</span>'+
                            '</span>'+
                            '</span>'+
                            '<p>'+icerik+'</p>'+
                            '<span class="date pull-right">Simdi</span>'+
                            '</div>'+
                            '</div>';
                        document.getElementById('yorumlar').innerHTML = mesaj;

                    }

                }

            });
        });


    </script>
    @endsection