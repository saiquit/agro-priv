@extends('layouts.client.app')

@section('title', 'Home')
@section('content')

{{-- Hero Start --}}
<div class="container-fluid position-relative p-0">
    <!-- Carousel Start -->
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url('https://placeholder.com/1920x1080'); background-size: cover; background-position: center; aspect-ratio: 14/6;">
                    <div class="carousel-caption d-flex align-items-end justify-content-end h-100">
                        <div class="carousel-caption-content text-center text-md-end text-white"
                            style="max-width: 900px;">
                            <h4 class="text-uppercase fw-bold mb-4 fadeInLeft animated display-3"
                                style="animation-delay: 1s;">
                                {{__('Home.building_green_bangladesh')}}
                            </h4>
                            <p class="mb-5 fs-5 fadeInLeft animated" style="animation-delay: 1.5s;">
                                {{__('Home.intro_text')}}
                            </p>
                            <a class="btn btn-primary rounded-pill py-3 px-5 me-2" href="#"
                                style="animation-delay: 1.7s;">{{__('Home.learn_more')}}</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item"
                    style="background-image: url('https://placeholder.com/1920x1080'); background-size: cover; background-position: center; aspect-ratio: 14/6;">
                    <div class="carousel-caption d-flex align-items-end justify-content-end h-100">
                        <div class="carousel-caption-content text-center text-md-end text-white"
                            style="max-width: 900px;">
                            <h4 class="text-uppercase fw-bold mb-4 fadeInRight animated display-3"
                                style="animation-delay: 1s;">
                                Sustainable Agrarian System
                            </h4>
                            <p class="mb-5 fs-5 fadeInRight animated" style="animation-delay: 1.5s;">
                                Contributing to a sustainable agrarian system, Agro Private Company ensures greater crop
                                protection for optimal yields.
                            </p>
                            <a class="btn btn-primary rounded-pill py-3 px-5 me-2" href="#"
                                style="animation-delay: 1.7s;">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item"
                    style="background-image: url('https://placeholder.com/1920x1080'); background-size: cover; background-position: center; aspect-ratio: 14/6;">
                    <div class="carousel-caption d-flex align-items-end justify-content-end h-100">
                        <div class="carousel-caption-content text-center text-md-end text-white"
                            style="max-width: 900px;">
                            <h4 class="text-uppercase fw-bold mb-4 fadeInRight animated display-3"
                                style="animation-delay: 1s;">
                                Expanding Farmers' Capabilities
                            </h4>
                            <p class="mb-5 fs-5 fadeInRight animated" style="animation-delay: 1.5s;">
                                By supplying effective pesticides, Agro Private Company helps farmers protect crops from
                                damage, enhancing production capacity.
                            </p>
                            <a class="btn btn-primary rounded-pill py-3 px-5 me-2" href="#"
                                style="animation-delay: 1.7s;">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true"
                    style="animation-delay: 1.3s;">
                    <i class="fa fa-angle-left fa-3x"></i>
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true"
                    style="animation-delay: 1.3s;">
                    <i class="fa fa-angle-right fa-3x"></i>
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

</div>
<!-- Navbar & Hero End -->


<!-- feature Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
            <h4 class="text-uppercase text-primary">Our Features</h4>
            <h4 class="display-4 text-capitalize mb-3">Ensuring Quality and Sustainability in Agrochemicals</h4>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="fas fa-check-circle text-white fa-3x"></i></div>
                    <a href="#" class="h4 mb-3">Stringent Quality Check</a>
                    <p class="mb-3">Our products undergo rigorous quality checks to ensure they meet international
                        standards, offering the best protection for crops and aquaculture.</p>
                    <a href="#" class="btn text-secondary">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="fas fa-filter text-white fa-3x"></i></div>
                    <a href="#" class="h4 mb-3">5-Step Filtration Process</a>
                    <p class="mb-3">Our pesticides and fertilizers go through a detailed 5-step filtration process,
                        ensuring purity and effectiveness for the protection of crops and sustainable aquaculture.</p>
                    <a href="#" class="btn text-secondary">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="fas fa-flask text-white fa-3x"></i></div>
                    <a href="#" class="h4 mb-3">Precise Composition</a>
                    <p class="mb-3">We ensure the exact composition of all our agrochemical products, maximizing their
                        effectiveness in pest control and crop nourishment.</p>
                    <a href="#" class="btn text-secondary">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4">
                    <div class="feature-icon mb-3"><i class="fas fa-microscope text-white fa-3x"></i></div>
                    <a href="#" class="h4 mb-3">Laboratory Testing</a>
                    <p class="mb-3">We conduct comprehensive lab testing to ensure that our fertilizers, pesticides, and
                        aquaculture products meet the highest standards of safety and effectiveness.</p>
                    <a href="#" class="btn text-secondary">Learn More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature End -->


