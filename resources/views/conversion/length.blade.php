@extends('layouts.main')
@section('description', __('description.length'))
@section('main')
<div class="container">
    <h1>{{ __('banshus.length_conversion')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}/conversion">{{
                    __('banshus.conversion_calculator')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('banshus.length_conversion')}}</li>
        </ol>
    </nav>
    <div class="row row-cols-1">
        <div class="col">
            <p>{{ __('description.length')}}</p>
            <div class="card">
                <div class="card-header">
                    {{ __('banshus.metric_units')}}
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
                        <div class="col">
                            <label for="kilometer" class="form-label">{{ __('conversion.kilometer')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="kilometer">
                                <span class="input-group-text">km</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="meter" class="form-label">{{ __('conversion.meter')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="meter">
                                <span class="input-group-text">m</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="centimeter" class="form-label">{{ __('conversion.centimeter')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="centimeter">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="millimeter" class="form-label">{{ __('conversion.millimeter')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="millimeter">
                                <span class="input-group-text">mm</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="micrometer" class="form-label">{{ __('conversion.micrometer')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="micrometer">
                                <span class="input-group-text">μm</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="nanometer" class="form-label">{{ __('conversion.nanometer')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="nanometer">
                                <span class="input-group-text">nm</span>
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
                            <label for="yard" class="form-label">{{ __('conversion.yard')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="yard">
                                <span class="input-group-text">yd</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="foot" class="form-label">{{ __('conversion.foot')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="foot">
                                <span class="input-group-text">ft</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="inch" class="form-label">{{ __('conversion.inch')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="inch">
                                <span class="input-group-text">in</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="furlong" class="form-label">{{ __('conversion.furlong')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="furlong">
                                <span class="input-group-text">fur</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="mile" class="form-label">{{ __('conversion.mile')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly calculate"
                                    placeholder="{{ __('banshus.enter_value')}}" id="mile">
                                <span class="input-group-text">mile</span>
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