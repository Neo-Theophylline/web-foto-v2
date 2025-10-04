@extends('layout.frontend.app')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="frontend/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">We Will Keep You An
                                Awesome Look</h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                    class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, New York, USA</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                    class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="frontend/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">Luxury Haircut at
                                Affordable Price</h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                    class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, New York, USA</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                    class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</h4>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img src="frontend/img/about.jpg" alt="About"
                            style="width:480px; height:480px;">
                    </div>

                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block bg-secondary text-primary py-1 px-4">About Us</p>
                    <h1 class="text-uppercase mb-4">More Than Just A Haircut. Learn More About Us!</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                        ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum
                        amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h3 class="text-uppercase mb-3">Since 1990</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                                diam et eos.</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-uppercase mb-3">1000+ clients</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                                diam et eos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Services</p>
                <h1 class="text-uppercase">What We Provide</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 120px; height: 200px; margin-left:25px; overflow: hidden;">
                            <img class="img-fluid" src="frontend/img/haha.jpeg" alt=""
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Haircut</h3>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                            <span class="text-uppercase text-primary">From $15</span>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-search text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 120px; height: 200px; margin-left:25px; overflow: hidden;">
                            <img class="img-fluid" src="frontend/img/haha.jpeg" alt=""
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Haircut</h3>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                            <span class="text-uppercase text-primary">From $15</span>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-search text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 120px; height: 200px; margin-left:25px; overflow: hidden;">
                            <img class="img-fluid" src="frontend/img/haha.jpeg" alt=""
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Haircut</h3>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                            <span class="text-uppercase text-primary">From $15</span>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-search text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 120px; height: 200px; margin-left:25px; overflow: hidden;">
                            <img class="img-fluid" src="frontend/img/haha.jpeg" alt=""
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Haircut</h3>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                            <span class="text-uppercase text-primary">From $15</span>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-search text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 120px; height: 200px; margin-left:25px; overflow: hidden;">
                            <img class="img-fluid" src="frontend/img/haha.jpeg" alt=""
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Haircut</h3>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                            <span class="text-uppercase text-primary">From $15</span>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-search text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 120px; height: 200px; margin-left:25px; overflow: hidden;">
                            <img class="img-fluid" src="frontend/img/haha.jpeg" alt=""
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Haircut</h3>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                            <span class="text-uppercase text-primary">From $15</span>
                        </div>
                        <a class="btn btn-square" href=""><i class="fa fa-search text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Partner Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Partnership</p>
                <h1 class="text-uppercase">Our Trusted Partners</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex align-items-center h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 145px; height: 145px; margin-left:25px; overflow: hidden;">
                            <img class="img-fluid" src="frontend/img/haha.jpeg" alt=""
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Haircut</h3>
                            <p>Temposssr erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex align-items-center h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 145px; height: 145px; margin-left:25px; overflow: hidden;">
                            <img class="img-fluid" src="frontend/img/haha.jpeg" alt=""
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Haircut</h3>
                            <p>Temposssr erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex align-items-center h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 145px; height: 145px; margin-left:25px; overflow: hidden;">
                            <img class="img-fluid" src="frontend/img/haha.jpeg" alt=""
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Haircut</h3>
                            <p>Temposssr erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex align-items-center h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 145px; height: 145px; margin-left:25px; overflow: hidden;">
                            <img class="img-fluid" src="frontend/img/haha.jpeg" alt=""
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Haircut</h3>
                            <p>Temposssr erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex align-items-center h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 145px; height: 145px; margin-left:25px; overflow: hidden;">
                            <img class="img-fluid" src="frontend/img/haha.jpeg" alt=""
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Haircut</h3>
                            <p>Temposssr erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex align-items-center h-100 p-5 ps-0">
                        <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 145px; height: 145px; margin-left:25px; overflow: hidden;">
                            <img class="img-fluid" src="frontend/img/haha.jpeg" alt=""
                                style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Haircut</h3>
                            <p>Temposssr erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner End -->


    <!-- Gallery Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Gallery</p>
                <h1 class="text-uppercase">Our Creative Gallery</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="frontend/img/team-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="frontend/img/team-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="frontend/img/team-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="frontend/img/team-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Worker</p>
                <h1 class="text-uppercase">Meet Our Team</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="frontend/img/team-1.jpg" alt="">
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">Barber Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="frontend/img/team-1.jpg" alt="">
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">Barber Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="frontend/img/team-1.jpg" alt="">
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">Barber Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="frontend/img/team-1.jpg" alt="">
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">Barber Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Testimonial</p>
                <h1 class="text-uppercase">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='frontend/img/testimonial-1.jpg' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed
                        sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo
                        sea clita.</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='frontend/img/testimonial-2.jpg' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed
                        sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo
                        sea clita.</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='frontend/img/testimonial-3.jpg' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed
                        sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo
                        sea clita.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
