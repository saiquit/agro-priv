@extends('layouts.client.app')
@section('title', $event->title )

@section('content')
<!-- Event Banner Section -->
<section class="event-banner text-white text-center d-flex align-items-center"
    style="background: url('{{url('/storage/'.$event->featured_image)}}') center/cover; height: 60vh;">
    <div class="container py-5" style="background: rgba(0,0,0,0.2); backdrop-filter: blur(5px);">
        <h1 class="display-4 text-white">{{ $event->title }}</h1>
        <p><i class="fa fa-calendar-alt me-2"></i>Event Date: {{ \Carbon\Carbon::parse($event->date)->format('M d, Y')
            }}</p>
        <p><i class="fa fa-map-marker-alt me-2"></i>Event Location: {{ $event->location }}</p>
    </div>
</section>

<!-- Main Content Section -->
<div class="container my-5">
    <div class="row">
        <!-- Event Details Column -->
        <div class="col-lg-8">
            <!-- Event Images -->
            <div class="my-4">
                @if ($event->hasMedia())
                <h3>Event Gallery</h3>
                <div class="row g-3">
                    @foreach ($event->getMedia('events') as $media)
                    <div class="col-md-4">
                        <img src="{{ $media->getUrl() }}" class="img-fluid rounded" alt="Event Image">
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Event Description -->
            <h2 class="mb-3">About the Event</h2>
            {{ $event->content }}
        </div>

        <!-- Sidebar Column -->
        <div class="col-lg-4">
            <!-- Event Details Card -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Event Details</h4>
                </div>
                <div class="card-body">
                    <p><i class="fa fa-calendar-alt me-2"></i><strong>Date:</strong> {{
                        \Carbon\Carbon::parse($event->date)->format('M d, Y') }}</p>
                    <p><i class="fa fa-clock me-2"></i><strong>Time:</strong> {{
                        \Carbon\Carbon::parse($event->start_time)->format('g:i A') }} - {{
                        \Carbon\Carbon::parse($event->end_time)->format('g:i A') }}</p>
                    <p><i class="fa fa-map-marker-alt me-2"></i><strong>Location:</strong> {{ $event->location }}</p>
                    <p><i class="fa fa-users me-2"></i><strong>Speakers:</strong> {{ $event->speakers }}</p>
                    <a href="{{$event->registration_link}}" class="btn btn-primary w-100 mt-3">Register Now</a>
                </div>
            </div>

            <!-- Contact Information Card -->
            <div class="card">
                <div class="card-header bg-secondary text-white text-center">
                    <h4>Contact Information</h4>
                </div>
                <div class="card-body">
                    <p><i class="fa fa-envelope me-2"></i>{{ $event->contact_email }}</p>
                    <p><i class="fa fa-phone me-2"></i>{{ $event->contact_phone }}</p>
                    <p><i class="fa fa-globe me-2"></i>{{ $event->contact_site }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection