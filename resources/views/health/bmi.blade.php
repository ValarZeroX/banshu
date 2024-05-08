@extends('layouts.main')
@section('title', __('banshus.bmi_calculator'))
@section('description', __('description.area'))
@section('main')
<div class="container">
    <h1>{{ __('banshus.bmi_calculator')}}</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}">{{ __('banshus.home')}}</a></li>
            <li class="breadcrumb-item"><a href="/{{ app()->getLocale() }}/health">{{
                    __('banshus.health')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('banshus.bmi_calculator')}}</li>
        </ol>
    </nav>
    <p>{{ __('description.bmi')}}</p>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    {{ __('banshus.metric_units')}}
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                        <div class="col">
                            <label for="height" class="form-label">{{ __('banshus.height')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly"
                                    placeholder="{{ __('banshus.enter_value')}}" id="height">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                        <div class="col">
                            <label for="weight" class="form-label">{{ __('banshus.weight')}}</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control decOnly"
                                    placeholder="{{ __('banshus.enter_value')}}" id="weight">
                                <span class="input-group-text">kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                        <div class="col">
                            <button type="submit" class="btn btn-success calculateBMI">{{ __('banshus.calculate')}}</button>
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
                    <p class="fs-2 fw-bold">BMI = <span class="result"></span></p>
                    <p class="fs-2 fw-bold">{{ __('health.bmi_prime')}}= <span class="result_prime"></span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
        <div class="col">
            <h2>{{ __('health.adult_bmi')}}</h2>
            <p>{{ __('health.bmi_1')}}</p>
            <p>{{ __('health.bmi_2')}}</p>
        </div>
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>{{ __('health.status')}}</th>
                        <th>BMI (kg/m2)</th>
                        <th>{{ __('health.bmi_prime')}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ __('health.severe_thinness')}}</td>
                        <td><15</td>
                        <td><0.6</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.moderate_thinness')}}</td>
                        <td>15 - 16 </td>
                        <td>0.6 - 0.64</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.mild_thinness')}}</td>
                        <td>16 - 18.5</td>
                        <td>0.64 - 0.74</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.normal')}}</td>
                        <td>18.5 - 25</td>
                        <td>0.74 - 1.0</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.overweight')}}</td>
                        <td>25 -30</td>
                        <td>1.0 - 1.2</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.obese_class_i')}}</td>
                        <td>30 - 35</td>
                        <td>1.2 - 1.4</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.obese_class_ii')}}</td>
                        <td>35 - 40</td>
                        <td>1.4 - 1.6</td>
                    </tr>
                    <tr>
                        <td>{{ __('health.obese_class_iii')}}</td>
                        <td>>1.6</td>
                        <td>>40</td>
                    </tr>
                </tbody>
              </table>
        </div>
        <div class="col">
            <h2>{{ __('health.limitations_of_bmi')}}</h2>
            <p>{{ __('health.bmi_3')}}</p>
            <p>{{ __('health.bmi_4')}}</p>
        </div>
    </div>
</div>
@endsection