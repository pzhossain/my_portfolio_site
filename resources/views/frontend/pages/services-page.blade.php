@extends('frontend.layout.frontend-layout')

@section('title', 'Services')

@section('content')

@include('frontend.banners.services-banner')
@include('frontend.component.features')
@include('frontend.component.testimonial')
@include('frontend.component.newsletter')

@endsection