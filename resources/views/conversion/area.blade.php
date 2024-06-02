@extends('layouts.main')
@section('title', __('banshus.area_conversion'))
@section('description', __('description.area'))
@section('main')
<div class="container">
    <h1>{{ __('banshus.area_conversion')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}/conversion">{{
                    __('banshus.science')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('banshus.area_conversion')}}</li>
        </ol>
    </nav>
    <div class="row row-cols-1">
        <div class="col">
            <p>{{ __('description.area')}}</p>
            <div class="card">
                <div class="card-header">
                    {{ __('banshus.metric_units')}}
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                        <div class="col">
                            <label for="hectare" class="form-label">{{ __('conversion.hectare')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="hectare">
                                <span class="input-group-text">ha</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="square_kilometer" class="form-label">{{ __('conversion.square_kilometer')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="square_kilometer">
                                <span class="input-group-text">km²</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="square_meter" class="form-label">{{ __('conversion.square_meter')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="square_meter">
                                <span class="input-group-text">m²</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="square_centimeter" class="form-label">{{ __('conversion.square_centimeter')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="square_centimeter">
                                <span class="input-group-text">cm²</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="square_millimeter" class="form-label">{{ __('conversion.square_millimeter')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="square_millimeter">
                                <span class="input-group-text">mm²</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="square_micrometer" class="form-label">{{ __('conversion.square_micrometer')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="square_micrometer">
                                <span class="input-group-text">μm²</span>
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
                            <label for="square_yard" class="form-label">{{ __('conversion.square_yard')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="square_yard">
                                <span class="input-group-text">yd²</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="square_foot" class="form-label">{{ __('conversion.square_foot')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="square_foot">
                                <span class="input-group-text">ft²</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="square_inch" class="form-label">{{ __('conversion.square_inch')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="square_inch">
                                <span class="input-group-text">in²</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="square_mile" class="form-label">{{ __('conversion.square_mile')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="square_mile">
                                <span class="input-group-text">mile²</span>
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