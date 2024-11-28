@props(['slug', 'default' => ''])
@php
$page = \App\Models\Page::firstWhere(['slug' => $slug]) ?? ['title' => $default ?: $slug, 'cover_image' => ''];
@endphp
<div class="container-fluid bg-breadcrumb"
    style="background: linear-gradient(rgba(0, 20, 66, 0.7), rgba(0, 20, 66, 0.7)), url({{ $page['cover_image'] ? url('/storage/'.$page['cover_image']) : asset('assets/img/breadcrumb.jpg') }});">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">{{$page['title']}}</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s"
            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
            <li class="breadcrumb-item"><a href="{{route('client.home')}}">Home</a></li>
            <li class="breadcrumb-item active text-primary">{{$page['title']}}</li>
        </ol>
    </div>
</div>