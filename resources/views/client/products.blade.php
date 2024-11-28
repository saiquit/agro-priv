
@extends('layouts.client.app')
@section('title', 'Products')
@section('content')
<x-client.ui.section-header slug="products" />
<!-- Categories Section -->
<div class="container my-5">
    <h2 class="mb-4">Product Categories</h2>
    <div class="row g-4">
        @foreach ($categories as $category)
        <div class="col-md-3">
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