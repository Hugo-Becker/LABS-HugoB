@extends('template.main')
@section('content')
    @include('sections.services.pageHeader')
    @include('sections.services.services')
    @include('sections.services.features')
    @include('sections.services.servicesCard')
    @include('partilas.newsletter')
    @include('partials.contact')
@endsection