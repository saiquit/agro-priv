
@extends('layouts.client.app')
@section('title', 'About')

@section('content')
<x-client.ui.section-header slug="about" />

<!-- About Start -->
@include('client.sections.about')
<!-- About End -->


@endsection