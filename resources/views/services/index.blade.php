@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="{{ $services->previousPageUrl() }}" class="btn btn-success btn-sm">Previous</a>
                    </div>
                    <div class="col-sm-8 text-center">
                        <h2>On Demand Services</h2> 
                        <p>Total Services {{ $services->total() }} | {{ $services->count() }} in this page</p>
                    </div>
                    <div class="col-sm-2 ">
                        <a href="{{ $services->nextPageUrl() }}" class="btn btn-success btn-sm float-end">Next</a>
                    </div>
                </div>
            </div>
            @foreach ($services as $service)
            <div class="col-sm-4 p-3">
                <div class="row border" style="background-color:white;">
                    <div class="col-sm-6 p-2 m-0">
                        <img src="{{ asset($service->image) }}" alt="" style="width: 100%;height:100%; border-radius:5%">
                    </div>
                    <div class="col-sm-6 p-2">
                        <h4>{{ $service->name }}</h4>
                        <p>{{ substr($service->description, 0, 55) }}</p>
                        <a href="{{ route('services.show', $service->id) }}" class="btn btn-success btn-sm mb-1">explore</a>
                    </div>
                </div>
            </div>   
            @endforeach
        </div>
    </div>
@endsection