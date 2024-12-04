@extends('layouts.client.app')

@section('title', $event->title)

@section('content')
<x-client.ui.section-header slug="" :default="$event->title" />
<div class="container py-5">
    <div class="mx-auto" style="">
        {{-- Event Header Section --}}
        <div class="mb-4">
            {{-- Featured Image --}}
            @if($event->featured_image)
            <div class="position-relative mb-4">
                <img src="{{ url('/storage/'.$event->featured_image) }}" alt="{{ $event->title }}"
                    class="img-fluid rounded shadow-sm w-100">

                {{-- Event Type Badge --}}
                @if($event->event_type)
                <span class="badge bg-primary position-absolute top-0 start-0 m-3 p-2">
                    {{ $event->event_type }}
                </span>
                @endif
            </div>
            @endif

            {{-- Event Title and Basic Info --}}
            <div class="text-center">
                {{-- <h1 class="display-4 text-dark">{{ $event->title }}</h1> --}}
                <div class="d-flex justify-content-center gap-3 text-muted my-3">
                    @if($event->date)
                    <div>
                        <i class="bi bi-calendar-event me-1 text-primary"></i>
                        {{ \Carbon\Carbon::parse($event->date)->format('F d, Y') }}
                    </div>
                    @endif
                    @if($event->time)
                    <div>
                        <i class="bi bi-clock me-1 text-success"></i>
                        {{ \Carbon\Carbon::parse($event->time)->format('h:i A') }}
                    </div>
                    @endif
                    @if($event->location)
                    <div>
                        <i class="bi bi-geo-alt-fill me-1 text-danger"></i>
                        {{ $event->location }}
                    </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- Event Details Grid --}}
        <div class="row g-4">
            {{-- Main Content Column --}}
            <div class="col-md-8">
                {{-- Short Description --}}
                <div class="bg-light p-4 rounded shadow-sm">
                    <h2 class="h5 border-bottom pb-2">About the Event</h2>
                    <p class="mb-0">{{ $event->short_description }}</p>
                </div>
                {{-- Event Gallery --}}
                @if ($event->getMedia('events')->count() > 0)
                <div class="mt-4">
                    <h2 class="h5 border-bottom pb-2">Event Gallery</h2>
                    <div class="row g-2">
                        @foreach($event->getMedia('events') as $media)
                        <div class="col-4">
                            <a href="{{ $media->getUrl() }}" data-bs-toggle="lightbox" class="d-block">
                                <img src="{{ $media->getUrl('thumb') }}" alt="Event Gallery Image"
                                    class="img-fluid rounded shadow-sm">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                {{-- Full Content --}}
                <div class="mt-4">
                    <h2 class="h5 border-bottom pb-2">Event Details</h2>
                    <div class="lh-lg">{!! $event->content !!}</div>
                </div>

                {{-- Speakers Section --}}
                @if($event->speakers)
                <div class="mt-4">
                    <h2 class="h5 border-bottom pb-2">Speakers</h2>
                    <div class="bg-white p-3 rounded shadow-sm">
                        {{ $event->speakers }}
                    </div>
                </div>
                @endif

                {{-- Gallery --}}
                @if($event->getMedia('gallery')->count() > 0)
                <div class="mt-4">
                    <h2 class="h5 border-bottom pb-2">Event Gallery</h2>
                    <div class="row g-2">
                        @foreach($event->getMedia('gallery') as $media)
                        <div class="col-4">
                            <a href="{{ $media->getUrl() }}" data-bs-toggle="lightbox" class="d-block">
                                <img src="{{ $media->getUrl('thumb') }}" alt="Event Gallery Image"
                                    class="img-fluid rounded shadow-sm">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            {{-- Sidebar Column --}}
            <div class="col-md-4">
                {{-- Registration Section --}}
                <div class="bg-white p-4 rounded shadow-sm mb-4">
                    <h3 class="h6 text-center">Event Registration</h3>
                    @if ($event->registration_link && (!$event->registration_deadline ||
                    \Carbon\Carbon::parse($event->registration_deadline)->isFuture()))
                    <a href="{{ $event->registration_link }}" class="btn btn-primary w-100 mt-3">
                        Register Now
                    </a>
                    @elseif(\Carbon\Carbon::parse($event->registration_deadline)->isPast())
                    <p class="text-center text-muted mt-3">Registration deadline has been passed</p>
                    @else
                    <p class="text-center text-muted mt-3">Registration details coming soon</p>
                    @endif
                </div>
                {{-- Contact Information --}}
                <div class="bg-light p-4 rounded shadow-sm">
                    <h3 class="h6 text-center">Contact Information</h3>
                    <ul class="list-unstyled mt-3 mb-0">
                        @if($event->contact_person)
                        <li class="mb-2">
                            <i class="bi bi-person-fill me-2 text-muted"></i>{{ $event->contact_person }}
                        </li>
                        @endif
                        @if($event->contact_email)
                        <li class="mb-2">
                            <i class="bi bi-envelope-fill me-2 text-muted"></i>
                            <a href="mailto:{{ $event->contact_email }}" class="text-decoration-none">
                                {{ $event->contact_email }}
                            </a>
                        </li>
                        @endif
                        @if($event->contact_phone)
                        <li class="mb-2">
                            <i class="bi bi-telephone-fill me-2 text-muted"></i>
                            <a href="tel:{{ $event->contact_phone }}" class="text-decoration-none">
                                {{ $event->contact_phone }}
                            </a>
                        </li>
                        @endif
                        @if($event->contact_site)
                        <li>
                            <i class="bi bi-globe2 me-2 text-muted"></i>
                            <a href="{{ $event->contact_site }}" target="_blank" class="text-decoration-none">
                                {{ parse_url($event->contact_site, PHP_URL_HOST) }}
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        {{-- Back to Events Button --}}
        <div class="mt-4 text-center">
            <a href="{{ route('client.events') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-1"></i>
                Back to All Events
            </a>
        </div>
    </div>
</div>
@endsection