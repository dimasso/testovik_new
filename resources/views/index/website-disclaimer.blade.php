@extends('index.layout')

@section('content')
	@include("index.header")

	<!-- start start screen -->
	<div id="start-screen" class="start-screen--light start-screen--style-4">
		<div class="start-screen__static-bg jarallax" data-speed="0.3" style="background-image: url(/static/img/bg_11.jpg);">

			<div class="start-screen__content  text--center">
				<div class="start-screen__content__inner">
					<div class="grid grid--container">
						<div class="row row--xs-middle">
							<div class="col col--md-10 col--lg-8 col--xl-7">
								<h1 class="h2 __title" style="font-size: 6rem;">Disclaimers</h1>

								<div class="social-btns social-btns-new">
									<a class="fontello-twitter" href="https://twitter.com/keepgo" target="_blank">
										<svg class="svg social" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" style="margin-top: 8px; width: 20px; margin-right: 2px;"><path d="M24 4.8c-0.4 0.2-1.6 0.7-2.7 0.8 0.7-0.4 1.8-1.7 2.1-2.7 -0.7 0.4-2.3 1.1-3.1 1.1 0 0 0 0 0 0 -0.9-0.9-2.2-1.7-3.6-1.7 -2.7 0-4.7 2.4-4.7 5.1 0 0.4 0 0.8 0.1 1.1h0C8.3 8.5 4.1 6.4 1.6 3.2 0.1 5.8 1.4 8.9 3.1 10c-0.6 0-1.7-0.1-2.2-0.6 0 1.7 0.8 4 3.8 4.8 -0.6 0.3-1.6 0.2-2.1 0.2 0.2 1.5 2.2 3.4 4.4 3.4C6.3 18.7 3.4 20.3 0 19.8 2.3 21.2 4.9 22 7.7 22c8 0 14.5-6.5 14.2-14.5 0 0 0 0 0 0 0 0 0 0 0-0.1 0 0 0 0 0-0.1C22.7 6.9 23.3 6 24 4.8z"></path></svg>
									</a>
									<a class="fontello-facebook" href="https://www.facebook.com/KeepGo.Web2Go" target="_blank">
										<svg class="svg social" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" style="margin-top: 8px; width: 20px; margin-right: 4px;"><path d="M15.4 4h2.6v-4h-3.3v0c-4.4 0.2-5.6 2.6-5.7 5.2H9v2.8h-3v4h3v12H14v-12h3l0.7-4H14V5.5C14 4.6 14.6 4 15.4 4z"></path></svg>
									</a>
									<a class="fontello-paper-plane" href="https://www.keepgo.com/blogs/articles" target="_blank">
										<svg class="svg social" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 50 50" style="margin-top: 8px; width: 20px; margin-right: 4px;"><path d="M 9 4 C 6.239 4 4 6.239 4 9 L 4 41 C 4 43.761 6.239 46 9 46 L 41 46 C 43.761 46 46 43.761 46 41 L 46 9 C 46 6.239 43.761 4 41 4 L 9 4 z M 20 12 L 25 12 C 29.42 12 33.033 15.632547 33 20.060547 C 32.991 21.141547 33.919 22 35 22 L 36 22 C 37.105 22 38 22.895 38 24 L 38 30 C 38 34.4 34.4 38 30 38 L 20 38 C 15.6 38 12 34.4 12 30 L 12 25 L 12 20 C 12 15.6 15.6 12 20 12 z M 20 18 C 18.9 18 18 18.9 18 20 C 18 21.1 18.9 22 20 22 L 25 22 C 26.1 22 27 21.1 27 20 C 27 18.9 26.1 18 25 18 L 20 18 z M 20 28 C 18.9 28 18 28.9 18 30 C 18 31.1 18.9 32 20 32 L 30 32 C 31.1 32 32 31.1 32 30 C 32 28.9 31.1 28 30 28 L 20 28 z"></path></svg>
									</a>
									<a class="fontello-youtube-play" href="https://www.youtube.com/user/iPhoneTrip" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" style="margin-top: 8px; width: 20px; margin-right: 4px;"><path d="M23.6 6.4c-0.2-1.7-1.4-3-3.1-3.1 -7.4-0.5-9.2-0.5-16.6 0C2.2 3.4 0.9 4.7 0.7 6.4c-0.6 5.2-0.6 6.1 0 11.3 0.2 1.7 1.4 3 3.1 3.1 7.4 0.5 9.2 0.5 16.6 0 1.7-0.1 2.9-1.4 3.1-3.1C24.1 12.5 24.1 11.6 23.6 6.4zM16.1 12.5l-6.4 3.9c-0.2 0.1-0.4 0.1-0.6 0 -0.2-0.1-0.3-0.3-0.3-0.5V8.2c0-0.2 0.1-0.4 0.3-0.5C9.3 7.6 9.5 7.6 9.7 7.7l6.4 3.9c0.2 0.1 0.3 0.3 0.3 0.4C16.4 12.3 16.3 12.4 16.1 12.5z"></path></svg>
									</a>
									<a class="icon-github-circled-alt2" href="https://github.com/keepgo" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 438.549 438.549" style="enable-background:new 0 0 438.549 438.549; margin-top: 8px; width: 20px; margin-right: 4px;" xml:space="preserve"><path d="M409.132,114.573c-19.608-33.596-46.205-60.194-79.798-79.8C295.736,15.166,259.057,5.365,219.271,5.365   c-39.781,0-76.472,9.804-110.063,29.408c-33.596,19.605-60.192,46.204-79.8,79.8C9.803,148.168,0,184.854,0,224.63   c0,47.78,13.94,90.745,41.827,128.906c27.884,38.164,63.906,64.572,108.063,79.227c5.14,0.954,8.945,0.283,11.419-1.996   c2.475-2.282,3.711-5.14,3.711-8.562c0-0.571-0.049-5.708-0.144-15.417c-0.098-9.709-0.144-18.179-0.144-25.406l-6.567,1.136   c-4.187,0.767-9.469,1.092-15.846,1c-6.374-0.089-12.991-0.757-19.842-1.999c-6.854-1.231-13.229-4.086-19.13-8.559   c-5.898-4.473-10.085-10.328-12.56-17.556l-2.855-6.57c-1.903-4.374-4.899-9.233-8.992-14.559   c-4.093-5.331-8.232-8.945-12.419-10.848l-1.999-1.431c-1.332-0.951-2.568-2.098-3.711-3.429c-1.142-1.331-1.997-2.663-2.568-3.997   c-0.572-1.335-0.098-2.43,1.427-3.289c1.525-0.859,4.281-1.276,8.28-1.276l5.708,0.853c3.807,0.763,8.516,3.042,14.133,6.851   c5.614,3.806,10.229,8.754,13.846,14.842c4.38,7.806,9.657,13.754,15.846,17.847c6.184,4.093,12.419,6.136,18.699,6.136   c6.28,0,11.704-0.476,16.274-1.423c4.565-0.952,8.848-2.383,12.847-4.285c1.713-12.758,6.377-22.559,13.988-29.41   c-10.848-1.14-20.601-2.857-29.264-5.14c-8.658-2.286-17.605-5.996-26.835-11.14c-9.235-5.137-16.896-11.516-22.985-19.126   c-6.09-7.614-11.088-17.61-14.987-29.979c-3.901-12.374-5.852-26.648-5.852-42.826c0-23.035,7.52-42.637,22.557-58.817   c-7.044-17.318-6.379-36.732,1.997-58.24c5.52-1.715,13.706-0.428,24.554,3.853c10.85,4.283,18.794,7.952,23.84,10.994   c5.046,3.041,9.089,5.618,12.135,7.708c17.705-4.947,35.976-7.421,54.818-7.421s37.117,2.474,54.823,7.421l10.849-6.849   c7.419-4.57,16.18-8.758,26.262-12.565c10.088-3.805,17.802-4.853,23.134-3.138c8.562,21.509,9.325,40.922,2.279,58.24   c15.036,16.18,22.559,35.787,22.559,58.817c0,16.178-1.958,30.497-5.853,42.966c-3.9,12.471-8.941,22.457-15.125,29.979   c-6.191,7.521-13.901,13.85-23.131,18.986c-9.232,5.14-18.182,8.85-26.84,11.136c-8.662,2.286-18.415,4.004-29.263,5.146   c9.894,8.562,14.842,22.077,14.842,40.539v60.237c0,3.422,1.19,6.279,3.572,8.562c2.379,2.279,6.136,2.95,11.276,1.995   c44.163-14.653,80.185-41.062,108.068-79.226c27.88-38.161,41.825-81.126,41.825-128.906   C438.536,184.851,428.728,148.168,409.132,114.573z"></path></svg>
									</a>
									<a class="icon-github-circled-alt2" href="https://t.me/joinchat/FR_DSU4d2bdzkSNqUwsxUA" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 189.473 189.473" style="enable-background:new 0 0 189.473 189.473; margin-top: 8px; width: 20px; margin-right: 6px;" xml:space="preserve" width="24" height="24"><path d="M152.531,179.476c-1.48,0-2.95-0.438-4.211-1.293l-47.641-32.316l-25.552,18.386c-2.004,1.441-4.587,1.804-6.914,0.972   c-2.324-0.834-4.089-2.759-4.719-5.146l-12.83-48.622L4.821,93.928c-2.886-1.104-4.8-3.865-4.821-6.955   c-0.021-3.09,1.855-5.877,4.727-7.02l174.312-69.36c0.791-0.336,1.628-0.53,2.472-0.582c0.302-0.018,0.605-0.018,0.906-0.001   c1.748,0.104,3.465,0.816,4.805,2.13c0.139,0.136,0.271,0.275,0.396,0.42c1.11,1.268,1.72,2.814,1.835,4.389   c0.028,0.396,0.026,0.797-0.009,1.198c-0.024,0.286-0.065,0.571-0.123,0.854L159.898,173.38c-0.473,2.48-2.161,4.556-4.493,5.523   C154.48,179.287,153.503,179.476,152.531,179.476z M104.862,130.579l42.437,28.785L170.193,39.24l-82.687,79.566l17.156,11.638   C104.731,130.487,104.797,130.533,104.862,130.579z M69.535,124.178l5.682,21.53l12.242-8.809l-16.03-10.874   C70.684,125.521,70.046,124.893,69.535,124.178z M28.136,86.782l31.478,12.035c2.255,0.862,3.957,2.758,4.573,5.092l3.992,15.129   c0.183-1.745,0.974-3.387,2.259-4.624L149.227,38.6L28.136,86.782z"></path></svg>
									</a>
									<a class="icon-github-circled-alt2" href="https://www.linkedin.com/company/keepgo" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" style="margin-top: 7px; width: 20px; margin-right: 4px;"><path d="M0 23h5V8H0V23zM17.8 7.5c-2.2 0-3.5 0.8-4.8 2.6V8H8v15h5V14.9c0-1.7 0.9-3.4 2.8-3.4s3.2 1.7 3.2 3.4v8.2H24v-8.5C24 8.6 20 7.5 17.8 7.5zM2.5 0.7c-1.6 0-2.9 1.2-2.9 2.6s1.3 2.6 2.9 2.6c1.6 0 2.9-1.2 2.9-2.6S4.2 0.7 2.5 0.7z"></path></svg>
									</a>
									<a class="icon-github-circled-alt2" href="mailto:support@keepgo.com" target="_blank">
										<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="24" height="24" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" style="margin-top: 8px; width: 20px; margin-right: 4px;"><path d="M21.3 4.9H2.2C1.3 4.9 0 5.5 0 7.1v10.5c0 0.8 0.5 1.9 1.7 2.2 0.1 0 0.2 0.1 0.3 0.1 0 0 0.1 0 0.1 0 0 0 0.1 0 0.1 0h19.1c0 0 0.1 0 0.1 0 0 0 0.1 0 0.1 0 0.1 0 0.2 0 0.3-0.1 0.8-0.2 1.7-0.8 1.7-2.1V7.1C23.5 6.2 22.9 4.9 21.3 4.9zM1.6 17.7V8.2l5.5 3.2c-0.1 0-0.1 0.1-0.1 0.1l-5.3 6.4C1.7 17.8 1.6 17.8 1.6 17.7zM2.4 6.6H21.1l-9.3 5.4L2.4 6.6zM8.4 12.7c0.1-0.1 0.1-0.1 0.3-0.4l2.6 1.5c0.1 0.1 0.3 0.1 0.5 0.1h0c0 0 0 0 0 0 0.2 0 0.3 0 0.5-0.1l2.6-1.5c0.2 0.3 0.2 0.3 0.3 0.4l4.6 5.5H3.8L8.4 12.7zM16.5 11.5c0-0.1-0.1-0.1-0.1-0.2l5.5-3.2v9.4c0 0.1 0 0.2 0 0.3L16.5 11.5z"></path></svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<span class="scroll-discover hide show--md">scroll down <b></b></span>

	</div>
	<!-- end start screen -->
	
	<!-- start main -->
	<main role="main">

		<!-- start section -->
		<section class="section">
			<div class="grid grid--container">
				<div data-aos="fade-up" data-aos-offset="100">
					<div class="row row--xs-middle">
						<div class="col col--lg-11 col-MB-40">
							<p style="border: 1px solid #ddd; padding: 10px;     color: #000; text-align: center; font-style: italic;">
								This document is for information purposes only, and is not an offer or a call to sell stocks or securities on the Keep Foundation platform, or that of any other related or associated company.
							</p>
						</div>
						<div class="col col--lg-11 col-MB-40">
							<p>
								<b>KEEP TOKENS ARE NOT SECURITIES</b>
							</p>
							<p>
								User acknowledges, understands, and agrees that KEEPs are not securities and are not registered with any government entity as a security, and shall not be considered as such. User acknowledges, understands, and agrees that ownership of KEEPs does not grant the user the right to receive profits, income, or other payments or returns arising from the acquisition, holding, management or disposal of, the exercise of, the redemption of, or the expiry of, any right, interest, title or benefit in the The Keep Foundation or The Keep Foundation Platform or any other The Keep Foundation property, whole or in part.
							</p>
						</div>
						<div class="col col--lg-11 col-MB-40">
							<p>
								<b>ABSENCE OF GUARANTEES OF INCOME OR PROFIT</b>
							</p>
							<p>
								There is no guarantee that KEEP tokens will grow in value. There are no guarantees that the price of KEEPs will not decrease, including significantly, due to some unforeseen events, or events over which the developers have no control, or because of force majeure circumstances.
							</p>
						</div>
						<div class="col col--lg-11 col-MB-40">
							<p>
								<b>RISKS ASSOCIATED WITH ETHEREUM</b>
							</p>
							<p>
								KEEP tokens will be issued on the Ethereum blockchain. Therefore, any failure or malfunctioning of the Ethereum protocol may lead to the trading network of KEEP tokens not working as expected.
							</p>
						</div>
						<div class="col col--lg-11 col-MB-40">
							<p>
								<b>REGULATORY UNCERTAINTY</b>
							</p>
							<p>
								Blockchain technologies are subject to supervision and control by various regulatory bodies around the world. KEEP tokens may fall under one or more requests or actions on their part, including but not limited to restrictions imposed on the use or possession of digital tokens such as KEEPs, which may slow or limit the functionality or repurchase of KEEP tokens in the future.
							</p>
						</div>
						<div class="col col--lg-11 col-MB-40">
							<p>
								<b>KEEP TOKENS ARE NOT AN INVESTMENT</b>
							</p>
							<p>
								KEEP tokens are not official or legally binding investments of any kind. In case of unforeseen circumstances, the objectives stated in this document may be changed. Despite the fact that we intend to reach all goals described in this document, all persons and parties involved in the purchase of KEEP tokens do so at their own risk.
							</p>
						</div>
						<div class="col col--lg-11 col-MB-40">
							<p>
								<b>QUANTUM COMPUTERS</b>
							</p>
							<p>
								Technical innovations, like the development of quantum computers, may pose a danger to cryptocurrencies, including KEEP tokens.
							</p>
						</div>
						<div class="col col--lg-11 col-MB-40">
							<p>
								<b>RISK OF LOSING FUNDS</b>
							</p>
							<p>
								Funds collected in fundraising are in no way insured. If they are lost or lose their value, there is no private or public insurance representative that buyers can reach out to.
							</p>
						</div>
						<div class="col col--lg-11 col-MB-40">
							<p>
								<b>RETURNING FUNDS</b>
							</p>
							<p>
								If a campaign does not end successfully, or is canceled by its creator, or by moderators, the funds are returned to the wallets of those users who transferred funds to the wallet of the campaign. If the user made their payment in a fiat currency (USD, EUR, RUR, or any other), the funds are returned to their ETH wallet inside the The Keep Foundation system. The user can withdraw this ETH or use them to participate in any other campaign launched on the The Keep Foundation platform.
							</p>
						</div>
						<div class="col col--lg-11 col-MB-40">
							<p>
								<b>RISKS OF USING NEW TECHNOLOGIES</b>
							</p>
							<p>
								KEEP tokens are a new and relatively untested technology. In addition to the risks mentioned in this document, there are certain additional risks that the team of the The Keep Foundation platform cannot foresee. These risks may manifest themselves in other forms of risk than those specified herein.
							</p>
						</div>
						<div class="col col--lg-11 col-MB-40">
							<p>
								<b>INTEGRATION</b>
							</p>
							<p>
								All information contained within this Whitepaper is provided for general information purposes only, and is intended to present a guide to the decentralized services which may be provided by The Keep Foundation in future. Nothing published in this document is intended to be (i) legal, financial, professional, tax or other advice; (ii) a recommendation to undertake (or to cease undertaking) any action whatsoever; (iii) an advertisement, solicitation or legal offer; (iv) an offer or a call to buy or sell stocks or securities on the The Keep Foundation platform, or that of any other related or associated company, (v) a promise of any voting or ownership rights of The Keep Foundation (vi) or a promise of receiving any passive income, any return on investment or any profit; and should not be construed as any of the foregoing. The KEEP is a cryptographically-secured representation of a token-holder's rights to get access to the The Keep Foundation platform and receive services on the The Keep Foundation platform in future through the token-holder's active actions, such as launching campaigns, buying services an etc.
							</p>
						</div>
						<div class="col col--lg-11 col-MB-40">
							<p>
								<b>KEEPGOFI BETA HOTSPOT: LIMITED WARRANTY AND LIABILITY</b>
							</p>
							<ul>
								<li style="list-style: disc; margin-bottom: 20px;">
									<p>
										Although utilizable by experienced users, KeepgoFi Beta Hotspot is still being developed, tested and evaluated. KeepgoFi Beta Hotspot has not been released for sale, distribution or any use by the general public.
									</p>
								</li>
								<li style="list-style: disc; margin-bottom: 20px;">
									<p>
										KeepgoFi Beta Hotspot is provided to you "as is" without warranty of any kind, either expressed or implied, including, but not limited to, any warranty of merchantability, non-infringement or fitness for a particular purpose. Use of KeepgoFi Beta Hotspot is entirely at your own risk. Should KeepgoFi Beta Hotspot prove defective, you assume the cost of all necessary maintenance, servicing or repair. It is therefore your responsibility to take adequate precaution against possible damages resulting from the use KeepgoFi Beta Hotspot. If you are in any doubt, please do not use KeepgoFi Beta Hotspot.
									</p>
								</li>
								<li style="list-style: disc;  margin-bottom: 20px;">
									<p>
										To the maximum extent permitted by applicable law, Keepgo will not be liable to you for any damages arising out of the use or inability to use KeepgoFi Beta Hotspot (including but not limited to loss of data or data being rendered inaccurate or losses sustained by you or third parties or a failure of KeepgoFi Beta Hotspot to operate with any other devices).
									</p>
								</li>
								<li style="list-style: disc;">
									<p>
										We expressly represent that KeepgoFi Beta Hotspot is not a final product and, as such, may contain various errors, defects and it may be unstable.
									</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end section -->

	</main>
	<!-- end main -->

	@include("index.footer")
@endsection