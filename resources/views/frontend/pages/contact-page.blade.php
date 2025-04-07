@extends('frontend.layout.frontend-layout')

@section('title', 'Contact')

@section('content')

@include('frontend.banners.contact-banner')

@include('frontend.component.contact')
@include('frontend.component.brand')
@include('frontend.component.newsletter')

@endsection