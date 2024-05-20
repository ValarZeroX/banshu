@extends('layouts.main')
@section('title', __('banshus.tdee_calculator'))
@section('description', __('description.tdee'))
@section('main')
@vite(['resources/js/health.js'])
<div class="container">
    <h1>{{ __('banshus.tdee_calculator')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}/health">{{
                    __('banshus.health')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('banshus.tdee_calculator')}}</li>
        </ol>
    </nav>
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
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
                        <div class="col">
                            <label for="activity" class="form-label">{{ __('banshus.activity')}}</label>
                            <div class="input-group mb-3">
                                <select class="form-select form-select activity" id="activity">
                                    <option value="1" selected>{{ __('health.tdee_level_1')}}</option>
                                    <option value="2">{{ __('health.tdee_level_2')}}</option>
                                    <option value="3">{{ __('health.tdee_level_3')}}</option>
                                    <option value="4">{{ __('health.tdee_level_4')}}</option>
                                    <option value="5">{{ __('health.tdee_level_5')}}</option>
                                    <option value="6">{{ __('health.tdee_level_6')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col equation_fat hidden">
                            <label for="body_fat" class="form-label">{{ __('banshus.body_fat')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly"
                                    placeholder="{{ __('banshus.required')}}" id="body_fat">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="equation" class="form-label">{{ __('banshus.equation')}}</label>
                            <div class="input-group mb-3">
                                <select class="form-select form-select equation" id="equation">
                                    <option value="1" selected>Mifflin-St Jeor</option>
                                    <option value="2">Harris-Benedict</option>
                                    <option value="3">Katch-McArdle</option>
                                </select>
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
                            <button type="submit" class="btn btn-success calculateTDEE">{{
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
                    <p class="fs-2 fw-bold">{{ __('banshus.bmr')}} = <span class="result"></span></p>
                    <p class="fs-2 fw-bold">{{ __('banshus.tdee')}} = <span class="result_tdee"></span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
        <div class="col">
            <p>{{ __('health.tdee_1')}}</p>
        </div>
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>{{ __('banshus.activity')}}</th>
                        <th>{{ __('banshus.tdee_formula')}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ __('health.tdee_level_1')}}</td>
                        <td>BMR x 1.2</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.tdee_level_2')}}</td>
                        <td>BMR x 1.375</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.tdee_level_3')}}</td>
                        <td>BMR x 1.55</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.tdee_level_4')}}</td>
                        <td>BMR x 1.725</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.tdee_level_5')}}</td>
                        <td>BMR x 1.9</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.tdee_level_6')}}</td>
                        <td>BMR x 2.4</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col">
            <h2>{{ __('health.tdee_2')}}</h2>
            <ul>
                <li>{{ __('health.tdee_3')}}:</li>
                <p>{{ __('health.tdee_7')}}</p>
                <li>{{ __('health.tdee_4')}}:</li>
                <p>{{ __('health.tdee_8')}}</p>
                <li>{{ __('health.tdee_5')}}:</li>
                <p>{{ __('health.tdee_9')}}</p>
                <li>{{ __('health.tdee_6')}}:</li>
                <p>{{ __('health.tdee_10')}}</p>
            </ul>
        </div>
    </div>
</div>
@endsection