<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Ticket Approved</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="The River template project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/styles/bootstrap-4.1.2/bootstrap.min.css">
  <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.3.4/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.3.4/animate.css">
  <link href="/plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="/styles/about.css">
  <link rel="stylesheet" type="text/css" href="/styles/about_responsive.css">
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
                <li><a href="{{route('seller.index')}}">Home</a></li>
                <li><a href="{{route('seller.profile')}}">Profile</a></li>
                <li><a href="{{route('seller.history')}}">Ticket Requests</a></li>
                <li class="active"><a href="#">Ticket Approved</a></li>
                <li><a href="{{route('seller.searchticket')}}">Search Ticket</a></li>
                <li><a href="/logout">Logout</a></li>
              </ul>
          </nav>

          <div class="header_phone d-flex flex-row align-items-center justify-content-center">
            <img src="images/phone.png" alt="">
            <span>01771385428</span>
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
              <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="{{route('seller.index')}}">Home</a></li>
                <li><a href="{{route('seller.profile')}}">Profile</a></li>
                <li><a href="{{route('seller.history')}}">Ticket Requests</a></li>
                <li class="active"><a href="#">Ticket Approved</a></li>
                <li><a href="{{route('seller.searchticket')}}">Search Ticket</a></li>
                <li><a href="/logout">Logout</a></li>
              </ul>
        </nav>
      </div>
      <div class="menu_extra">

        <div class="menu_phone d-flex flex-row align-items-center justify-content-center">
          <img src="images/phone-2.png" alt="">
          <span>01705554859</span>
        </div>
      </div>
    </div>

    <!-- Home -->

    <div class="home">
      <div class="background_image" style="background-image:url(images/img.jpg)"></div>
      <div class="home_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="home_content text-center">
                <div class="home_title">Ticket Approved</div>
                <div class="booking_form_container">

                  <table width="100%" border=1>
                      <tr>
                        
                        <td>Ticket Id</td>
                        <td>User</td>
                        <td>From</td>
                        <td>To</td>
                        <td>Date</td>
                        <td>SeatNo</td>
                        
                      </tr>
                      
                         @foreach($data as $value)
                         <tr>

                            <td>{{$value->id}}</td>
                            <td>{{$value->user}}</td>
                            <td>{{$value->fromstation}}</td>
                            <td>{{$value->tostation}}</td>
                            <td>{{$value->date}}</td>
                            <td>{{$value->seatno}}</td>
                            <td><a href="{{route('seller.send' , ['user'=>$value->user] )}}">send to user</a></td>

                         </tr>

                         @endforeach
                     
                    
                  </table>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="footer_content">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="footer_logo_container text-center">
                <div class="footer_logo">
                  <a href="/#"></a>
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
  <script src="js/about.js"></script>
  </body>
</html>
