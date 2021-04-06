@extends('adminlte::page')

@section('content')

    <div class="services-section spad">
        <link rel="stylesheet" href="{{ asset('css/styleBack.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
        <div class="container">
            <div class="section-title dark ">
                
                <h2>{{ $serviceTitle[0] }}<span>{{ $serviceTitle[1] }}</span> {{ $serviceTitle[2] }}</h2>
                <form method="POST" action="/titles/3">

                    @method('PUT')
                    @csrf
                    <label class="text-light" for="">Title : </label>
                    <input class="mt-4" style="width: 500px" name="name" value="{{$titles[3]->name}}" type="text">
                    <p style="color: gray">Write inside "/" for highlighted text</p>
                    <button class="site-btn" type="submit">Update title</button>
            
                </form>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <div class="icon">
                                <i class="{{ $service->icon }}"></i>
                            </div>
                            <div class="service-text">
                                <h2>{{ $service->title }}</h2>
                                <p class="darkTheP">{{ $service->text }}</p>
                                <a class="btn btn-primary" href="/backservices/{{ $service->id }}/edit">Edit</a>
                                <form class="mt-2" action="/backservices/{{ $service->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
