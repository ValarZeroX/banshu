@extends('layouts.main')
@section('title', __('banshus.weight_conversion'))
@section('description', __('description.weight'))
@section('main')
<div class="container">
    <h1>{{ __('banshus.weight_conversion')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}/conversion">{{
                    __('banshus.conversion_calculator')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('banshus.weight_conversion')}}</li>
        </ol>
    </nav>
    <div class="row row-cols-1">
        <div class="col">
            <p>{{ __('description.weight')}}</p>
            <div class="card">
                <div class="card-header">
                    {{ __('banshus.metric_units')}}
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                        <div class="col">
                            <label for="gram" class="form-label">{{ __('conversion.gram')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="gram">
                                <span class="input-group-text">g</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="kilogram" class="form-label">{{ __('conversion.kilogram')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="kilogram">
                                <span class="input-group-text">kg</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="tonne" class="form-label">{{ __('conversion.tonne')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="tonne">
                                <span class="input-group-text">mt</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mt-10">
                <div class="card-header">
                    {{ __('banshus.imperial_units')}}
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                        <div class="col">
                            <label for="ounce" class="form-label">{{ __('conversion.ounce')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="ounce">
                                <span class="input-group-text">oz</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="pound" class="form-label">{{ __('conversion.pound')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="pound">
                                <span class="input-group-text">lb</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="long_ton" class="form-label">{{ __('conversion.long_ton')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="long_ton">
                                <span class="input-group-text">LT</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="short_ton" class="form-label">{{ __('conversion.short_ton')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="short_ton">
                                <span class="input-group-text">ST</span>
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