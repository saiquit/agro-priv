@extends('layouts.client.app')

@section('title', $category->name)

@section('content')

<x-client.ui.section-header :slug="$category->slug" :default="$category->name" />

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