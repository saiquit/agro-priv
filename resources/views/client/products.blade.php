@extends('layouts.client.app')
@section('title', 'Products')

@section('content')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">Products</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
            <li class="breadcrumb-item"><a href="{{route('client.home')}}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Products</li>
        </ol>
    </div>
</div>

<!-- Categories Section -->
<div class="container my-5">
    <h2 class="mb-4">Product Categories</h2>
    <div class="row g-4">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <a href="#{{ $category->slug }}" class="text-decoration-none text-dark">
                <div class="card bg-light shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-seedling fa-3x text-success mb-3"></i>
                        <h4 class="card-title">{{ $category->name }}</h4>
                        <p class="card-text">{{ $category->description }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@foreach ($categories as $category)
<div id="{{ $category->slug }}" class="container my-5">
    <div class="d-flex justify-content-between align-items-center my-4">
        <h2 class="mb-4">{{ $category->name }}</h2>
        <a href="{{ route('client.category', ['slug' => $category->slug]) }}" class="btn btn-primary">
            <i class="fas fa-arrow-right me-2"></i> See All
        </a>
    </div>
    <div class="row g-4">
        @foreach ($category->products as $product)
        <div class="col-md-3">
            <x-client.product.product-card :product="$product" />
        </div>
        @endforeach
    </div>
</div>
@endforeach
@endsection