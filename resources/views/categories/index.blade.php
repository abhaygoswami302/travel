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
            @if($service->name == 'Order Food')
            <livewire:categories.order-food :service="$service"/>
            @elseif($service->name == 'Visa Services')
            <livewire:categories.visa-services :service="$service"/>
            @elseif($service->name == 'Transport Services')
            <livewire:categories.transport-services :service="$service"/>
            @endif
        </div>
    </div>
</div>
@endsection