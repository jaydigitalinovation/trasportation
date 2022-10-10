@extends('layout.header_footer')

@section('content')



	<div class="co_part-2">
    	<div class="fix-part-2">
    		<div class="img1">
    		    <img src="image/about-bg.jpg">
    	    </div>
    	    <div class="about">
    	    	<div class="container">
    	    		<h2>About</h2>
    		        <ul type="none">
    			        <li>Home</li>
    			        <li><span class="fa fa-angle-right"></span></li>
    			        <li class="bt">About Us</li>
    		        </ul>
    	    	</div>
    	    </div>
    	</div>
    </div>
    <div class="co_about2">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-5 col-md-12 col-12">
    				<div class="about2-img">
    					<img src="/uploads/{{$image}}">
    				</div>
    			</div>
    			<div class="col-lg-7 col-md-12 col-12">
    				<div class="co_tab">

                       
                        <div class="apple-tabs">
                        	<ul>
                                 @foreach($about_mission as $am)
                                <li>
                                	<a href="#{{$am->id}}"><span>{{$am->title}}</span></a>
                                </li>
                                  @endforeach
                            </ul>
                              @foreach($about_mission as $am)
                            <div class="contents">
                                <div id="{{$am->id}}">
                                    <div class="main-box">
                                    	{!!$am->description!!}
                                    </div>
                                </div>
                            </div>
                              @endforeach
                        </div>

                      
    		        </div>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="co_why">
    	<div class="container">
            @foreach($about_choose as $ac)
    		<div class="row">
    			<div class="col-lg-6">
    				<div class="why-img">
    					<img src="/uploads/{{$ac->image}}">
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<div class="why-content">
    					<h6>Why Choose Us?</h6>
    					<h3>{{$ac->title}}</h3>
    					<p>{{$ac->description}}</p>
    				</div>
    			</div>
    		</div>
            @endforeach
    	</div>
    </div>
    <div class="co_faq">
        @foreach($about_faq_des as $afd)
        <div class="container">
            <div class="title-head">
                <h1 class="title">{{$afd->title}}</h1>
                <p>{{$afd->description}}</p>
            </div>
            <div class="row set-faq">
                <div class="col-lg-6">
                    <div class="port1">
                        <div class="accordion-container">
                            @foreach($about_faq as $af)
                            @if($af->id %2!=0)
                            <div class="set">
                                <a>{{$af->question}}<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <p>{{$af->answer}}</p>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="port1">
                        <div class="accordion-container">
                            @foreach($about_faq as $af)
                            @if($af->id %2==0)
                            <div class="set">
                                <a>{{$af->question}}<i class="fa fa-plus"></i></a>
                                <div class="content">
                                    <p>{{$af->answer}}</p>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $(".apple-tabs").tabs({ 
            show: { effect: "slide", direction: "left", duration: 200, easing: "easeOutBack" } ,
            hide: { effect: "slide", direction: "right", duration: 200, easing: "easeInQuad" } 
        });

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
      $(".set > a i")
        .removeClass("fal fa-times")
        .addClass("fa-plus");
    } else {
      $(".set > a i")
        .removeClass("fal fa-times")
        .addClass("fa-plus");
      $(this)
        .find("i")
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