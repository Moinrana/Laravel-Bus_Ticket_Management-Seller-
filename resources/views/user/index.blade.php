<!DOCTYPE html>
<html lang="en">

<head>
  <title>Royal Express</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="The River template project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
  <link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
  <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

  <div class="super_container">

    <!-- Header -->

    <header class="header">
      <div class="header_content d-flex flex-row align-items-center justify-content-start">
        <div class="logo"><a href="/">Royal Express</a></div>
        <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
          <nav class="main_nav">
            <ul class="d-flex flex-row align-items-start justify-content-start">
              <li class="active"><a href="/">Home</a></li>
              <li><a href="/login">Login</a></li>
              <li><a href="/signup">Signup</a></li>
                </ul>
          </nav>

          <div class="header_phone d-flex flex-row align-items-center justify-content-center">
<img src="images/user.jpg" alt="">
            <span>User: {{session('uname')}}</span>
          </div>

          <!-- Hamburger Menu -->
          <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
        </div>
      </div>
    </header>

    <!-- Menu -->

    <div class="menu trans_400 d-flex flex-column align-items-end justify-content-start">
      <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
      <div class="menu_content">
        <nav class="menu_nav text-right">
          <ul>
						<li class="active"><a href="/">Home</a></li>
						<li><a href="/login">Login</a></li>
						<li><a href="/signup">Signup</a></li>
						 </ul>
        </nav>
      </div>
      <div class="menu_extra">

        <div class="menu_phone d-flex flex-row align-items-center justify-content-center">
          <img src="images/user.jpg" alt="">
          <span>User: {{session('uname')}}</span>
        </div>
      </div>
    </div>

    <!-- Home -->

    <div class="home">
      <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">

          <!-- Slide -->
          <div class="slide">
            <div class="background_image" style="background-image:url(images/img.jpg)"></div>
            <div class="home_container">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="home_content text-center">
                      <div class="home_title">Royal Coach Bus service</div>
                      <div class="booking_form_container">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide -->
          <div class="slide">
            <div class="background_image" style="background-image:url(images/1.jpg)"></div>
            <div class="home_container">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="home_content text-center">
                      <div class="home_title">Safe and secure journey</div>
                      <div class="booking_form_container">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide -->
          <div class="slide">
            <div class="background_image" style="background-image:url(images/6.jpg)"></div>
            <div class="home_container">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="home_content text-center">
                      <div class="home_title">Hassle free online tickets</div>
                      <div class="booking_form_container">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Home Slider Dots -->
        <div class="home_slider_dots_container">
          <div class="home_slider_dots">
            <ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-start justify-content-start">
              <li class="home_slider_custom_dot active">01.</li>
              <li class="home_slider_custom_dot">02.</li>
              <li class="home_slider_custom_dot">03.</li>
            </ul>
          </div>
        </div>

      </div>
    </div>


    <!-- Gallery

    <div class="gallery">
      <div class="gallery_slider_container">
        <div class="owl-carousel owl-theme gallery_slider">
 -->
          <!-- Slide
          <div class="gallery_item">
            <div class="background_image" style="background-image:url(images/gallery_1.jpg)"></div>
            <a class="colorbox" href="images/gallery_1.jpg"></a>
          </div>
-->
          <!-- Slide
          <div class="gallery_item">
            <div class="background_image" style="background-image:url(images/gallery_2.jpg)"></div>
            <a class="colorbox" href="images/gallery_2.jpg"></a>
          </div>
-->
          <!-- Slide
          <div class="gallery_item">
            <div class="background_image" style="background-image:url(images/gallery_3.jpg)"></div>
            <a class="colorbox" href="images/gallery_3.jpg"></a>
          </div>
-->
          <!-- Slide
          <div class="gallery_item">
            <div class="background_image" style="background-image:url(images/gallery_4.jpg)"></div>
            <a class="colorbox" href="images/gallery_4.jpg"></a>
          </div>

        </div>
      </div>
    </div>
-->
    <!-- About

    <div class="about">
      <div class="container">
        <div class="row">
-->
          <!-- About Content
          <div class="col-lg-6">
            <div class="about_content">
              <div class="about_title">

              </div>
              <div class="about_text">
                <p>Royal Express is a popular bus service in Western-Bangladesh. We are serving for 10 years within honor and pride. Safe and secure road journey is our meditation. Our current service areas are from Dhaka to Magura, Jhenidah, Jessore, Chuadanga and Meherpur. Our online ticket is availabe now. Please login to buy tickets online.  </p>
              </div>
            </div>
          </div>
-->
          <!-- About Images
          <div class="col-lg-6">
            <div class="about_images d-flex flex-row align-items-center justify-content-between flex-wrap">
              <img src="images/about_1.png" alt="">
              <img src="images/about_2.png" alt="">
              <img src="images/about_3.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Testimonials

    <div class="testimonials">
      <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
      <div class="testimonials_overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="testimonials_slider_container">
-->
              <!-- Testimonials Slider
              <div class="owl-carousel owl-theme test_slider">
-->
                <!-- Slide
                <div class="test_slider_item text-center">
                  <div class="rating rating_5 d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
                  <div class="testimonial_title"><a href="#">Perfect Stay</a></div>
                  <div class="testimonial_text">
                    <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic.</p>
                  </div>
                  <div class="testimonial_image"><img src="images/user_1.jpg" alt=""></div>
                  <div class="testimonial_author"><a href="#">Samantha Smith</a>, Greece</div>
                </div>
