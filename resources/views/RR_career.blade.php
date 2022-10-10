@extends('layout.header_footer')


@section('content')



	<div class="co_part-2">
    	<div class="fix-part-2">
    		<div class="img1">
    		    <img src="image/about-bg.jpg">
    	    </div>
    	    <div class="about">
    	    	<div class="container">
    	    		<h2>Career</h2>
    		        <ul type="none">
    			        <li>Home</li>
    			        <li><span class="fa fa-angle-right"></span></li>
    			        <li class="bt">Career</li>
    		        </ul>
    	    	</div>
    	    </div>
    	</div>
    </div>
    <div class="co_career">
    	<div class="container">
    		<div class="title-head">
                <h1 class="title">We're Hiring!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident possimus quae adipisci quisquam distinctio</p>
            </div>
            <div class="row row2">
            	<div class="col-lg-6">
            		<div class="career-info">
            			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable Lorem Ipsum.</p>
            		</div>
            	</div>
            	<div class="col-lg-6">
            		<div class="career-img">
            			<img src="image/career-1.jpg">
            		</div>
            	</div>
            </div>
    	</div>
    </div>
    <div class="co_position">
    	<div class="container">
    		<div class="title-head">
                <h1 class="title">Opened Positions</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident possimus quae adipisci quisquam distinctio</p>
            </div>
            <div class="row set-faq">
                <div class="col-lg-12">
                    <div class="port1">
                        <div class="accordion-container">

                            @foreach($career_position as $cp)
                            <div class="set">
                                <a>{{$cp->question}}<i class="set-plus fa fa-plus"></i></a>
                                <div class="content">
                                    {!!$cp->answer!!}
                                </div>
                            </div>
                            @endforeach
                        
                        </div>
                    </div>
                </div>
    	   </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('#dynamic').addClass('newClass');
            } else {
                $('#dynamic').removeClass('newClass');
            }
        });


    	$(document).ready(function() {
            $(".set").on("click", function() {
                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");
                    $(this)
                        .children(".content")
                        .slideUp(200);
                    $(".set > a .set-plus")
                        .removeClass("fal fa-times")
                        .addClass("fa-plus");
                } 
                else {
                    $(".set > a .set-plus")
                        .removeClass("fal fa-times")
                        .addClass("fa-plus");
                    $(this)
                        .find(".set-plus")
                        .removeClass("fa-plus")
                        .addClass("fal fa-times");
                    $(".set").removeClass("active");
                    $(this).addClass("active");
                    $(".content").slideUp(200);
                    $(this)
                        .children(".content")
                        .slideDown(200);
                }
            });
        });
    </script>
@endsection