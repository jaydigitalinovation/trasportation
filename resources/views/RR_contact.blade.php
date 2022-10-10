@extends('layout.header_footer')


@section('content')

	<div class="co_part-2">
    	<div class="fix-part-2">
    		<div class="img1">
    		    <img src="image/about-bg.jpg">
    	    </div>
    	    <div class="about">
    	    	<div class="container">
    	    		<h2>Contact</h2>
    		        <ul type="none">
    			        <li>Home</li>
    			        <li><span class="fa fa-angle-right"></span></li>
    			        <li class="bt">Contact Us</li>
    		        </ul>
    	    	</div>
    	    </div>
    	</div>
    </div>
    <div class="co_contact">
        <div class="container">
            <div class="row fix-contact">
                <div class="col-lg-6 col-md-6 col-12 set-contact">
                    <h2>Get in touch</h2>
                    <form class="form1 row">
                        <div class="col-lg-6">
                            <div class="part-1">
                                <input type="text" placeholder="Name" name="name" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="part-1">
                                <input type="text" placeholder="Email" name="email" value="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="part-1">
                                <input type="text" placeholder="Subject" name="sub" value="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="part-1">
                                <textarea placeholder="Your Message" name="msg" rows="7" 
                                cols="30" value=""></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sub2">
                                <input type="submit" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-12 set-contact1">
                    <h2>Contact us</h2>
                    <div class="co_info row">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-text">
                            <p><strong>Address:</strong> 4415 Abner Place Greensboro,NC 27407</p>
                        </div>
                    </div>
                    <div class="co_info row row1">
                        <div class="info-icon">
                           <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="info-text">
                            <p><strong>Contact Number:</strong> +336 292 4630</p>
                        </div>
                    </div>
                    <div class="co_info row row1">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-text info-text1">
                            <p><strong>Email Us:</strong> info@rrtransportationinc.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3226.111396959376!2d-79.87814508538357!3d36.04198711771083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88531af866f48a1d%3A0x3000c84ff6ab5382!2sR%20%26%20R%20Transportation!5e0!3m2!1sen!2sin!4v1629779481186!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('#dynamic').addClass('newClass');
            } else {
                $('#dynamic').removeClass('newClass');
            }
        });


    	$(".apple-tabs").tabs({ 
            show: { effect: "slide", direction: "left", duration: 200, easing: "easeOutBack" } ,
            hide: { effect: "slide", direction: "right", duration: 200, easing: "easeInQuad" } 
        });
    </script>
@endsection