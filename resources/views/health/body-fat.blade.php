@extends('layouts.main')
@section('title', __('banshus.body_fat_calculator'))
@section('description', __('description.body_fat'))
@section('main')
<div class="container">
    <h1>{{ __('banshus.body_fat_calculator')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}/health">{{
                    __('banshus.health')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('banshus.body_fat_calculator')}}</li>
        </ol>
    </nav>
    <p>{{ __('description.body_fat')}}</p>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <span class="metric_units">{{ __('banshus.metric_units')}}</span>
                    <span class="imperial_units hidden">{{ __('banshus.imperial_units')}}</span>
                </div>
                <div class="card-body">
                    <div class="row row-cols-1">
                        <div class="col">
                            <label class="form-label">{{ __('banshus.gender')}}</label>
                            <div class="w-100"></div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input gender" type="radio" name="gender" id="male" checked>
                                <label class="form-check-label" for="male">
                                    {{ __('banshus.male')}}
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input gender" type="radio" name="gender" id="female">
                                <label class="form-check-label" for="female">
                                    {{ __('banshus.female')}}
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <label for="age" class="form-label">{{ __('banshus.age')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly"
                                    placeholder="{{ __('banshus.required')}}" id="age">
                            </div>
                        </div>
                    </div>
                    <div class="metric_units">
                        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                            <div class="col">
                                <label for="height" class="form-label">{{ __('banshus.height')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.required')}}" id="height">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                            <div class="col">
                                <label for="weight" class="form-label">{{ __('banshus.weight')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.required')}}" id="weight">
                                    <span class="input-group-text">kg</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-cols-1">
                            <div class="alert alert-info" role="alert">
                                <span class="material-icons">info</span>
                                {{ __('health.body_fat_4')}}
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                            <div class="col">
                                <label for="neck" class="form-label">{{ __('banshus.neck_circumference')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="neck">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                            <div class="col">
                                <label for="waist" class="form-label">{{ __('banshus.waist_circumference')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="waist">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1 hip_metric hidden">
                            <div class="col">
                                <label for="hip" class="form-label">{{ __('banshus.hip_circumference')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="hip">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="imperial_units hidden">
                        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
                            <div class="col">
                                <label for="foot" class="form-label">{{ __('banshus.height')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.required')}}" id="foot">
                                    <span class="input-group-text">ft</span>
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.required')}}" id="inch">
                                    <span class="input-group-text">in</span>
                                </div>
                            </div>
                            <div class="col">
                                <label for="pound" class="form-label">{{ __('banshus.weight')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.required')}}" id="pound">
                                    <span class="input-group-text">lb</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row row-cols-1">
                                <div class="col">
                                    <div class="alert alert-info" role="alert">
                                        <span class="material-icons">info</span>
                                        {{ __('health.body_fat_4')}}
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="neck_foot" class="form-label">{{ __('banshus.neck_circumference')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="neck_foot">
                                    <span class="input-group-text">ft</span>
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="neck_inch">
                                    <span class="input-group-text">in</span>
                                </div>
                            </div>
                            <div class="col">
                                <label for="waist_foot" class="form-label">{{
                                    __('banshus.waist_circumference')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="waist_foot">
                                    <span class="input-group-text">ft</span>
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="waist_inch">
                                    <span class="input-group-text">in</span>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1 hip_imperial hidden">
                            <div class="col">
                                <label for="hip_foot" class="form-label">{{ __('banshus.hip_circumference')}}</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="hip_foot">
                                    <span class="input-group-text">ft</span>
                                    <input type="text" class="form-control decOnly"
                                        placeholder="{{ __('banshus.optional')}}" id="hip_inch">
                                    <span class="input-group-text">in</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
                        <div class="col">
                            <span class="metric_units"><button type="button"
                                    class="btn btn-outline-success change_imperial">{{
                                    __('banshus.switch_to_imperial_units')}}</button></span>
                            <span class="imperial_units hidden"><button type="button"
                                    class="btn btn-outline-success change_metric">{{
                                    __('banshus.switch_to_metric_units')}}</button></span>
                            <button type="submit" class="btn btn-success calculateBodyFat">{{
                                __('banshus.calculate')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    {{ __('banshus.result')}}
                </div>
                <div class="card-body">
                    <p class="fs-2 fw-bold">{{ __('health.body_fat')}} = <span class="result"></span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
        <div class="col">
            <p>{{ __('health.body_fat_1')}}</p>
            <p>{{ __('health.body_fat_2')}}</p>
            <p>{{ __('health.body_fat_3')}}</p>
        </div>
        <div class="col">
            <h2>{{ __('health.body_fat_5')}}</h2>
            <ul>
                <li>{{ __('health.body_fat_6')}}</li>
                <li>{{ __('health.body_fat_7')}}</li>
                <li>{{ __('health.body_fat_8')}}</li>
                <li>{{ __('health.body_fat_9')}}</li>
                <li>{{ __('health.body_fat_10')}}</li>
                <li>{{ __('health.body_fat_11')}}</li>
                <li>{{ __('health.body_fat_12')}}</li>
                <li>{{ __('health.body_fat_13')}}</li>
            </ul>
        </div>
        <div class="col">
            <h2>{{ __('health.body_fat_14')}}</h2>
            <ul>
                <li>{{ __('health.body_fat_15')}}</li>
                <li>{{ __('health.body_fat_16')}}</li>
                <li>{{ __('health.body_fat_17')}}</li>
                <li>{{ __('health.body_fat_18')}}</li>
                <li>{{ __('health.body_fat_19')}}</li>
                <li>{{ __('health.body_fat_20')}}</li>
                <li>{{ __('health.body_fat_21')}}</li>
                <li>{{ __('health.body_fat_22')}}</li>
            </ul>
        </div>
    </div>
</div>
@endsection