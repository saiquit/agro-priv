@extends('layouts.client.app')
@section('title', 'Events')

@section('content')

<x-client.ui.section-header slug="events" default="" />


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