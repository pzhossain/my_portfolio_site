@extends('frontend.layout.frontend-layout')

@section('title', 'Portfolio')

@section('content')

@include('frontend.banners.portfolio-banner')
@include('frontend.component.portfolio')
@include('frontend.component.brand')
@include('frontend.component.contact')

@endsection