@extends('layouts.client.app')
@section('title', 'Contact')

@section('content')

<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">Contact Us</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
            <li class="breadcrumb-item"><a href="{{route('client.home')}}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Contact</li>
        </ol>
    </div>
</div>

<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 h-100 wow fadeInUp" data-wow-delay="0.2s">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Let’s Connect</h4>
                    <h1 class="display-3 text-capitalize mb-3">Send Your Message</h1>
                    <p class="mb-0">If you have any questions or need more information, feel free to contact us. We will
                        respond to your inquiry as soon as possible. We appreciate your interest in our company and
                        look forward to hearing from you.</p>
                </div>
                <form action="{{ route('client.email.send', []) }}" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 @error('name') is-invalid @enderror"
                                    id="name" name="name" placeholder="Your Name" value="{{ old('name') ?? '' }}">
                                <label for="name">Your Name</label>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0 @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="Your Email" value="{{ old('email') ?? '' }}">
                                <label for="email">Your Email</label>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="phone" class="form-control border-0 @error('phone') is-invalid @enderror"
                                    id="phone" name="phone" placeholder="Phone" value="{{ old('phone') ?? '' }}">
                                <label for="phone">Your Phone</label>
                                @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 @error('subject') is-invalid @enderror"
                                    id="subject" name="subject" placeholder="Subject"
                                    value="{{ old('subject') ?? '' }}">
                                <label for="subject">Subject</label>
                                @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control border-0 @error('message') is-invalid @enderror"
                                    placeholder="Leave a message here" name="message" id="message"
                                    style="height: 175px">{{ old('message') ?? '' }}</textarea>
                                <label for="message">Message</label>
                                @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-inline-flex rounded bg-white w-100 p-4">
                            <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                            <div>
                                <h4>Head Office</h4>
                                <p class="mb-0">Plot # 13, Road # 01, Block # Kha, Sector # 06, Mirpur – 10, Dhaka-1216,
                                    Bangladesh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-inline-flex rounded bg-white w-100 p-4">
                            <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                            <div>
                                <h4>Re-Packing Center</h4>
                                <p class="mb-0">Plot # 18, Sector # 08, New Town, Industrial Area, Jashore-7401,
                                    Bangladesh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-inline-flex rounded bg-white w-100 p-4">
                            <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                            <div>
                                <h4>Contact</h4>
                                <p class="mb-0">Tel: +88-9110856, Mob: +88-01931375030</p>
                                <p class="mb-0">Email: agrobasebd@gmail.com</p>
                                <p class="mb-0">Facebook: <a href="https://www.facebook.com/agroprivate"
                                        class="text-secondary">https://www.facebook.com/agroprivate</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="h-100 overflow-hidden">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d469467.5084996432!2d89.219559!3d23.180603!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDEwJzUwLjIiTiA4OcKwMTMnMTAuNCJF!5e0!3m2!1sen!2sus!4v1731688960148!5m2!1sen!2sus"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection