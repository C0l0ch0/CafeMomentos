<?php include(TEMPLATE.DS.'header.php');?>
<body>

	<!-- Preloader -->

	<div id="preloader">
		<div id="status">
			<div class="status-mes"></div>
		</div>
	</div>

	<!-- Navigation start -->

	<?php include(TEMPLATE.DS.'navigation.php');?>

	<!-- Navigation end -->

	<!-- Home start -->

	<section id="home" class="intro-module module-image parallax heightfull bg-dark-alfa-30">
	</section>

	<!-- Home end -->

	<!-- About start -->

	<section id="about" class="module">
	</section>

	<!-- About end -->

	<!-- Callout section start -->

	<section id="callout-one" class="callout parallax">
		<div class="container">

			<div class="row">
				<div class="col-sm-2 col-sm-offset-5 text-center long-down">
					<img src="<?=WEBROOT.DS;?>/images/divider-top.svg" alt="">
				</div>
			</div><!-- .row -->

			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<h2 class="callout-text">Café saborizado Premium de Guatemala.</h2>
				</div>
			</div><!-- .row -->

		</div><!-- .container -->
	</section>

	<!-- Callout section end -->

	<!-- Dishes start -->

	<section id="events" class="module">
	</section>

	<!-- Dishes end -->

	<!-- Callout section start -->

	<section id="callout-two" class="callout parallax">
		<div class="container">

			<div class="row">
				<div class="col-sm-2 col-sm-offset-5 text-center long-down">
					<img src="<?=WEBROOT.DS;?>/images/divider-top.svg" alt="">
				</div>
			</div><!-- .row -->

			<div class="row">
				<div class="col-sm-12">
					<h2 class="callout-text">Try the taste of Italy.</h2>
				</div>
			</div><!-- .row -->

		</div><!-- .container -->
	</section>

	<!-- Callout section end -->

	<!-- Popular start -->

	<section id="galery" class="module">
	</section>

	<!-- Popular end -->

	<!-- Callout section start -->

	<section id="callout-three" class="callout parallax">
		<div class="container">

			<div class="row">

				<div class="col-sm-10 col-sm-offset-1">
					<div class="testimonials-slider">

						<!-- Slide 1 -->
						<div class="owl-item">
							<blockquote>Sea food and the best view. Nothing in excess.</blockquote>
							<div class="testimonial-author">
								<div class="row">
									<div class="col-sm-6 testimonial-avatar">
										<img src="https://s3.amazonaws.com/uifaces/faces/twitter/soffes/128.jpg" alt="">
									</div>
									<div class="col-sm-6 testimonial-info">
										<h4>Jack Woods</h4>
										<div class="stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star star-off"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Slide 2 -->
						<div class="owl-item">
							<blockquote>I love this place!</blockquote>
							<div class="testimonial-author">
								<div class="row">
									<div class="col-sm-6 testimonial-avatar">
										<img src="https://s3.amazonaws.com/uifaces/faces/twitter/walterstephanie/128.jpg" alt="">
									</div>
									<div class="col-sm-6 testimonial-info">
										<h4>Andy River</h4>
										<div class="stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Slide 3 -->
						<div class="owl-item">
							<blockquote>Perhaps the most romantic place in the city.</blockquote>
							<div class="testimonial-author">
								<div class="row">
									<div class="col-sm-6 testimonial-avatar">
										<img src="https://s3.amazonaws.com/uifaces/faces/twitter/dannpetty/128.jpg" alt="">
									</div>
									<div class="col-sm-6 testimonial-info">
										<h4>Jimmy Stone</h4>
										<div class="stars">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star star-off"></i>
											<i class="fa fa-star star-off"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div><!-- .testimonials-slider -->
				</div><!-- .col-sm-10 -->

			</div><!-- .row -->

		</div><!-- .container -->
	</section>

	<!-- Callout section end -->

	<!-- Services start -->

	<section id="videos" class="module">
	</section>

	<!-- Services end -->

	<!-- Gallery start -->

	<section id="recipes">
	</section>

	<!-- Gallery end -->

	<!-- Twitter start -->

	<section id="twitter" class="module module-gray">
		<div class="container">

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="module-header wow fadeInUp">
						<h2 class="module-title">Twitter feed</h2>
						<h3 class="module-subtitle">Our news and events</h3>
					</div>
				</div>
			</div><!-- .row -->

			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 text-center">
					<div class="twitter owl-carousel wow fadeInUp"></div>
				</div>
			</div><!-- .row -->

		</div><!-- .container -->
	</section>

	<!-- Twitter end -->

	<!-- Subscribe start -->

	<section id="contact" class="module module-dark">
	</section>

	<!-- Subscribe end -->

	<!-- Footer start -->
	<?php include(TEMPLATE.DS.'footer.php');?>
	<!-- Footer end -->

	<!-- Scroll-up -->

	<div class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-double-up"></i></a>
	</div>

	<!-- Javascript files -->
	<?php include(TEMPLATE.DS.'scripts.php');?>
</body>
</html>