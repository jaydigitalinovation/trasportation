<!DOCTYPE html>
<html>
<head>
    <title>R&R TRANSPORTATION</title>
    <link rel="stylesheet" type="text/css" href="/css/home1.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
    <link rel="icon" href="/image/logo.jpg">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="body">
    <div class="co_header" id="dynamic">
        <div class="container1">
            <div class="row row1">
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="logo">
                        <a href="index.html"><img src="image/logo.jpg"></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-6 con-menu">
                    <div class="item1">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="contact">
                                    <li>
                                        <i class="fas fa-envelope-open"></i>
                                        <a href="mailto:info@rrtransportationinc.com">info@rrtransportationinc.com</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-phone-alt"></i>
                                        <a href="tel:+336 292 4630">+336 292 4630</a>
                                    </li>
                                    <li>
                                        <a href="#">Login</a>
                                    </li>
                                    <li>
                                        <select>
                                            <option>Language</option>
                                            <option>English</option>
                                            <option>German</option>
                                            <option>Français</option>
                                            <option>Italiano</option>
                                        </select>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-12">
                                <div class="menu">
                                    <nav class="shift">
                                        <ul>
                                           <li><a href="{{url('/')}}">Home</a></li>
                                           <li><a href="{{url('/about')}}">About Us</a></li>
                                           <li><a href="{{url('/team')}}">Our Team</a></li>
                                           <li><a href="{{url('/gallary')}}">Gallery</a></li>
                                           <li><a href="{{url('/service')}}">Services</a></li>
                                           <li><a href="{{url('/career')}}">Career</a></li>
                                           <li><a href="{{url('/enquiry')}}">Enquiry Form</a></li>
                                           <li><a href="{{url('/contact')}}">Contact Us</a></li>

                                            <li class="quote_btn">
                                      <div class="btn_container">
                                            <a class="quote_id" href="#get_quote">
                                                <div class="btn-top"><span>Get Quote</span></div>
                                            </a>
                                        </div>
                                    </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     @yield('content')

    <div class="co_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer">
                        <h2 class="footer-title">About Us</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa explicabo.</p>
                        <ul class="social-link">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer use">
                        <h2 class="footer-title">Useful Links</h2>
                        <a href="RR_about.html">About Us</a>
                        <a href="RR_service.html">Our Service</a>
                        <a href="#">Terms & Conditions</a>
                        <a href="RR_gallery.html">Gallery</a>
                        <a href="RR_contact.html">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer">
                        <h2 class="footer-title">Contact Us</h2>
                        <ul class="con-home">
                            <li><i class="fa fa-home" aria-hidden="true"></i>
                                <p>4415 Abner Place Greensboro, <br>NC  27407</p>
                            </li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                <p><a href="mailto:info@rrtransportationinc.com">info@rrtransportationinc.com</a></p>    
                            </li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>
                                <p><a href="tel:+336 292 4630">+336 292 4630</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer">
                        <h2 class="footer-title">Newsletter</h2>
                        <p>Get latest updates and offers.</p>
                        <form class="form2">
                            <input type="text" placeholder="Enter your email here" name="email" value="">
                            <div class="button sub1">submit</div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">
        $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('#dynamic').addClass('newClass');
            } else {
                $('#dynamic').removeClass('newClass');
            }
        });

        AOS.init({
            duration: 1000,
            offset: 300
        });

        $('.slider-nav').slick({
            // autoplay: false,
            // autoplaySpeed: 1500,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            infinite: true
        });

        $('.slider-nav1').slick({
            autoplay: true,
            autoplaySpeed: 1500,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            focusOnSelect: true,
            prevArrow: '<div class="slide-arrow prev-arrow"><i class="far fa-angle-left"></i></div>',
            nextArrow: '<div class="slide-arrow next-arrow"><i class="far fa-angle-right"></i></div>'
        });

        $(document).ready(function(){
              // Add smooth scrolling to all links
              $(".quote_id").on('click', function(event) {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                  scrollTop: $(hash).offset().top - 300
                }, 800, function(){
               
                  // Add hash (#) to URL when done scrolling (default click behavior)
                  window.location.hash = hash;
                });
              });
            });

    </script>
</body>
</html>