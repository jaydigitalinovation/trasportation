@extends('layout.header_footer')


@section('content')


	<div class="co_part-2">
    	<div class="fix-part-2">
    		<div class="img1">
    		    <img src="image/about-bg.jpg">
    	    </div>
    	    <div class="about">
    	    	<div class="container">
    	    		<h2>Gallery</h2>
    		        <ul type="none">
    			        <li>Home</li>
    			        <li><span class="fa fa-angle-right"></span></li>
    			        <li class="bt">Gallery</li>
    		        </ul>
    	    	</div>
    	    </div>
    	</div>
    </div>
    <div class="co_gallery">
        <div class="container">
            <div class="gallery">
                <a href="image/banner-3.jpg" data-lightbox="homePortfolio">
                    <img src="image/banner-3.jpg"/>
                </a>
                <a href="image/gallery-1.jpg" data-lightbox="homePortfolio" class="vertical">
                    <img src="image/gallery-1.jpg"/>
                </a>
                <a href="image/gallery-2.jpg" data-lightbox="homePortfolio" class="horizontal">
                    <img src="image/gallery-2.jpg"/>
                </a>
                <a href="image/gallery-3.jpg" data-lightbox="homePortfolio">
                    <img src="image/gallery-3.jpg"/>
                </a>      
                <a href="image/gallery-4.jpg" data-lightbox="homePortfolio" class="big">
                    <img src="image/gallery-4.jpg"/>
                </a>      
                <a href="image/gallery-5.jpg" data-lightbox="homePortfolio">
                    <img src="image/gallery-5.jpg"/>
                </a>      
                <a href="image/gallery-6.jpg" data-lightbox="homePortfolio" class="vertical">
                    <img src="image/gallery-6.jpg"/>
                </a>      
                <a href="image/gallery-7.jpg" data-lightbox="homePortfolio">
                    <img src="image/gallery-7.jpg"/>
                </a>      
                <a href="image/gallery-8.jpg" data-lightbox="homePortfolio" class="horizontal">
                    <img src="image/gallery-8.jpg"/>
                </a>      
                <a href="image/gallery-9.jpg" data-lightbox="homePortfolio">
                    <img src="image/gallery-9.jpg"/>
                </a>      
                <a href="image/gallery-10.jpg" data-lightbox="homePortfolio" class="big">
                  <img src="image/gallery-10.jpg"/>
                </a>      
                <a href="image/gallery-11.jpg" data-lightbox="homePortfolio">
                    <img src="image/gallery-11.jpg"/>
                </a>      
                <a href="image/gallery-12.jpg" data-lightbox="homePortfolio">
                    <img src="image/gallery-12.jpg"/>
                </a>      
                <a href="image/gallery-13.jpg" data-lightbox="homePortfolio">
                    <img src="image/gallery-13.jpg"/>
                </a>
            </div>
        </div>
    </div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js"></script>
    <script type="text/javascript">
    	$(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('#dynamic').addClass('newClass');
            } else {
                $('#dynamic').removeClass('newClass');
            }
        });
    </script>
@endsection