-->
                <!-- Slide
                <div class="test_slider_item text-center">
                  <div class="rating rating_5 d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
                  <div class="testimonial_title"><a href="#">Nice place</a></div>
                  <div class="testimonial_text">
                    <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic.</p>
                  </div>
                  <div class="testimonial_image"><img src="images/user_2.jpg" alt=""></div>
                  <div class="testimonial_author"><a href="#">Michael Doe</a>, Italy</div>
                </div>
-->
                <!-- Slide
                <div class="test_slider_item text-center">
                  <div class="rating rating_5 d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
                  <div class="testimonial_title"><a href="#">We loved it</a></div>
                  <div class="testimonial_text">
                    <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic.</p>
                  </div>
                  <div class="testimonial_image"><img src="images/user_3.jpg" alt=""></div>
                  <div class="testimonial_author"><a href="#">Luis Garcia</a>, Spain</div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
-->
    <!-- Booking-->

    <div class="booking">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="booking_title text-center">
              <h2>Royal Express / 10 years of excellence</h2>
            </div>
            <div class="booking_text text-center">

								<p>Royal Express is a popular bus service in Western-Bangladesh. We are serving for 10 years within honor and pride. Safe and secure road journey is our meditation. Our current service areas are from Dhaka to Magura, Jhenidah, Jessore, Chuadanga and Meherpur. Our online ticket is availabe now. Please login to buy tickets online.  </p>
							</div>

            <!-- Booking Slider -->
            <div class="booking_slider_container">
              <div class="owl-carousel owl-theme booking_slider">

                <!-- Slide -->
                <div class="booking_item">
                  <div class="background_image" style="background-image:url(images/1.jpg)"></div>
                  <div class="booking_overlay trans_200"></div>
                  </div>

                <!-- Slide -->
                <div class="booking_item">
                  <div class="background_image" style="background-image:url(images/3.jpg)"></div>
                  <div class="booking_overlay trans_200"></div>

                </div>

                <!-- Slide -->
                <div class="booking_item">
                  <div class="background_image" style="background-image:url(images/6.jpg)"></div>
                  <div class="booking_overlay trans_200"></div>
                  </div>
								<!-- Slide -->
								<div class="booking_item">
									<div class="background_image" style="background-image:url(images/7.jpg)"></div>
									<div class="booking_overlay trans_200"></div>
								</div>

								<div class="booking_item">
									<div class="background_image" style="background-image:url(images/10.jpg)"></div>
									<div class="booking_overlay trans_200"></div>
								</div>
								<div class="booking_item">
									<div class="background_image" style="background-image:url(images/12.jpg)"></div>
									<div class="booking_overlay trans_200"></div>
								</div>
								<div class="booking_item">
									<div class="background_image" style="background-image:url(images/14.jpg)"></div>
									<div class="booking_overlay trans_200"></div>
								</div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

		<!-- Features -->

		<div class="features">
			<div class="container">
				<div class="row">

					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
							<div class="icon_box_icon"><img src="images/icon_1.png" class="svg" alt="secure icon"></div>
							<div class="icon_box_title">
								<h2>Safe & Secure Journey</h2>
							</div>
							<div class="icon_box_text">
								<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum.</p>
							</div>
						</div>
					</div>

					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
							<div class="icon_box_icon"><img src="images/icon_2.svg" class="svg" alt="Fast icon"></div>
							<div class="icon_box_title">
								<h2>Faster destination</h2>
							</div>
							<div class="icon_box_text">
								<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum.</p>
							</div>
						</div>
					</div>

					<!-- Icon Box-->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
							<div class="icon_box_icon"><img src="images/logo.png" class="svg" alt="customer support"></div>
							<div class="icon_box_title">
								<h2>Better customer support</h2>
							</div>
							<div class="icon_box_text">
								<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

    <!-- Footer -->

    <footer class="footer">
      <div class="footer_content">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="footer_logo_container text-center">
                <div class="footer_logo">
                  <a href="#"></a>
                  <div>Royal Express</div>
                  <div>since 2009</div>
                </div>
              </div>
            </div>
          </div>
          <div class="row footer_row">

            <!-- Address -->
            <div class="col-lg-3">
              <div class="footer_title">Our Address</div>
              <div class="footer_list">
                <ul>
                  <li>Bara Bazar</li>
                  <li>Chuadanga 7200</li>
                  <li>Bangladesh</li>
                </ul>
              </div>
            </div>

            <!-- Reservations -->
            <div class="col-lg-3">
              <div class="footer_title">Contact info</div>
              <div class="footer_list">
                <ul>
									<li>customercare.royalexpress@gmail.com</li>
                  <li>Cell: 01771385428</li>
                </ul>
              </div>
            </div>

            <!-- Newsletter
            <div class="col-lg-3">
              <div class="footer_title">Newsletter</div>
              <div class="newsletter_container">
                <form action="#" class="newsletter_form" id="newsletter_form">
                  <input type="email" class="newsletter_input" placeholder="Your email address" required="required">
                  <button class="newsletter_button">Subscribe</button>
                </form>
              </div>
            </div>
 -->
            <!-- Footer images -->

          </div>
        </div>
      </div>
      <div class="copyright">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>
          document.write(new Date().getFullYear());
        </script> All rights reserved @ Royal Express
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="styles/bootstrap-4.1.2/popper.js"></script>
  <script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
  <script src="plugins/greensock/TweenMax.min.js"></script>
  <script src="plugins/greensock/TimelineMax.min.js"></script>
  <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
  <script src="plugins/greensock/animation.gsap.min.js"></script>
  <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
  <script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
  <script src="plugins/easing/easing.js"></script>
  <script src="plugins/progressbar/progressbar.min.js"></script>
  <script src="plugins/parallax-js-master/parallax.min.js"></script>
  <script src="plugins/jquery-datepicker/jquery-ui.js"></script>
  <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>
