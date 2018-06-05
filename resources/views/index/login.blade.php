@extends('index.layout')

@section('content')
	<!-- start main -->
	<main role="main">
		<!-- start section -->
		<section class="section section--no-pt section--no-pb section--light-bg">
			<div class="grid grid--container">
				<div class="authorization authorization--login">
					<form class="authorization__form" action="#">
						<h3 class="__title">Sign In</h3>

						<div class="input-wrp">
							<input class="textfield" type="text" value="" placeholder="Email" />
						</div>

						<div class="input-wrp">
							<i class="textfield-ico fontello-eye"></i>
							<input class="textfield" type="text" value="" placeholder="Password" />
						</div>

						<p>
							<a href="/register#recovery">I forgot my password</a>

							<button class="custom-btn custom-btn--medium custom-btn--style-2 wide" type="submit" role="button">Submit</button>
						</p>

						<p class="text--center"><a href="/register">Sign Up</a> if you don’t have an account</p>
					</form>
				</div>
			</div>
		</section>
		<!-- end section -->
	</main>
	<!-- end main -->
@endsection