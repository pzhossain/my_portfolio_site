@extends('frontend.layout.frontend-layout')

@section('title', 'Home')

@section('content')

@include('frontend.banners.home-banner')
@include('frontend.component.about')
@include('frontend.component.brand')
@include('frontend.component.features')
@include('frontend.component.portfolio')
@include('frontend.component.contact')
@include('frontend.component.testimonial')
@include('frontend.component.newsletter')

@endsection