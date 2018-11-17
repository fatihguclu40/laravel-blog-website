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
                        <h1>Kayıt</h1>
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
                                    <h4>Kaydol</h4>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf


                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">İsminiz</label>
                                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="">Email Adresiniz</label>
                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label for="">Şifreniz</label>
                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="En az 6 karakter" required>                                                </div>

                                                <div class="col-md-6">
                                                    <label for="">Şifre Tekrar</label>
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 col-md-offset-9">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Kayıt Ol') }}
                                                </button>
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