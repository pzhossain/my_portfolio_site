@extends('frontend.layout.frontend-layout')

@section('title', 'About')

@section('content')

@include('frontend.banners.about-banner')
@include('frontend.component.about')
@include('frontend.component.brand')
@include('frontend.component.testimonial')
@include('frontend.component.newsletter')

@endsection