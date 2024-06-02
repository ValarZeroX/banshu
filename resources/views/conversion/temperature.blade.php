@extends('layouts.main')
@section('title', __('banshus.temperature_conversion'))
@section('description', __('description.temperature'))
@section('main')
<div class="container">
    <h1>{{ __('banshus.temperature_conversion')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}/conversion">{{
                    __('banshus.science')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('banshus.temperature_conversion')}}</li>
        </ol>
    </nav>
    <div class="row row-cols-1">
        <div class="col">
            <p>{{ __('description.temperature')}}</p>
            <div class="card">
                <div class="card-header">
                    {{ __('banshus.metric_units')}}
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                        <div class="col">
                            <label for="celsius" class="form-label">{{ __('conversion.celsius')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculateTemperature"
                                    placeholder="{{ __('banshus.enter_value')}}" id="celsius">
                                <span class="input-group-text">°C</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="fahrenheit" class="form-label">{{ __('conversion.fahrenheit')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculateTemperature"
                                    placeholder="{{ __('banshus.enter_value')}}" id="fahrenheit">
                                <span class="input-group-text">°F</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="kelvin" class="form-label">{{ __('conversion.kelvin')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculateTemperature"
                                    placeholder="{{ __('banshus.enter_value')}}" id="kelvin">
                                <span class="input-group-text">K</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="rankine" class="form-label">{{ __('conversion.rankine')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculateTemperature"
                                    placeholder="{{ __('banshus.enter_value')}}" id="rankine">
                                <span class="input-group-text">°R</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var jsonData = @json($data);
</script>
@endsection