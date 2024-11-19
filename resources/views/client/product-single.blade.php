@extends('layouts.client.app')
@section('title', ucfirst($product->name))

@section('content')
<!-- Product Banner Section -->
<section class="container-fluid bg-breadcrumb">
    <div class="product-banner d-flex align-items-center "
        style="height: 1vh; background: url('{{url('/storage/'.$product->image)}}') center/cover; backdrop-filter: blur(10px);">
        <div class="container text-center">
        </div>
</section>
</div>

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

<script>
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(item => {
        item.addEventListener('click', event => {
            const modalImage = document.querySelector('#modalImage');
            modalImage.src = event.target.src;
        });
    });
</script>
@endsection

@push('js')
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