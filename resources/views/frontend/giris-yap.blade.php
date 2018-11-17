@extends('frontend.app')
@section('icerik')

    <div role="main" class="main">

        <section class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Pages</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Giriş</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <div class="row featured-boxes login">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="featured-box featured-box-secundary default info-content">
                                <div class="box-content">
                                    <h4>Üye Girişi</h4>
                                    <form action="{{route('login')}}" role="form" id="" method="post">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>E-mail Adresi</label>
                                                    <input type="email" name="email" value="" class="form-control input-lg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <a class="pull-right" href="#">(Şifrenizi mi unuttunuz?)</a>
                                                    <label>Şifre</label>
                                                    <input type="password" name="password" value="" class="form-control input-lg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
														<span class="remember-box checkbox">
															<label for="rememberme">
																<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Unutma Beni
															</label>
														</span>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="submit" value="Giriş Yap" class="btn btn-primary pull-right push-bottom" data-loading-text="Loading...">
                                            </div>
                                            <div class="col-md-6">
                                                <p>Üye girişi yapabilmek için <strong><a href="/kayit">Kaydol</a></strong> </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection

@section('css')
@endsection

@section('js')
@endsection