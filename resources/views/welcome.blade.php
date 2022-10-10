@extends('layout.header_footer')


@section('content')



    <div class="co_banner">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($home as $key=>$h)
                @if($key+1 == 1)
                <div class="carousel-item active">
                    <div class="banner-img">
                        <img src="/uploads/{{$h->image}}" alt="Los Angeles">
                    </div>
                    <div class="banner-content"></div>
                    <div class="banner-info1">
                        <div class="banner-info">
                            <h6>{{$h->title1}}</h6>
                            <h1>{{$h->title2}}</h1>
                            <button class="btn2"><a href="RR_about.html">Read More</a></button>
                        </div>
                    </div>
                </div>
                @else

                <div class="carousel-item">
                    <div class="banner-img">
                        <img src="/uploads/{{$h->image}}" alt="banner2">
                    </div>
                    <div class="banner-content"></div>
                    <div class="banner-info1">
                        <div class="banner-info">
                            <h6>{{$h->title1}}</h6>
                            <h1>{{$h->title2}}</h1>
                            <button class="btn2"><a href="RR_about.html">Read More</a></button>
                        </div>
                    </div>
                </div>

                @endif
                @endforeach
                
            </div>
            <a class="arrow carousel-control-prev" href="#demo" data-slide="prev">
                <i class="far fa-angle-left"></i>
            </a>
            <a class="arrow carousel-control-next" href="#demo" data-slide="next">
                <i class="far fa-angle-right"></i>
            </a>
        </div>
    </div>
    <div class="co_service1">
        <div class="container">
            <div class="row">

                @foreach($service as $s)
                <div class="col-lg-4 flex-1" data-aos="flip-left">
                    <div class="service1">
                        <div class="feature_box equal-height">
                            <span class="service1-icon">{!!$s->icon!!}</span>
                            <div class="description">
                                <h4>{{$s->title}}</h4>
                                <p>{{$s->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="co_about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-img">
                        <img src="image/about-1.jpg" alt="">
                        <div class="about-icon">
                            <img src="image/container-truck.png">
                            <div class="shape shape1"></div>
                            <div class="shape shape2"></div>
                            <div class="shape shape3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-info">
                        <h1>Professional Trucking Carrier Since 1990:</h1>
                        <p>Owner and President, Karl Robinson of R&R Transportation, Inc.,operates an asset-based, family-owned trucking company within a geographical area of approximately 300 milesbased in Greensboro, NC. The company has earned andmaintains the position as a front-runner in specialized services and a niche of LLTL "Local Less Than Truck Load" that it uses to service a wide variety of industries.Awards received by R & R Transportation, Inc., are: The Small Minority Business-Person Award, 3-M Companies Quality Carrier of the Year award 1997, Jostens Graphics Quality Carrier Award 1997, 1998, 1999, 2000, 2002, 2004, 2006, AT & T Federal Procurement Citation 1992, and the 2012 Piedmont Business Ethics Award, Triad Family Business Award 2019.</p>
                        <div class="button_container">
                            <a href="RR_about.html">
                                <div class="btn-1"><span>Learn More</span></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="co_service">
        <div class="container">
            <div class="title-head" data-aos="fade-left">
                <h1 class="title">Our Services</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident possimus quae adipisci quisquam distinctio</p>
            </div>
            <div class="main row2" data-aos="fade-up">
                <div class="slider slider-nav">
                    <div>
                        <div class="service">
                            <div class="service-img">
                                <img src="image/service-1.jpg">
                            </div>
                            <div class="service-main service-x">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Liftgate pickup and delivery</h2>
                                </div>
                            </div>
                            <div class="service-main service-main1">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Liftgate pickup and delivery</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident possimus quae</p>
                                    <a href="RR_service.html">Read More <i class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div>
                        <div class="service">
                            <div class="service-img">
                                <img src="image/service-2.jpg">
                            </div>
                            <div class="service-main service-x">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Residential pickup and delivery</h2>
                                </div>
                            </div>
                            <div class="service-main service-main1">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Residential pickup and delivery</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident possimus quae</p>
                                    <a href="RR_service.html">Read More <i class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div>
                        <div class="service">
                            <div class="service-img">
                                <img src="image/service-3.jpg">
                            </div>
                            <div class="service-main service-x">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Corporate and business shipping</h2>
                                </div>
                            </div>
                            <div class="service-main service-main1">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Corporate and business shipping</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident possimus quae</p>
                                    <a href="RR_service.html">Read More <i class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div>
                        <div class="service">
                            <div class="service-img">
                                <img src="image/service-1.jpg">
                            </div>
                            <div class="service-main service-x">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Loading dock pickup and delivery</h2>
                                </div>
                            </div>
                            <div class="service-main service-main1">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Loading dock pickup and delivery</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident possimus quae</p>
                                    <a href="RR_service.html">Read More <i class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div>
                        <div class="service">
                            <div class="service-img">
                                <img src="image/service-2.jpg">
                            </div>
                            <div class="service-main service-x">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Ramp pickup and delivery</h2>
                                </div>
                            </div>
                            <div class="service-main service-main1">
                                <div class="service-font">
                                    <i class="fad fa-truck"></i>
                                </div>
                                <div class="service-name">
                                    <h2>Ramp pickup and delivery</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident possimus quae</p>
                                    <a href="RR_service.html">Read More <i class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="co_enquiry" id="get_quote">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form">
                        <h1>Request A Quote</h1>
                        <form class="row">
                            <div class="col-lg-6">
                                <div class="test">
                                    <input type="text" placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="test">
                                    <input type="text" placeholder="Phone Number" name="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="test">
                                    <input type="email" placeholder="Email Address" name="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="test">
                                    <input type="date" placeholder="Moving Date" name="Moving Date">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="test">
                                    <input list="text1" placeholder="Moving From" name="Moving From">
                                    <datalist id="text1">
                                        <option>Mumbai</option>
                                        <option>Delhi</option>
                                        <option>Goa</option>
                                        <option>Chennai</option>
                                        <option>Chandigarh</option>
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="test">
                                    <input list="text1" placeholder="Moving To" name="Moving to">
                                    <datalist id="text1">
                                        <option>Delhi</option>
                                        <option>Goa</option>
                                        <option>Chennai</option>
                                        <option>Delhi</option>
                                        <option>Mumbai</option>
                                    </datalist>
                                </div>
                            </div>
                            <div class="sub">
                                <input type="submit" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>
    <div class="co_testimonial">
        <div class="container">
            <div class="title-head" data-aos="fade-left">
                <h1 class="title">Testimonials</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident possimus quae adipisci quisquam distinctio</p>
            </div>
            <div class="main main1" data-aos="fade-down">
                <div class="slider slider-nav1">
                    <div>
                        <div class="client-main">
                            <div class="client">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="image/client-1.jpg">
                                </div>
                                <div class="client-name">
                                    <h3>Felicity Rains</h3>
                                    <p>Life coach</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="client-main">
                            <div class="client">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="image/client-2.jpg">
                                </div>
                                <div class="client-name">
                                    <h3>Sana Khan</h3>
                                    <p>Student</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="client-main">
                            <div class="client">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="image/client-1.jpg">
                                </div>
                                <div class="client-name">
                                    <h3>Felicity Rains</h3>
                                    <p>Life coach</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="client-main">
                            <div class="client">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="image/client-2.jpg">
                                </div>
                                <div class="client-name">
                                    <h3>Sana Khan</h3>
                                    <p>Student</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="client-main">
                            <div class="client">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                            <div class="client-info">
                                <div class="client-img">
                                    <img src="image/client-1.jpg">
                                </div>
                                <div class="client-name">
                                    <h3>Felicity Rains</h3>
                                    <p>Life coach</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection