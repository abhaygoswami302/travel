@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
           <img src="{{ $service->image }}" alt="image" style="width:100%">
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-6"><h3>{{ $service->name }}</h3></div>
                <div class="col-sm-6"><a href="{{ route('services.index') }}" class="btn btn-success btn-sm float-end">Go back</a></div>
            </div>
            <p>{{ substr($service->description, 0, 700) }}...</p>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-sm-12">
            <h4>Choose Category</h4>
        </div>
        <div class="col-sm-12">
            <div class="row text-center">
                <div class="col-sm-3 p-2">
                    <div class="BdrWd border">
                        <img class="pt-0 pl-2 pm-2 pb-2" src="{{ asset('images/service1.jpg') }}" alt="image" style="width: 100%">
                        <h5>Breakfast</h5>
                    </div>
                </div>
                <div class="col-sm-3  p-2">
                    <div class="BdrWd border">
                        <img class="pt-0 pl-2 pm-2 pb-2" src="{{ asset('images/service1.jpg') }}" alt="image" style="width: 100%">
                        <h5>Burger And Sandwich</h5>
                    </div>
                </div>
                <div class="col-sm-3  p-2">
                    <div class="BdrWd border">
                        <img class="pt-0 pl-2 pm-2 pb-2" src="{{ asset('images/service1.jpg') }}" alt="image" style="width: 100%">
                        <h5>Pizza And Pasta</h5>
                    </div>
                </div>
                <div class="col-sm-3  p-2">
                    <div class="BdrWd border">
                        <img class="pt-0 pl-2 pm-2 pb-2" src="{{ asset('images/service1.jpg') }}" alt="image" style="width: 100%">
                        <h5>Salads And Healthy</h5>
                    </div>
                </div>
                <div class="col-sm-3  p-2">
                    <div class="BdrWd border">
                        <img class="pt-0 pl-2 pm-2 pb-2" src="{{ asset('images/service1.jpg') }}" alt="image" style="width: 100%">
                        <h5>Arabic</h5>
                    </div>
                </div>
                <div class="col-sm-3  p-2">
                    <div class="BdrWd border">
                        <img class="pt-0 pl-2 pm-2 pb-2" src="{{ asset('images/service1.jpg') }}" alt="image" style="width: 100%">
                        <h5>Asian</h5>
                    </div>
                </div>
                <div class="col-sm-3  p-2">
                    <div class="BdrWd border">
                        <img class="pt-0 pl-2 pm-2 pb-2" src="{{ asset('images/service1.jpg') }}" alt="image" style="width: 100%">
                        <h5>Deserts</h5>
                    </div>
                </div>
                <div class="col-sm-3  p-2">
                    <div class="BdrWd border">
                        <img class="pt-0 pl-2 pm-2 pb-2" src="{{ asset('images/service1.jpg') }}" alt="image" style="width: 100%">
                        <h5>Drinks</h5>
                    </div>
                </div>
                <div class="col-sm-3  p-2">
                    <div class="BdrWd border">
                        <img class="pt-0 pl-2 pm-2 pb-2" src="{{ asset('images/service1.jpg') }}" alt="image" style="width: 100%">
                        <h5>xxx</h5>
                    </div>
                </div>
                <div class="col-sm-3  p-2">
                    <div class="BdrWd border">
                        <img class="pt-0 pl-2 pm-2 pb-2" src="{{ asset('images/service1.jpg') }}" alt="image" style="width: 100%">
                        <h5>xxx</h5>
                    </div>
                </div>
                 <div class="col-sm-3  p-2">
                    <div class="BdrWd border">
                        <img class="pt-0 pl-2 pm-2 pb-2" src="{{ asset('images/service1.jpg') }}" alt="image" style="width: 100%">
                        <h5>xxx</h5>
                    </div>
                </div>
                 <div class="col-sm-3  p-2">
                    <div class="BdrWd border">
                        <img class="pt-0 pl-2 pm-2 pb-2" src="{{ asset('images/service1.jpg') }}" alt="image" style="width: 100%">
                        <h5>xxx</h5>
                    </div>
                </div>
                 <div class="col-sm-3  p-2">
                    <div class="BdrWd border">
                        <img class="pt-0 pl-2 pm-2 pb-2" src="{{ asset('images/service1.jpg') }}" alt="image" style="width: 100%">
                        <h5>xxx</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection