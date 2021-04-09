@extends('template.main')
@section('content')
    @include('sections.home.intro')
    @include('sections.home.about')
    @include('sections.home.testimonials')
    @include('sections.home.servicesHome')
    @include('sections.home.team')
    @include('sections.home.promotion')
    {{-- @include('partials.newsletter') --}}
    @include('partials.contact')
@endsection