<!-- About Start -->
@include('client.sections.about')
<!-- About End -->

<!-- Service Start -->
<div class="container-fluid service bg-light overflow-hidden py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Our Services</h4>
            <h1 class="display-3 text-capitalize mb-3">Ensuring Sustainable Agro Solutions</h1>
        </div>
        <div class="row gx-0 gy-4 align-items-center">
            <div class="col-lg-6 col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-item rounded p-4 mb-4"
                    data-image="http://agroprivatebd.com/home/wp-content/uploads/2021/06/%E0%A6%9C%E0%A6%BF%E0%A6%93%E0%A6%AD%E0%A6%BE%E0%A6%A8-ZIOVAN-210x300.jpg">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="service-content text-end">
                                    <a href="#" class="h4 d-inline-block mb-3">Agrochemical Consultation</a>
                                    <p class="mb-0">We offer expert consultation to help farmers choose the right
                                        agrochemical solutions for effective crop protection and soil nourishment.</p>
                                </div>
                                <div class="ps-4">
                                    <div class="service-btn"><i class="fas fa-hand-holding-water text-white fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item rounded p-4 mb-4"
                    data-image="http://agroprivatebd.com/home/wp-content/uploads/2021/07/%E0%A6%85%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AE%E0%A7%8B%E0%A6%B2%E0%A7%87%E0%A6%B8-AMMOLESS-210x300.jpg">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="service-content text-end">
                                    <a href="#" class="h4 d-inline-block mb-3">Pesticide Application</a>
                                    <p class="mb-0">We provide safe and effective pesticide application services,
                                        ensuring proper use of our products for optimal crop yield and pest control.</p>
                                </div>
                                <div class="ps-4">
                                    <div class="service-btn"><i class="fas fa-dumpster-fire text-white fa-2x"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item rounded p-4 mb-0"
                    data-image="http://agroprivatebd.com/home/wp-content/uploads/2021/06/%E0%A6%AD%E0%A6%BF%E0%A6%9F%E0%A6%BE-%E0%A6%B8%E0%A6%BF-VITA-C-210x300.jpg">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="service-content text-end">
                                    <a href="#" class="h4 d-inline-block mb-3">Soil Health Testing</a>
                                    <p class="mb-0">We offer soil testing services to ensure your land is fertile and
                                        suitable for high-quality crop production, contributing to long-term farm
                                        sustainability.</p>
                                </div>
                                <div class="ps-4">
                                    <div class="service-btn"><i class="fas fa-filter text-white fa-2x"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp centerImage" data-wow-delay="0.3s">
                <div class="bg-transparent">
                    <img src="http://agroprivatebd.com/home/wp-content/uploads/2021/06/%E0%A6%AB%E0%A6%BF%E0%A6%B8%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%A5-%E0%A6%8F%E0%A6%AB-FISHGROWTH-F-210x300.jpg"
                        class="img-fluid w-100" alt="Agriculture Services">
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-item rounded p-4 mb-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="pe-4">
                                    <div class="service-btn"><i
                                            class="fas fa-assistive-listening-systems text-white fa-2x"></i></div>
                                </div>
                                <div class="service-content">
                                    <a href="#" class="h4 d-inline-block mb-3">Water Treatment Solutions</a>
                                    <p class="mb-0">We offer state-of-the-art water treatment services, ensuring safe
                                        and clean water for agricultural and aquaculture use.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item rounded p-4 mb-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="pe-4">
                                    <div class="service-btn"><i class="fas fa-recycle text-white fa-2x"></i></div>
                                </div>
                                <div class="service-content">
                                    <a href="#" class="h4 d-inline-block mb-3">Sustainability Research</a>
                                    <p class="mb-0">Our research services provide valuable insights into sustainable
                                        farming practices and eco-friendly agrochemical use to protect both crops and
                                        the environment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item rounded p-4 mb-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="pe-4">
                                    <div class="service-btn"><i class="fas fa-project-diagram text-white fa-2x"></i>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <a href="#" class="h4 d-inline-block mb-3">Project Planning & Support</a>
                                    <p class="mb-0">We help farmers with project planning to enhance productivity,
                                        providing strategic advice on resource management and crop production.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->



