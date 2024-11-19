<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5 mb-5 align-items-center">
            <div class="col-lg-7">
                <div class="position-relative mx-auto">
                    <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Email address to Subscribe">
                    <button type="button"
                        class="btn btn-secondary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                    @foreach (['facebook_url', 'twitter_url', 'instagram_url', 'linkedin_url', 'youtube_url'] as $key)
                    @if ($setting = \App\Models\Setting::where('key', $key)->first())
                    <a class="btn btn-secondary btn-md-square rounded-circle me-3" href="{{ $setting->value }}"><i
                            class="fab fa-{{ str_replace('_url', '', $key) }}"></i></a>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <div class="footer-item">
                        <h3 class="text-white mb-4"><i class="fas fa-hand-holding-water text-primary me-3"></i>{{
                            App\Models\Setting::getValue('site_name') }}
                        </h3>
                        <p class="mb-3">{{ App\Models\Setting::getValue('site_description') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">About Us</h4>
                    <a href="{{route('client.about')}}"><i class="fas fa-angle-right me-2"></i> Why Choose Us</a>
                    <a href="{{route('client.about')}}"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                    <a href="{{route('client.terms-conditions')}}"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Mon - Friday:</h6>
                        <p class="text-white mb-0">09.00 am to 07.00 pm</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Saturday:</h6>
                        <p class="text-white mb-0">10.00 am to 05.00 pm</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Vacation:</h6>
                        <p class="text-white mb-0">All Sunday is our vacation</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Contact Info</h4>
                    <a href="#"><i class="fa fa-map-marker-alt me-2"></i>{{ App\Models\Setting::getValue('head_office_address') }}</a>
                    <a href="mailto:{{App\Models\Setting::getValue('contact_email')}}"><i class="fas fa-envelope me-2"></i> {{App\Models\Setting::getValue('contact_email')}}</a>
                    {{-- <a href="tel:+{{App\Models\Setting::getValue('contact_phone_1')}}"><i class="fas fa-phone me-2"></i> {{App\Models\Setting::getValue('contact_phone_1')}}</a> --}}
                    <a href="tel:{{App\Models\Setting::getValue('contact_phone_2')}}" class="mb-3"><i class="fas fa-phone me-2"></i> {{App\Models\Setting::getValue('contact_phone_2')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>