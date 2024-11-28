<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('client.home', []) }}" class="navbar-brand p-0">
        <h1 class="text-primary"><i class="fas fa-hand-holding-water me-3"></i>{{
            App\Models\Setting::getValue('site_name') ? App\Models\Setting::getValue('site_name') : env('APP_NAME') }}
        </h1>
        <!-- <img src="/assets/img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('client.home', []) }}" class="nav-item nav-link @if (request()->is('/')) active @endif">{{
                __('Nav.home') }}</a>
            <a href="{{ route('client.about', []) }}"
                class="nav-item nav-link @if(request()->is('about')) active @endif">{{ __('Nav.about') }}</a>
            <div class="nav-item dropdown">
                <a href="{{ route('client.products') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                    onclick="location.href='{{ route('client.products') }}';">{{ __('Nav.products') }}</a>
                <div class="dropdown-menu m-0">
                    @foreach (App\Models\Category::all() as $category)
                    <a href="{{ route('client.category', ['slug' => $category->slug]) }}" class="dropdown-item">{{
                        $category->name }}</a>
                    @endforeach
                </div>
            </div>

            <a href="{{ route('client.events', []) }}"
                class="nav-item nav-link @if(request()->is('events')) active @endif">{{ __('Nav.events') }}</a>

            <a href="{{ route('client.contact', []) }}" class="nav-item nav-link">{{ __('Nav.contact') }}</a>
        </div>
        <div class="d-none d-xl-flex me-3">
            <div class="d-flex flex-column pe-3 border-end border-primary">
                {{-- <span class="text-body">Get Free Delivery</span> --}}
                <a href="tel:{{ App\Models\Setting::getValue('contact_phone_1') }}"><span class="text-primary">{{ App\Models\Setting::getValue('contact_phone_1') }}</span></a>
            </div>
        </div>
        {{-- <button class="btn btn-primary btn-md-square d-flex flex-shrink-0 mb-3 mb-lg-0 rounded-circle me-3"
            data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> --}}
        <a class="btn btn-primary btn-md-square d-flex flex-shrink-0 mb-3 mb-lg-0 rounded-circle me-3"
            href="{{ route('client.locale', [app()->getLocale() == 'en' ? 'bn' : 'en']) }}" data-bs-toggle="tooltip"
            data-bs-placement="top" title="{{ app()->getLocale() == 'en' ? 'Switch to Bangla' : 'Switch to English' }}">
            @if (app()->getLocale() == 'en')
            <span class="text-white">EN</span>
            @else
            <span class="text-white">BN</span>
            @endif
        </a>


        {{-- <a href="" class="btn btn-primary rounded-pill d-inline-flex flex-shrink-0 py-2 px-4">Order Now</a> --}}
    </div>
</nav>