<!-- Products Start -->
<div class="container-fluid product py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Our Products</h4>
            <h1 class="display-3 text-capitalize mb-3">We Deliver High-Quality Agrochemical Solutions</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($latestProducts as $product)
            <div class="col-md-4">
                <x-client.product.product-card :product="$product" />
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end g-4 my-4">
            <a href="{{ route('client.products', []) }}" class="btn btn-primary py-3 px-4">See More</a>
        </div>
    </div>
</div>
<!-- Products End -->


<!-- Blog Start -->
<div class="container-fluid blog pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Events</h4>
            <h1 class="display-3 text-capitalize mb-3">Latest Events & News</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($latestEvents as $event)
            <x-client.event.event-card :event="$event" :loop="$loop" />
            @endforeach
        </div>
        <div class="d-flex justify-content-end g-4 my-4">
            <a href="{{ route('client.events', []) }}" class="btn btn-primary py-3 px-4">See More</a>
        </div>
    </div>
</div>
<!-- Blog End -->


<!-- Team Start -->
<div class="container-fluid team pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Our Team</h4>
            <h1 class="display-3 text-capitalize mb-3">What is Really seo & How Can I Use It?</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item p-4">
                    <div class="team-inner rounded">
                        <div class="team-img">
                            <img src="/assets/img/team-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            <div class="team-share">
                                <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href=""><i
                                        class="fas fa-share-alt"></i></a>
                            </div>
                            <div class="team-icon rounded-pill py-2 px-2">
                                <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light rounded-bottom text-center py-4">
                            <h4 class="mb-3">Hard Branots</h4>
                            <p class="mb-0">CEO & Founder</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item p-4">
                    <div class="team-inner rounded">
                        <div class="team-img">
                            <img src="/assets/img/team-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            <div class="team-share">
                                <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href=""><i
                                        class="fas fa-share-alt"></i></a>
                            </div>
                            <div class="team-icon rounded-pill py-2 px-2">
                                <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light rounded-bottom text-center py-4">
                            <h4 class="mb-3">Hard Branots</h4>
                            <p class="mb-0">CEO & Founder</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item p-4">
                    <div class="team-inner rounded">
                        <div class="team-img">
                            <img src="/assets/img/team-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            <div class="team-share">
                                <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href=""><i
                                        class="fas fa-share-alt"></i></a>
                            </div>
                            <div class="team-icon rounded-pill py-2 px-2">
                                <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light rounded-bottom text-center py-4">
                            <h4 class="mb-3">Hard Branots</h4>
                            <p class="mb-0">CEO & Founder</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item p-4">
                    <div class="team-inner rounded">
                        <div class="team-img">
                            <img src="/assets/img/team-4.jpg" class="img-fluid rounded-top w-100" alt="Image">
                            <div class="team-share">
                                <a class="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href=""><i
                                        class="fas fa-share-alt"></i></a>
                            </div>
                            <div class="team-icon rounded-pill py-2 px-2">
                                <a class="btn btn-secondary btn-sm-square rounded-pill mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-sm-square rounded-pill me-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light rounded-bottom text-center py-4">
                            <h4 class="mb-3">Hard Branots</h4>
                            <p class="mb-0">CEO & Founder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Testimonials</h4>
            <h1 class="display-3 text-capitalize mb-3">Our clients reviews.</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
            @foreach ($latestReviews as $review)
            <div class="testimonial-item text-center p-4">
                <p>{{ $review->comment }}</p>
                <div class="d-flex justify-content-center mb-4">
                    <img src="{{ $review->image ? url('storage/' . $review->image) : 'https://via.placeholder.com/150' }}"
                        class="img-fluid border border-4 border-primary"
                        style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                </div>
                <div class="d-block">
                    <h4 class="text-dark">{{ $review->customer_name }}</h4>
                    <p class="m-0 pb-3">{{ $review->customer_profession }}</p>
                    <div class="d-flex justify-content-center text-secondary">
                        @for ($i = 0; $i < $review->rating; $i++)
                            <i class="fas fa-star"></i>
                            @endfor
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection