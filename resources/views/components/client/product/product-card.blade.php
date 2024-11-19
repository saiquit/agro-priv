<!-- Blade component: product-card.blade.php -->
@props(['product'])
<div class="card h-100 d-flex flex-column">
    <img src="{{ url($product->image ? '/storage/' . $product->image : 'https://via.placeholder.com/150') }}"
        class="card-img-top" alt="{{ $product->name }}">
    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text flex-grow-1">{{ $product->excerpt }}</p>
        <a href="{{ route('client.product', $product->slug) }}" class="btn btn-secondary mt-auto">Learn More</a>
    </div>
</div>