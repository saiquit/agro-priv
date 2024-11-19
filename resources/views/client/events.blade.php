@extends('layouts.client.app')
@section('title', 'Events')

@section('content')


<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">
            Events</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
            <li class="breadcrumb-item"><a href="{{route('client.home')}}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Events</li>
        </ol>
    </div>
</div>

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-uppercase text-primary">Our Events</h4>
            <h1 class="display-3 text-capitalize mb-3">Latest Events & News</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($events as $event)
            <x-client.event.event-card :event="$event" :loop="$loop" />
            @endforeach
        </div>

        <div class="d-flex justify-content-center my-4">
            {{ $events->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
<!-- Blog End -->


@endsection