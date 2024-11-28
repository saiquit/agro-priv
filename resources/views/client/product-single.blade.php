@extends('layouts.client.app')
@section('title', ucfirst($product->name))

@section('content')
<x-client.ui.section-header slug="products" />

<!-- Main Content Section -->
<div class="container my-5">
    <div class="row">
        <!-- Product Image Column -->
        <div class="col-lg-6">
            <img src="{{url('/storage/' . $product->image)}}" class="img-fluid rounded mb-4" alt="Product Image">
            @if ($product->hasMedia('products'))
            <h3 class="mt-4">Product Gallery</h3>
            <div class="row g-3">
                <!-- Gallery Images -->
                @foreach ($product->getMedia('products') as $image)
                <div class="col-md-3">
                    <a href="{{$image->getUrl()}}" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="{{$image->getUrl()}}" class="img-fluid rounded" alt="Gallery Image">
                    </a>
                </div>
                @endforeach
            </div>
            @endif
        </div>

        <!-- Product Details Column -->
        <div class="col-lg-6">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{route('client.locale', 'en')}}"
                    class="btn btn-sm btn-{{app()->getLocale() == 'en' ? 'primary' : 'outline-primary'}}">EN</a>
                <a href="{{route('client.locale', 'bn')}}"
                    class="btn btn-sm btn-{{app()->getLocale() == 'bn' ? 'primary' : 'outline-primary'}}">BN</a>
            </div>
            <h1 class="display-4">{{$product->name}} </h1>
            <p class=""><i class="fa fa-flask me-2"></i>Category: {{$product->category->name}}</p>
            <h2>Product Overview</h2>
            {!!$product->content!!}

            @if($product->key_features)
            <h3 class="mt-4">Key Features</h3>
            <ul class="list-unstyled">
                @foreach ($product->key_features as $feature)
                <li><i class="fa fa-check-circle text-primary me-2"></i>{{$feature['feature']}}</li>
                @endforeach
            </ul>
            @endif

            @if ($product->other_instructions)
            @foreach ($product->other_instructions as $instruction)
            <h3 class="mt-4">{{$instruction['title']}}</h3>
            {!!$instruction['content']!!}
            @endforeach
            @endif
        </div>
    </div>

    <!-- Additional Information -->
    @if ($product->additional_details)
    <div class="row mt-5">
        <div class="col-12">
            <h3>Additional Details</h3>
            <table class="table table-bordered">
                <tbody>
                    @foreach ($product->additional_details as $detail)
                    <tr>
                        <th>{{$detail['title']}}</th>
                        <td>{{$detail['detail']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

    <!-- Testimonial Start -->
    @if ($product->reviews->count() > 0)
    <div class="container-fluid testimonial py-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-uppercase text-primary">Testimonials</h4>
                <h1 class="display-4 text-capitalize mb-3">Our clients reviews.</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                @foreach ($product->reviews as $review)
                <div class="testimonial-item text-center p-4">
                    <p>{{ $review->comment }}</p>
                    <div class="d-flex justify-content-center mb-4">
                        <img src="{{ $review->image ? url('storage/' . $review->image) : 'https://via.placeholder.com/150' }}"
                            class="img-fluid border border-4 border-primary"
                            style="width: 100px; height: 100px; border-radius: 50px;" alt="">
                    </div>
                    <div class="d-block">
                        <h4 class="text-dark">{{ $review->customer_name }}</h4>
                        <p class="m-0 pb-3">{{ $review->customer_profession }}</p>
                        <div class="d-flex justify-content-center text-secondary">
                            @for ($i = 0; $i < $review->rating; $i++)
                                <i class="fas fa-star"></i>
                                @endfor
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <!-- Testimonial End -->
    <!-- Related Products Carousel -->
    <div class="row mt-5">
        <h3>Related Products</h3>
        <div class="col-12">
            <div class="owl-carousel owl-theme" id="relatedProductsOwlCarousel">
                @foreach ($relatedProducts as $related)
                <div class="item">
                    <x-client.product.product-card :product="$related" />
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>

<!-- Gallery Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gallery</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="modalImage" src="" class="img-fluid" alt="Modal Image">
            </div>
        </div>
    </div>
</div>


@endsection

@push('js')
<script>
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(item => {
        item.addEventListener('click', event => {
            const modalImage = document.querySelector('#modalImage');
            modalImage.src = event.target.src;
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#relatedProductsOwlCarousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
    });
</script>

@endpush