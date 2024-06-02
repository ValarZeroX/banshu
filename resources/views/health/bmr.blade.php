@extends('layouts.main')
@section('title', __('banshus.bmr_calculator'))
@section('description', __('description.bmr'))
@section('main')
@vite(['resources/js/health.js'])
<div class="container">
    <h1>{{ __('banshus.bmr_calculator')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}/health">{{
                    __('banshus.health')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('banshus.bmr_calculator')}}</li>
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
                            <select class="form-select form-select equation" id="equation">
                                <option value="1" selected>Mifflin-St Jeor</option>
                                <option value="2">Harris-Benedict</option>
                                <option value="3">Katch-McArdle</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
                        <div class="col">
                            <span class="metric_units"><button type="button"
                                    class="btn btn-outline-success change_imperial">{{
                                    __('banshus.switch_to_imperial_units')}}</button></span>
                            <span class="imperial_units hidden"><button type="button"
                                    class="btn btn-outline-success change_metric">{{
                                    __('banshus.switch_to_metric_units')}}</button></span>
                            <button type="submit" class="btn btn-success calculateBMR">{{
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
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
        <div class="col">
            <p>{{ __('health.bmr_1')}}</p>
            <p>{{ __('health.bmr_2')}}</p>
            <p>{{ __('health.bmr_3')}}</p>
            <p>{{ __('health.bmr_4')}}</p>
        </div>
        <div class="col">
            <h2>{{ __('health.bmr_5')}}</h2>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>{{ __('banshus.age')}}</th>
                        <th>{{ __('banshus.female')}}</th>
                        <th>{{ __('banshus.male')}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>18 - 20</td>
                        <td>23.6 {{ __('health.calories_kg_day')}}</td>
                        <td>24 {{ __('health.calories_kg_day')}}</td>
                    </tr>
                    <tr>
                        <td>30 - 49</td>
                        <td>21.7 {{ __('health.calories_kg_day')}}</td>
                        <td>22.3 {{ __('health.calories_kg_day')}}</td>
                    </tr>
                    <tr>
                        <td>50+</td>
                        <td>20.7 {{ __('health.calories_kg_day')}}</td>
                        <td>21.5 {{ __('health.calories_kg_day')}}</td>
                    </tr>
                </tbody>
              </table>
        </div>
        <div class="col">
            <h2>{{ __('health.increase_bmr')}}</h2>
            <ul>
                <li>{{ __('health.bmr_6')}}</li>
                <li>{{ __('health.bmr_7')}}</li>
                <li>{{ __('health.bmr_8')}}</li>
                <li>{{ __('health.bmr_9')}}</li>
                <li>{{ __('health.bmr_10')}}</li>
            </ul>
        </div>
        <div class="col">
            <h2>{{ __('health.decreased_bmr')}}</h2>
            <ul>
                <li>{{ __('health.bmr_11')}}</li>
                <li>{{ __('health.bmr_12')}}</li>
                <li>{{ __('health.bmr_13')}}</li>
                <li>{{ __('health.bmr_14')}}</li>
                <li>{{ __('health.bmr_15')}}</li>
                <li>{{ __('health.bmr_16')}}</li>
            </ul>
        </div>
    </div>
</div>
@endsection