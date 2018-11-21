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
                        @foreach($anabasliklar as $anabaslik)
                        <article class="post post-large" style="margin-bottom: 0;">
                            <div class="post-content" >
                                <section class="" style="background-color: #171717;border-radius: 3px">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 style="margin-left: 25px;padding-top: 15px" ><a style="color: white;text-decoration: none;" href="/forum/{{$anabaslik->slug}}">{{$anabaslik->baslik}}</a></h4>
                                        </div>
                                    </div>
                                </section>
                                @foreach($anabaslik->forumkonu->take('3') as $konu)
                                    <article class="post post-large" style="margin-bottom: 0;">
                                        <div class="post-content" >
                                            <article class="post post-large" style="margin-bottom: 0;">
                                                <div class="post-date">
                                                    @php($zaman=$konu->created_at)
                                                    @php($zaman->setLocale('tr'))
                                                    <span class="day">{{$zaman->format('d')}}</span>
                                                    <span class="month">{{$zaman->format('M')}}</span>
                                                </div>

                                                <div class="post-content">

                                                    <h4 style="padding-top: 7px;"><a href="/forum/{{$anabaslik->slug}}/{{$konu->slug}}">{{$konu->baslik}}</a></h4>
                                                    <div class="post-meta">
                                                        <span><i class="fa fa-user"></i> By <a href="#">{{$konu->user->name}}</a> </span>
                                                        <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                                        <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                                    </div>

                                                </div>
                                            </article>

                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </article>
                        @endforeach
                        <ul class="pagination pagination-lg pull-right" style="margin-top: 10px">
                            <li><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>

                    </div>
                </div>

                @include('.frontend.forum-sidebar');
            </div>

        </div>

    </div>
@endsection

@section('css')
@endsection

@section('js')
@endsection