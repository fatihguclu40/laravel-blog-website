
@extends('frontend.app')
@section('icerik')
<div role="main" class="main">

    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Hakkımızda</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">



        <div class="row">
            <div class="col-md-10">
                <p class="lead">
                    {{$hakkimizda->kisa_yazi}}
                </p>
            </div>
            <div class="col-md-2">
                <a href="/iletisim" class="btn btn-lg btn-primary push-top">Bize Ulaşın</a>
            </div>
        </div>

        <hr class="tall">

        <div class="row">
            <div class="col-md-8">
                <h3><strong>Biz Kimiz</strong></h3>
                {{$hakkimizda->icerik}}
            </div>
            <div class="col-md-4">
                <div class="featured-box featured-box-secundary">
                    <div class="box-content">
                        <h4>Behind the scenes</h4>
                        <ul class="thumbnail-gallery flickr-feed" data-plugin-flickr data-plugin-options='{"qstrings": { "id": "93691989@N03" }, "limit": 6}'></ul>
                    </div>
                </div>
            </div>
        </div>


        <hr class="tall">

        <div class="row">
            <div class="col-md-12">
                <div class="featured-box">
                    <div class="box-content">
                        <h4><strong>Vizyonumuz</strong></h4>
                        {{$hakkimizda->vizyon}}
                    </div>
                </div>
                <div class="featured-box">
                    <div class="box-content">
                        <h4><strong>Misyonumuz</strong></h4>
                        {{$hakkimizda->misyon}}
                    </div>
                </div>


            </div>
        </div>





    </div>

</div>
    @endsection

@section('js')
    @endsection
@section('css')
    @endsection