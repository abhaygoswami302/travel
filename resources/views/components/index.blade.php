@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6"><h3>{{ ucfirst($service_slug) }}</h3></div>
                <div class="col-sm-6"><a href="{{ route('services.index') }}" class="btn btn-success btn-sm float-end">Go back</a></div>
            </div>
        </div>
    </div>
    <div class="row py-4">
        <div class="col-sm-12">
            <h4>BreakFast Menu</h4>
        </div>
        <div class="col-sm-12">
            @if($component_slug == 'breakfast')
            <livewire:components.breakfast :service_slug="$service_slug" :component_slug="$component_slug"/>
            @elseif($component_slug == 'Visa Services')
            <livewire:categories.visa-services :service="$service"/>
            @elseif($component_slug == 'Transport Services')
            <livewire:categories.transport-services :service="$service"/>
            @endif
        </div>
    </div>
</div>
@endsection