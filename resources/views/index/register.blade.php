@extends('index.layout')

@section('content')
	<!-- start main -->
	<main role="main">
		<!-- start section -->
		<section class="section section--no-pt section--no-pb section--light-bg">
			<div class="grid grid--container">
				<div class="authorization authorization--registration">
					<div class="row">
						<div class="col col--md-auto">
							<form class="authorization__form" action="#">
								<h3 class="__title">Sign Up</h3>

								<div class="input-wrp">
									<input class="textfield" type="text" value="" placeholder="Name" />
								</div>

								<div class="input-wrp">
									<input class="textfield" type="text" value="" placeholder="Email" />
								</div>

								<div class="input-wrp">
									<i class="textfield-ico fontello-eye"></i>
									<input class="textfield" type="text" value="" placeholder="Password" />
								</div>

								<div class="input-wrp">
									<i class="textfield-ico fontello-eye"></i>
									<input class="textfield" type="text" value="" placeholder="Confirm Password" />
								</div>

								<p>
									<label class="checkbox">
										<input name="p1" type="checkbox" value="ok" required />
										<i class="fontello-check"></i><span>I agree with <a href="#">Terms of Services</a></span>
									</label>

									<button class="custom-btn custom-btn--medium custom-btn--style-2 wide" type="submit" role="button">Submit</button>
								</p>

								<p class="text--center"><a href="/login">Sign In</a> if you don’t have an account</p>
							</form>
						</div>

						<div class="col col--md-auto">
							<form class="authorization__form" action="#">
								<h3 class="__title">Sign Up</h3>

								<p>
									We sent the code to your email address. Please, check your inbox or spam folder.
								</p>

								<div class="input-wrp">
									<input class="textfield" type="text" value="" placeholder="Enter PIN" />
								</div>

								<button class="custom-btn custom-btn--medium custom-btn--style-2 wide" type="submit" role="button">Submit</button>
							</form>

							<br>

							<form id="recovery" class="authorization__form" action="#">
								<h3 class="__title">Password Recovery</h3>

								<div class="input-wrp">
									<input class="textfield" type="text" value="" placeholder="Enter PIN" />
								</div>

								<button class="custom-btn custom-btn--medium custom-btn--style-2 wide" type="submit" role="button">Submit</button>

								<p class="text--center">Back to <a href="/login">Sign In</a></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end section -->
	</main>
	<!-- end main -->

	<div id="btn-to-top-wrap">
		<a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
	</div>
@endsection