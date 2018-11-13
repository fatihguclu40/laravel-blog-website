@extends('frontend.app')
@section('icerik')
<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Contact Us</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Bize Ulaşın</h1>
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

							<h2 class="short"><strong>Bize Ulaşın</strong></h2>
							<form id="contactForm" action="php/contact-form.php" method="POST">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Adınız *</label>
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
										</div>
										<div class="col-md-6">
											<label>Mail Adresiniz *</label>
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Konu</label>
											<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Mesajınız *</label>
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
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
						<div class="col-md-6">


							<hr />

							<h4><strong>Bize Ulaşmak İçin</strong></h4>
							<ul class="list-unstyled">
								<li><i class="fa fa-map-marker"></i> <strong>Adres:</strong> {{$ayarlar->adres}}</li>
								<li><i class="fa fa-phone"></i> <strong>Telefon:</strong> {{$ayarlar->tel}}</li>
								<li><i class="fa fa-envelope"></i> <strong>Mail:</strong> <a href="mailto:{{$ayarlar->mail}}"> {{$ayarlar->mail}}</a></li>
							</ul>

							<hr />

							<h4><strong>Sosyal Medya</strong></h4>
							<ul class="social-icons">
								<li class="fa fa-facebook"><a href="{{$ayarlar->facebook}}" target="_blank" title="Facebook">Facebook</a></li>
								<li class="fa fa-twitter"><a href="{{$ayarlar->twitter}}" target="_blank" title="Twitter">Twitter</a></li>
								<li class="fa fa-instagram"><a href="{{$ayarlar->instagram}}" target="_blank" title="Instagram">Instagram</a></li>
								<li class="fa fa-youtube"><a href="{{$ayarlar->youtube}}" target="_blank" title="Youtube">Youtube</a></li>
							</ul>

						</div>

					</div>

				</div>

			</div>



				@endsection

			@section('css')
				@endsection

			@section('js')



				@endsection