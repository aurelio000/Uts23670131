@extends('layouts.landing')

@section('title', 'Fitness - Fitness Website Template')

@section('content')
<!-- Modal Search End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Courses</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ route('landing.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Course</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Fitness Goal start -->
        <div class="container-fluid goal pt-5" style="margin: 90px 0;">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="goal-content">
                            <h4 class="text-primary">Fitness Goal</h4>
                            <h1 class="display-4 mb-4">Complete your possibilities, Achieve Your Fitness Goals.</h1>
                            <div class="goal-item d-flex p-4">
                                <div class="d-flex me-4">
                                    <div class="bg-primary d-inline p-3" style="width: 80px; height: 80px;">
                                        <img src="{{ asset('fitness/img/icon-1.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div>
                                    <h4>Free Fitness Training</h4>
                                    <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum</p>
                                </div>
                            </div>
                            <div class="goal-item d-flex p-4 mb-4">
                                <div class="d-flex me-4">
                                    <div class="bg-primary d-inline p-3" style="width: 80px; height: 80px;">
                                        <img src="{{ asset('fitness/img/icon-6.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div>
                                    <h4>Cardio and Strength</h4>
                                    <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore est harum</p>
                                </div>
                            </div>
                            <div class="ms-1">
                                <a href="#" class="btn btn-primary py-3 px-5 ms-2"> <span>Read Details</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="h-100">
                            <img src="{{ asset('fitness/img/fitness-goal-banner.png') }}" class="img-fluid h-100" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fitness Goal End -->

        <!-- Courses Start -->
        <div class="container-fluid courses overflow-hidden py-5" style="margin-bottom: 90px;">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary"> Our Courses</h4>
                    <h1 class="display-4 text-white mb-4">Out Our Highlights Below</h1>
                    <p class="text-white mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="row gy-4 gx-0 justify-content-center">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="{{ asset('fitness/img/icon-1.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="{{ asset('fitness/img/testimonial-3.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Gym Fitness Class</a>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="{{ asset('fitness/img/icon-2.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="{{ asset('fitness/img/testimonial-3.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Power Lifting Class</a>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="{{ asset('fitness/img/icon-3.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="{{ asset('fitness/img/testimonial-3.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Body Building Class</a>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="{{ asset('fitness/img/icon-4.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="{{ asset('fitness/img/testimonial-3.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Aerobics & Skipping Class</a>
                                
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="{{ asset('fitness/img/icon-5.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="{{ asset('fitness/img/testimonial-3.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Boxing Class</a>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="{{ asset('fitness/img/icon-6.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="{{ asset('fitness/img/testimonial-3.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Paul Flavius</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Cardio Class</a>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo placeat.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="btn btn-primary py-3 px-5"> <span>More Courses</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial bg-dark py-5" style="margin-bottom: 90px;">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-4 text-white">What Our Customers Are Saying</h1>
                </div>
                <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item mx-auto" style="max-width: 900px;">
                        <span class="fa fa-quote-left fa-3x quote-icon"></span>
                        <div class="testimonial-img mb-4">
                            <img src="{{ asset('fitness/img/testimonial-1.jpg') }}" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?
                        </p>
                        <div class="d-block">
                            <h4 class="text-white">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item mx-auto" style="max-width: 900px;">
                        <span class="fa fa-quote-left fa-3x quote-icon"></span>
                        <div class="testimonial-img mb-4">
                            <img src="{{ asset('fitness/img/testimonial-2.jpg') }}" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?
                        </p>
                        <div class="d-block">
                            <h4 class="text-white">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item mx-auto" style="max-width: 900px;">
                        <span class="fa fa-quote-left fa-3x quote-icon"></span>
                        <div class="testimonial-img mb-4">
                            <img src="{{ asset('fitness/img/testimonial-3.jpg') }}" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quasi deleniti ratione similique eaque blanditiis fugit voluptas ex officiis expedita repellat doloribus veniam delectus tempore, laudantium, aliquam ad? Rem, accusantium?
                        </p>
                        <div class="d-block">
                            <h4 class="text-white">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
@endsection
