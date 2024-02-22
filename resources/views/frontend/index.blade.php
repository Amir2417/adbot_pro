@extends('frontend.layouts.master')

@push("css")
    
@endpush

@section('content') 

@include('frontend.section.banner')


@include('frontend.section.core-feature')


@include('frontend.section.how-its-work')


@include('frontend.section.feature')


@include('frontend.section.testimonial')


@include('frontend.section.faq')


@include('frontend.section.brand')

@endsection


@push("script")
    
@endpush