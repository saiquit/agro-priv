@extends('layouts.client.app')

@section('title', $category->name)

@section('content')

<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">{{ $category->name }}</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
            <li class="breadcrumb-item"><a href="{{route('client.home')}}">Home</a></li>
            <li class="breadcrumb-item active text-primary">{{ $category->name }}</li>
        </ol>
    </div>
</div>

<div id="{{ $category->slug }}" class="container my-5">
    <div class="d-flex justify-content-between align-items-center my-4">
        {{-- <h2 class="mb-4">{{ $category->name }}</h2> --}}
        {{-- <a href="{{ route('client.products', $category->slug) }}" class="btn btn-primary">
            <i class="fas fa-arrow-right me-2"></i> See All
        </a> --}}
    </div>
    <div class="row g-4">
        @foreach ($category->products as $product)
        <div class="col-md-3">
            <x-client.product.product-card :product="$product" />
        </div>
        @endforeach
    </div>
</div>
@endsection